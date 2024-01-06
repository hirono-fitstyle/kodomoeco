<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use App\Models\Account;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use \Symfony\Component\HttpFoundation\Response;
use App\Consts\OperatorStatusConst;

class ManagerController extends Controller
{
    /**
     * ②本アカウントの利用者の情報 | 詳細画面
     */
    public function detail()
    {   

        $operator = Operator::where('operator_id', '=', '600000001')->first();

        return view('portal.manager_detail', compact('operator'));
    }

    /**
     * ②本アカウントの利用者の情報 | 編集画面
     */
    public function edit()
    {
        $operator = Operator::where('operator_id', '=', '600000001')->first();

        return view('portal.manager_edit', compact('operator'));
    }

    /**
     * ②本アカウントの利用者の情報 | 編集処理
     */
    public function update(Request $request)
    {
        DB::beginTransaction();
        try {

            // アカウント情報の更新
            Operator::where('operator_id', '600000001')
                    ->update([
                        'staff_department' => $request->staffDepartment,
                        'staff_posision' => $request->staffPosision,
                        'staff_last_name' => $request->staffLastName,
                        'staff_first_name' => $request->staffFirstName,
                        'staff_zipcode' => $request->staffZipcode,
                        'staff_prefecture' => $request->staffPrefecture,
                        'staff_city' => $request->staffCity,
                        'staff_address' => $request->staffAddress,
                        'staff_building' => $request->staffBuilding,
                        'staff_room_number' => $request->staffRoomNumber,
                        'staff_tel' => $request->staffTel,
                        'staff_mobile' => $request->staffMobile,
                        'recieve_mail_flag' => $request->recieveMailFlag
                    ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return redirect()->route('portal.manager.detail');

    }

    public function showChangeMailAddressRequest ()
    {
        return view('portal.mail_addresses.change-mail-address-request');
    }

    public function showChangeMailAddressRequestConfirm (Request $request)
    {
        DB::beginTransaction();
        try {
            $operator_number = $request->session()->get('operator_number');
            $account = Account::where('operator_number', $operator_number)->first();
            
            $errors = [];
            if ($request->mail_address != $request->mail_address_new) {
                array_push($errors, '新しいメールアドレス と 新しいメールアドレス（確認用） の入力が一致しません。');
            }
            if (!password_verify($request->current_password, $account->password)) {
                array_push($errors, 'パスワードをご確認ください。');
            }

            if (count($errors) >= 1) {
                return redirect()->back()->with('errors', $errors);
            } else {
                // 認証トークン
                $verify_token = str_random(32);

                // アカウントテーブルに認証情報を更新
                $account = new Account();
                $account::where('operator_number', $operator_number)
                        ->update([
                            'verify_token' => $verify_token,
                            'verify_expired_at' => Carbon::now()->addHour(24),
                        ]);
                    }
                
                // 新しいメールアドレス宛に変更受付完了メールを送信
/*            
                $emailFrom = 'kiyoshi.hirono@fast-integration.co.jp';
                $emailTo = $account->email;
                $subject = '【住宅省エネ2023キャンペーン】メールアドレス変更受付（まだ変更は完了していません）';

                Mail::send(
                    'emails.auth.account-issuance-completed', 
                [
                    'user_name' => $staff_name,
                    'operator_id' => $mst_operator->operator_number,
                    'password' => $initial_password
                ],
                    function ($message) use ($emailFrom, $emailTo, $subject) {
                    $message->from($emailFrom);
                    $message->to($emailTo);
                    $message->subject($subject);
                });
*/
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);
    
            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        // 変更受付完了画面を表示
        return view('portal.mail_addresses.change-mail-address-request-confirm');

    }
    /**
     * 郵便番号から住所情報を取得する
     * 住所情報の取得については「ポストくん」のAPIを使用する。
     */
    public function getAddress (Request $request)
    {
        $baseUrl = "https://postcode.teraren.com/postcodes/";
        $zipCode = trim(str_replace("-", "", $request->zipCode));
        $response = Http::get($baseUrl . $zipCode . ".json");

        switch ($response->status()) {
            case Response::HTTP_OK:
                $status = 'ok';
                $addressList = [
                    'prefecture' => $response->json()['prefecture'],
                    'city' => $response->json()['city'],
                    'street' => $response->json()['suburb'],
                ];
                break;
            case Response::HTTP_NOT_FOUND:
                $status = 'ok';
                $addressList = null;
                break;
            default:
                $status = 'ng';
                $addressList = null;
                break;
        }

        return [
            'status' => $status,
            'addressList' => $addressList,
            'existInputZipCode' => $zipCode != '' ? true : false
        ];
    }
}
