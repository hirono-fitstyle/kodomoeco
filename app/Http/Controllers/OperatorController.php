<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * ① 事業者登録の情報｜詳細画面
     */
    public function detail()
    {
        return view('portal.operator_detail');
    }

    /**
     * ① 事業者登録の情報｜編集画面
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * ① 事業者登録の情報｜編集処理
     */
    public function update(Request $request, string $id)
    {
        //
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
