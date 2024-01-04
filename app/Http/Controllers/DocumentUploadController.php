<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use App\Models\UploadFile;
use Carbon\Carbon;

class DocumentUploadController extends BaseController
{

    public function index (Request $request)
    {
        try {
 
            return view('documentUpload');

        } catch(\Exception $e) {
        }
    }

    public function upload (Request $request, string $type)
    {
        try {
            $hoge = $type;

            // 事業者用のディレクトリ存在チェック
//            $hoge = Storage::disk('s3')->files('/test');

            $operatorId = '600000000';

            $errors = [];

            for ($i=1; $i<5; $i++) {
                $errors = $this->validate($request, $i);
            }
            if (count($errors) >= 1) {
                
            }

            if ($file) {
                // 添付ファイル情報の登録
                $fileNo = UploadFile::where('operatorId', $operatorId)->max('fileNo');
                if (is_null($fileNo)) {
                    $fileNo = 1;
                } else {
                    $fileNo += 1;
                }
                $model = UploadFile::create([
                    'operatorId' => $operatorId,
                    'fileNo' => $fileNo,
                    'fileType' => $request->input('fileType1'),
                    'fileName' => $file->getClientOriginalName(),
                    'uploadDate' => Carbon::now(),
                    'remark' => $request->input('remark1')
                ]);

                // ファイルサイズチェック
                if ($file->getSize() > \Config::get('system.upload.size')) {
                }

                // 拡張子チェック
                if (!in_array($file->getClientOriginalExtension(), \Config::get('system.upload.ext'))) {
                }

                // 添付ファイルの保存
                $file->storeAs('/'.$operatorId, 'test_file_'.$fileNo, 's3');

            }

            // 画面の留まる場合は入力内容をクリアして画面を再表示

            // 編集画面に戻る場合は編集画面を表示

        } catch(\Exception $e) {
            // 該当ファイルの削除（存在している場合）

            // フラッシュメッセージを表示？
            $hoge = '';
        }

    }

    /**
     * 画面入力項目のチェック処理
     */
    private function validate (Request $request, integer $index): array {

        $errors = [];
        $file = $request->file('file'.$index);

        // 入力内容チェック

        // 
        if (is_null($file)) {
            // 必須入力チェック
            $fileType1 = $request->input('fileType1');
            if (trim($fileType1) == '') {
                array_push($errors, '添付'.$index.":添付タイプは必須入力です。");
            }
            // ファイルサイズチェック
            if ($file->getSize() > \Config::get('system.upload.size')) {
                array_push($errors, '添付'.$index.":添付できるファイルのサイズは");
            }

            // 拡張子チェック
            if (!in_array($file->getClientOriginalExtension(), \Config::get('system.upload.ext'))) {
                array_push($errors, '添付'.$index.":添付できるファイルの拡張子は");
            }
        }

        return $errros;

    }

}