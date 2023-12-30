<?php

namespace App\Http\Controllers;

use App\Models\MstJigyoshas;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ResetPasswordRequestRequest;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordRequest as ResetPasswordRequestMail;
use App\Mail\ResetPasswordComplete;

class AccountController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $operator_id = $request->operator_id;
        $password = $request->password;

        $obj_mst_jigyosha = MstJigyoshas::where('operatorId', '=', $operator_id);

        if (!$obj_mst_jigyosha->exists()) {
            // アカウント存在なしエラー
            Log::info('アカウント存在なしエラー');
            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        $mst_jigyosha = $obj_mst_jigyosha->first();

        $obj_account = Account::where('operator_number', '=', $mst_jigyosha->operatorNumber);
        $account = $obj_account->first();

        if (!password_verify($password, $account->password)) {
            // パスワード不一致エラー
            Log::info('パスワード不一致エラー');
            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        $request->session()->regenerate();

        // セッションに保存
        $request->session()->put('operator_number', $mst_jigyosha->operatorNumber);
        $request->session()->put('operator_id', $operator_id);
        $request->session()->put('password', $password);

        $request->merge(['operator_number' => $mst_jigyosha->operatorNumber]);
        $credentials = $request->validate([
            'operator_number' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($account->is_reset_password) {
                // パスワード再設定画面へ
                return redirect()->route('portal.reset-initial-password');
            }

            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    public function showPortalResetInitialPassword()
    {
        return view('auth.passwords.reset-initial-password');
    }

    public function showPortalResetInitialPasswordStore(Request $request)
    {
        $operator_number = $request->session()->get('operator_number');
        DB::beginTransaction();
        try {
            $user = Account::where('operator_number', $operator_number)->first();
            $user->fill([
                'password' => Hash::make($request->password),
                'is_reset_password' => false,
            ]);
            $user->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    public function showPortalTop()
    {
        return view('portal.top');
    }

    public function showResetPasswordRequest()
    {
        return view('auth.passwords.reset-request');
    }

    public function resetPasswordRequestConfirm(ResetPasswordRequestRequest $request)
    {
        $obj_mst_jigyosha = MstJigyoshas::where('operatorId', '=', $request->operator_id)
            ->where('staffLastName', '=', $request->last_name)
            ->where('staffFirstName', '=', $request->first_name)
            ->where('staffMail', '=', $request->email);

        if (!$obj_mst_jigyosha->exists()) {
            return redirect()->back()->with('alert', __('Account not found.'));
        }

        $mst_jigyosha = $obj_mst_jigyosha->first();

        $request->session()->put('operator_number', $mst_jigyosha->operatorNumber);
        $request->session()->put('email', $request->email);

        $split_email = explode($request->email, '@');
        $domain_length = strlen($split_email[1]);
        $mask_email = Str::mask($split_email[0], '*', 1) . '@' . Str::mask($split_email[1], '*', $domain_length - 1, $domain_length - 2);
        Log::info('mask_email');
        Log::info($mask_email);
        return view('auth.passwords.reset-request-confirm')->with(['mask_email' => $mask_email]);
    }

    public function resetPasswordRequestComplete(Request $request)
    {
        $operator_number = $request->session()->pull('operator_number');
        $email = $request->session()->pull('email');
        $reset_token = str_random(32);

        DB::beginTransaction();
        try {
            $user = Account::where('operator_number', $operator_number)->first();
            $user->fill([
                'password_reset_token' => $reset_token,
            ]);
            $user->save();

            $reset_url = 'http://localhost:8080/reset-password/' . $reset_token;
            Mail::to($email)->send(new ResetPasswordRequestMail($reset_url));

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return view('auth.passwords.reset-password-complete');
    }

    public function showResetPassword(Request $request)
    {
        $obj_account = Account::where('password_reset_token', $request->token);

        if (!$obj_account->exists()) {
            // 対象データなしエラー
            return view('auth.login');
        }

        $request->session()->put('reset_token', $request->token);

        return view('auth.passwords.reset');
    }

    public function resetPasswordComplete(ResetPasswordRequest $request)
    {
        $reset_token = $request->session()->pull('reset_token');
        DB::beginTransaction();
        try {
            $account = Account::where('password_reset_token', $reset_token)->first();
            $account->fill([
                'password' => Hash::make($request->password),
                'password_reset_token' => null,
            ]);
            $account->save();

            $mst_jigyosha = MstJigyoshas::where('operatorNumber', '=', $account->operator_number)->first();

            Mail::to($mst_jigyosha->staffMail)->send(new ResetPasswordComplete($mst_jigyosha->operatorId));

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return view('auth.passwords.reset-complete');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        redirect()->route('show-login');
    }
}
