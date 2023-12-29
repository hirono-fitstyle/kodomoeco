<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DocumentDownloadController extends BaseController
{

    public function index (Request $request)
    {
        try {

            // HTML内容確認用
//            return view('apply');

            $pdf = \PDF::loadView('apply')
                ->setPaper('a4')
                ->setOption('enable-local-file-access', true)
                ->setOption('keep-relative-links', true)
                ->setOption('encoding', 'utf-8')
                ->setOption('margin-top', '20')
                ->setOption('margin-bottom', '20')
                ->setOption('margin-left', '20')
                ->setOption('margin-right', '20')
                ;
            return $pdf->inline('(様式1)事業者登録申請書・規約.pdf');  //ブラウザ上で開ける

        } catch(\Exception $e) {
            $hoge = $e->getMessage();
        }
    }
}