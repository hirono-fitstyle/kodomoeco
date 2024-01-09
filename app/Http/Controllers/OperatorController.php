<?php

namespace App\Http\Controllers;

use App\Enums\OperatorStatus;
use App\Http\Requests\OperatorUpdateRequest;
use App\Models\Operator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OperatorController extends Controller
{
    /**
     * ① 事業者登録の情報｜詳細画面
     */
    public function detail(Request $request)
    {
        // $operator = Operator::where('operator_number', '=', $request->session()->get('operator_number'))->first();
        $operator = Operator::where('operator_number', '=', 'S001395')->first(); // 仮コード 本番時は上記に切り替える
        // TODO: 以下、Enumではなくinternal_codesテーブルからステータス文字列を取得する方法に変更する
        $operator->operator_status_description = OperatorStatus::getDescription($operator->operator_status);
        $operator->construction_category_value =
            $operator->getConstructionCategoryValue($operator->construction_category);
        $operator->construction_category2_value =
            $operator->getConstructionCategory2Value($operator->construction_category2);

        return view('portal.operator_detail', compact('operator'));
    }

    /**
     * 事業者登録ステータスの更新処理
     */
    public function updateStatus(Request $request)
    {
        // $operator = Operator::where('operator_number', '=', $request->session()->get('operator_number'));
        $operator = Operator::where('operator_number', '=', 'S001395'); // 仮コード 本番時は上記に切り替える

        DB::beginTransaction();
        try {
            // 再編集ボタン押下時の処理
            if ($request->has('re-edit-button')) {
                $operator->update(['operator_status' => '1']);
            }
            // 編集完了ボタン押下時の処理
            if ($request->has('edit-complete-button')) {
                $operator->update(['operator_status' => '2']);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return redirect()->route('portal.operator.detail');
    }

    /**
     * ① 事業者登録の情報｜編集画面
     */
    public function edit(Request $request)
    {
        // $operator = Operator::where('operator_number', '=', $request->session()->get('operator_number'))->first();
        $operator = Operator::where('operator_number', '=', 'S001395')->first();
        // TODO: 以下、Enumではなくinternal_codesテーブルからステータス文字列を取得する方法に変更する
        $operator->operator_status = OperatorStatus::getDescription($operator->operator_status);

        return view('portal.operator_edit', compact('operator'));
    }

    /**
     * ① 事業者登録の情報｜編集処理
     */
    public function update(OperatorUpdateRequest $request)
    {
        // 保存ボタン押下時の処理（TODO: OperatorUpdateRequest内で処理をしたいが仮保存の際は不要なため実装検討中）
        if ($request->has('save')) {
            $request->validate([
                'operator_category' => 'required',
                'oath' => 'required',
                'construction_flag' => 'required',
                'construction_category' => '55がありの場合',
                'construction_category2' => '55がありの場合',
                'construction_pre_number' => '55がありの場合|max:3',
                'construction_number' => '55がありの場合|max:6',
                'corp_number' => 'required|max:13',
                // 'operator_name' => '',
                'operator_zipcode' => 'required',
                'operator_prefecture' => 'required',
                'operator_city' => 'required',
                'operator_address' => 'required', // 法人のみ
                'operator_title' => 'required', // 法人のみ
                'representative_last_name' => 'required',
                'representative_first_name' => 'required',
                'operator_address_solo' => 'required', // 個人のみ
                // 'operator_building_solo' => '',
                // 'operator_room_number_solo' => '',
                'public_project1' => 'public_project2もしくわpublic_project3、public_project4が未選択', // 子育てエコホーム支援事業
                'public_project2' => 'public_project1もしくわpublic_project3、public_project4が未選択', // 給湯省エネ2024事業
                'public_project3' => 'public_project1もしくわpublic_project2、public_project4が未選択', // 先進的窓リノベ2024事業
                'public_project4' => 'public_project1もしくわpublic_project2、public_project3が未選択', // 賃貸集合給湯省エネ2024事業
                // 'public_buisiness1' => '', // 注文住宅の新築（建築事業者、工事請負業者）
                // 'public_buisiness2' => '', // 新築分譲住宅の購入（販売事業者、販売代理業者）
                // 'public_buisiness3' => '', // リフォーム工事（工事施工者）
                // 'public_buisiness4' => '', // 新築リース事業者（申請者と給湯器のリース契約を締結する事業者）
                // 'public_buisiness5' => '', // エネルギー小売業者に該当する（電気、ガスの販売について消費者と契約を締結する）
                'real_estate_category' => 'public_buisiness2が選択されている時必須',
                'real_estate_pre_number' => 'public_buisiness2が選択されている時必須|max:3',
                'real_estate_number' => 'public_buisiness2が選択されている時必須|max:6',
                'reform_flag' => 'public_buisiness3が選択されている時必須',
                'reform_association' => 'reform_flagがありな場合',
                'reform_association_url' => 'reform_flagがありな場合|url',
                'privacy_policy_consent1' => 'required',
                'privacy_policy_consent2' => 'required'
            ]);
        }

        // $operator = Operator::where('operator_number', '=', $request->session()->get('operator_number'));
        $operator = Operator::where('operator_number', '=', 'S001395'); // 仮コード 本番時は上記に切り替える

        DB::beginTransaction();
        try {
            $operator->update([
                'operator_category' => $request->operator_category,
                'oath' => $request->oath,
                'construction_flag' => $request->construction_flag,
                'construction_category' => $request->construction_category,
                'construction_category2' => $request->construction_category2,
                'construction_pre_number' => $request->construction_pre_number,
                'construction_number' => $request->construction_number,
                'corp_number' => $request->corp_number,
                'operator_name' => $request->operator_name,
                'operator_zipcode' => $request->operator_zipcode,
                'operator_prefecture' => $request->operator_prefecture,
                'operator_city' => $request->operator_city,
                'operator_address' => $request->operator_address,
                'operator_title' => $request->operator_title,
                'representative_last_name' => $request->representative_last_name,
                'representative_first_name' => $request->representative_first_name,
                'operator_address_solo' => $request->operator_address_solo,
                'operator_building_solo' => $request->operator_building_solo,
                'operator_room_number_solo' => $request->operator_room_number_solo,
                'public_project1' => $request->public_project1,
                'public_project2' => $request->public_project2,
                'public_project3' => $request->public_project3,
                'public_project4' => $request->public_project4,
                'public_buisiness1' => $request->public_buisiness1,
                'public_buisiness2' => $request->public_buisiness2,
                'public_buisiness3' => $request->public_buisiness3,
                'public_buisiness4' => $request->public_buisiness4,
                'public_buisiness5' => $request->public_buisiness5,
                'real_estate_category' => $request->real_estate_category,
                'real_estate_pre_number' => $request->real_estate_pre_number,
                'real_estate_number' => $request->real_estate_number,
                'reform_flag' => $request->reform_flag,
                'reform_association' => $request->reform_association,
                'reform_association_url' => $request->reform_association_url,
                'privacy_policy_consent1' => $request->privacy_policy_consent1,
                'privacy_policy_consent2' => $request->privacy_policy_consent2
            ]);

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e);

            return redirect()->back()->with('alert', __('An error has occurred.'));
        }

        return redirect()->route('portal.operator.detail');
    }

    /**
     * ① 事業者登録の情報 | 添付書類登録画面
     */
    public function docCreate(Request $request, string $id)
    {
        //
    }

    /**
     * ① 事業者登録の情報 | 添付書類登録処理
     */
    public function docStore(Request $request, string $id)
    {
        //
    }

    /**
     * ① 事業者登録の情報 | 登録申請画面
     */
    public function regRequestCreate(Request $request, string $id)
    {
        //
    }

    /**
     * ① 事業者登録の情報 | 登録申請処理
     */
    public function regRequestStore(Request $request, string $id)
    {
        //
    }
}
