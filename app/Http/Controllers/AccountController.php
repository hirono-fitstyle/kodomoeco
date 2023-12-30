<?php

namespace App\Http\Controllers;

use App\Models\MstJigyoshas;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

    public function logout()
    {
        Auth::logout();
        Log::info('logout done!');

        return view('auth.login');
    }
}
