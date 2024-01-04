<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * ②本アカウントの利用者の情報 | 詳細画面
     */
    public function detail()
    {
        return view('portal.manager_detail');
    }

    /**
     * ②本アカウントの利用者の情報 | 編集画面
     */
    public function edit()
    {
        return view('portal.manager_edit');
    }

    /**
     * ②本アカウントの利用者の情報 | 編集処理
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
