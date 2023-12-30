<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\MstJigyoshas;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Carbon\Carbon;

use App\Http\Requests\AccountConfirmRequest;
use App\Mail\VerifyEmailAddressMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountIssuanceCompleted;

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
            // 初期パスワード生成
            $operator_passcode = $this->createPassword('alpha_numlic', 6);

            // 事業者番号に使用する数値を取得
            $operator_number = $this->getNewOperatorNumber();

            // 認証トークン
            $verify_token = str_random(32);

            // アカウントテーブルに認証情報を保存
            $account = new Account();
            $account->fill([
                'operator_number' => 'S' . sprintf('%06d', $operator_number),
                'verify_token' => $verify_token,
                'verify_expired_at' => Carbon::now()->addHour(24),

            ]);
            $account->save();
            // $account['initial_password'] = $initial_password; // 認証メールへ添付するため

            // 事業者情報テーブルに初期値を登録
            $mst_jigyosha = new MstJigyoshas();
            $mst_jigyosha->fill([
                'operatorNumber' => 'S' . sprintf('%06d', $operator_number),
                'operatorPasscode' => $operator_passcode,
                'operatorId' => '6' . sprintf('%08d', $operator_number),
                'staffLastName' => $request->last_name,
                'staffFirstName' => $request->first_name,
                'staffMail' => $request->email,
            ]);
            $mst_jigyosha->save();

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
            // 初期パスワード生成
            $initial_password = $this->createPassword();

            // アカウントテーブルに認証情報を保存
            Account::where('verify_token', '=', $token)->update([
                'email_verified_at' => Carbon::now(),
                'is_reset_password' => true,
                'password' => Hash::make($initial_password),
            ]);
            // $account['initial_password'] = $initial_password; // 認証メールへ添付するため

            $obj_mst_jigyosha = DB::table('mst_jigyoshas')->where('operatorNumber', '=', $account->operator_number);

            if (!$obj_mst_jigyosha->exists()) {
                // 404エラー
                Log::info('mst_jigyoshas not exists');
            }
            $mst_jigyosha = $obj_mst_jigyosha->first();
            Log::info($mst_jigyosha->staffLastName);

            $staff_name = $mst_jigyosha->staffLastName . ' ' . $mst_jigyosha->staffFirstName;

            Mail::to($mst_jigyosha->staffMail)
            ->send(new AccountIssuanceCompleted($staff_name, $mst_jigyosha->operatorId, $initial_password));
            
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
        $max_operator_number = MstJigyoshas::max('operatorNumber');
        if (empty($max_operator_number)) {
            return 1;
        } else {
            return (int) substr($max_operator_number, 1) + 1;
        }
    }

}
