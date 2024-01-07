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

class RegisterParams {
    public string $operator_number;
    public int $operator_id;
    public string $operator_passcode;
}

class RegisterAccountController extends Controller
{

    public function showRegister()
    {
        return view('auth.entry');
    }

    public function entry(AccountConfirmRequest $request)
    {
        $obj_account = DB::table('accounts')->where('email', '=', $request->email);
        
        if ($obj_account->exists()) {
            return redirect('entry')->withInput()->with('errors', ['既に登録済みのメールアドレスです。']);
        }

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

        return view('auth.confirm', ["input" => $input]);

    }

    public function certification(Request $request)
    {
        return view('auth.certification');
    }

    public function register(Request $request)
    {
        // 戻るボタン処理
        if ($request->has('back')) {
            return redirect('entry')->withInput();
        }

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

            $verification_url = env('APP_URL') . '/entry/completion/' . $verify_token;

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
        if (!$request->has('token')) {
            // 404エラー
        }
        $token = $request->token;

        Log::info('request');
        Log::info($request->all());

        $obj_account = DB::table('accounts')
        ->where('verify_token', '=', $token)
        ->where('verify_expired_at', '>=', Carbon::now())
        ->whereNull('email_verified_at');

        if (!$obj_account->exists()) {
            // 404エラー
            Log::info('account not exists');
        }

        $account = $obj_account->first();

        DB::beginTransaction();
        try {
            $previous_operator = Operator::where('staff_mail', '=', $account->email)->first();

            $register_params = $this->getRegisterOperatorParams($previous_operator);

            // 初期パスワード生成
            $initial_password = $this->createPassword();

            // アカウントテーブルに認証情報を保存
            Account::where('verify_token', '=', $token)->update([
                'operator_number' => $register_params->operator_number,
                'email_verified_at' => Carbon::now(),
                'is_reset_password' => true,
                'password' => Hash::make($initial_password),
            ]);

            if (is_null($previous_operator)) {
                // 事業者情報テーブルに初期値を登録
                $mst_operator = new Operator();
                $mst_operator->fill([
                    'operator_number' => $register_params->operator_number,
                    'operator_passcode' => $register_params->operator_passcode,
                    'operator_id' => $register_params->operator_id,
                    'operator_status' => '1',
                    'staff_last_name' => $account->last_name,
                    'staff_first_name' => $account->first_name,
                    'staff_mail' => $account->email,
                ]);
                $mst_operator->save();
            } else {
                // 既存データを更新
                Operator::where('operator_number', '=', $register_params->operator_number)->update([
                    'operator_passcode' => $register_params->operator_passcode,
                    'operator_status' => '1',
                    'staff_last_name' => $account->last_name,
                    'staff_first_name' => $account->first_name,
                ]);
            }

            $staff_name = $account->last_name . ' ' . $account->first_name;

            Mail::to($account->email)
            ->send(new AccountIssuanceCompleted($staff_name, $register_params->operator_id, $initial_password));
            
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
        $max_operator_number = Operator::max('operator_number');
        if (empty($max_operator_number)) {
            return 1;
        } else {
            return (int) substr($max_operator_number, 1) + 1;
        }
    }

    // 初期登録用のパラメータを取得
    private function getRegisterOperatorParams(Operator $mst_previous_operator = null)
    {
        $params = new RegisterParams();
        if (is_null($mst_previous_operator)) {
            // 事業者番号に使用する数値を取得
            $operator_number_numlic = $this->getNewOperatorNumber();
            $params->operator_number = 'S' . sprintf('%06d', $operator_number_numlic);
            $params->operator_id = intval('6' . sprintf('%08d', $operator_number_numlic));
            $params->operator_passcode = $this->createPassword('', 6);
        } else {
            $operator = $mst_previous_operator->first();
            $params->operator_number = $operator->operator_number;
            $params->operator_id = $operator->operator_id;
            $params->operator_passcode = $operator->operator_passcode;
        }

        return $params;
    }

}
