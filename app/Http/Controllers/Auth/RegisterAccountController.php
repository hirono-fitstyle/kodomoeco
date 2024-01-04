<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountConfirmRequest;
use App\Mail\AccountIssuanceCompleted;
use App\Mail\VerifyEmailAddressMail;
use App\Models\Account;
use App\Models\Operator;

use Exception;
use Carbon\Carbon;

class RegisterAccountController extends Controller
{

    public function showRegister()
    {
        return view('auth.entry');
    }

    public function entry(AccountConfirmRequest $request)
    {
        $request->session()->put('form_inputs', [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'email' => $request->email,
        ]);

        return redirect()->route('entry.confirm');
    }

    public function confirm(Request $request)
    {
        //セッションから値を取り出す
        $input = $request->session()->pull("form_inputs");

        Log::info('confirm');
        Log::info($input);

        return view('auth.confirm', ["input" => $input]);

    }

    public function certification(Request $request)
    {
        return view('auth.certification');
    }

    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            // 認証トークン
            $verify_token = str_random(32);

            // アカウントテーブルに認証情報を保存
            $account = new Account();
            $account->fill([
                'verify_token' => $verify_token,
                'verify_expired_at' => Carbon::now()->addHour(24),
                'last_name' => $request->last_name,
                'first_name' => $request->first_name,
                'email' => $request->email,
            ]);
            $account->save();

            $verification_url = 'http://localhost:8080/entry/completion/' . $verify_token;

            Mail::to($request->email)->send(new VerifyEmailAddressMail($verification_url));
            
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return view('auth.certification');
    }

    public function completion(Request $request)
    {
        if ($request->has('token')) {
            // 404エラー
        }
        $token = $request->token;

        Log::info('token');
        Log::info($token);

        $obj_account = DB::table('accounts')
        ->where('verify_token', '=', $token)
        ->where('verify_expired_at', '>=', Carbon::now())
        ->whereNull('email_verified_at');

        if (!$obj_account->exists()) {
            // 404エラー
            Log::info('account not exists');
        }

        $account = $obj_account->first();

        Log::info('account');
        Log::info($account->operator_number);

        DB::beginTransaction();
        try {
            // 事業者番号に使用する数値を取得
            $operator_number_numlic = $this->getNewOperatorNumber();

            // 初期パスワード生成
            $initial_password = $this->createPassword();

            // 初期パスコード生成
            $operator_passcode = $this->createPassword('alpha_numlic', 6);

            // 事業者番号
            $operator_number = 'S' . sprintf('%06d', $operator_number_numlic);

            // アカウントテーブルに認証情報を保存
            Account::where('verify_token', '=', $token)->update([
                'operator_number' => $operator_number,
                'email_verified_at' => Carbon::now(),
                'is_reset_password' => true,
                'password' => Hash::make($initial_password),
            ]);

            $obj_operator = DB::table('operators')->where('operatorNumber', '=', $account->operator_number);

            // 事業者情報テーブルに初期値を登録
            $mst_operator = new Operator();
            $mst_operator->fill([
                'operatorNumber' => $operator_number,
                'operatorPasscode' => $operator_passcode,
                'operatorId' => '6' . sprintf('%08d', $operator_number),
                'staffLastName' => $account->last_name,
                'staffFirstName' => $account->first_name,
                'staffMail' => $account->email,
            ]);
            $mst_operator->save();

            if (!$obj_operator->exists()) {
                // 404エラー
                Log::info('operators not exists');
            }
            $mst_operator = $obj_operator->first();
            Log::info($mst_operator->staffLastName);

            $staff_name = $mst_operator->staffLastName . ' ' . $mst_operator->staffFirstName;

            Mail::to($mst_operator->staffMail)
            ->send(new AccountIssuanceCompleted($staff_name, $mst_operator->operatorId, $initial_password));
            
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            // 500エラー画面へ
        }

        return view('auth.completion');
    }

    private function createPassword($type = '', $length = 8)
    {
        /*
         * 半角大文字・小文字,数字,記号をそれぞれ配列にする
         */
        $pwd_small = range('a', 'z');
        $pwd_big   = range('A', 'Z');
        $pwd_num   = range('0', '9');
        $pwd_sybl  = ['!', '$', '%', '&', '(', ')', '*', '+', '~', '.', ','];
            
        switch($type){
            case 'alpha_numlic': //英字大小+数字
                $pwd_strings = array_merge($pwd_small, $pwd_big, $pwd_num);
                break;
            default: //全て
                $pwd_strings = array_merge($pwd_small, $pwd_big, $pwd_num, $pwd_sybl);
        }
            
        $pwd = array();
        while (count($pwd) < $length) {
            $key = array_rand($pwd_strings); //生成された配列からランダムに1つのキーを取り出す
            $key = $pwd_strings[$key]; //そのキーの値を得る
            $pwd[] = $key;
        }
        shuffle($pwd); //配列をシャッフルする
        $pwd = implode($pwd); //区切り文字無しで文字列に

        return $pwd;
    }

    // 事業所番号の先頭文字を除いた数値のみを取得
    private function getNewOperatorNumber()
    {
        $max_operator_number = Operator::max('operatorNumber');
        if (empty($max_operator_number)) {
            return 1;
        } else {
            return (int) substr($max_operator_number, 1) + 1;
        }
    }

}
