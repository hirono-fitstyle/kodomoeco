<?php

namespace App\Http\Controllers;

use App\Enums\OperatorStatus;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * ① 事業者登録の情報｜詳細画面
     */
    public function detail(Request $request)
    {
        $operator = Operator::where('operatorNumber', '=', $request->session()->get('operator_number'))->first();
        $operator->operatorStatus = OperatorStatus::getDescription($operator->operatorStatus);

        return view('portal.operator_detail', compact('operator'));
    }

    /**
     * ① 事業者登録の情報｜編集画面
     */
    public function edit(Request $request)
    {
        $operator = Operator::where('operatorNumber', '=', $request->session()->get('operator_number'))->first();
        $operator->operatorStatus = OperatorStatus::getDescription($operator->operatorStatus);

        return view('portal.operator_edit', compact('operator'));
    }

    /**
     * ① 事業者登録の情報｜編集処理
     */
    public function update(Request $request)
    {
        dd($request->input());

        if ($request->has('tmp-save')){

        // ここに仮保存押下時の処理

        } elseif($request->has('save')) {
        // ここに保存押下時の処理
        }
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
