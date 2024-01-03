<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Operator;
use Carbon\Carbon;


class DocumentDownloadController extends BaseController
{

    public function index (Request $request)
    {
        try {
            $operatorId = '600000084';

            $operator = Operator::where('operatorId', $operatorId)
                ->get()
                ->toArray();

            // 出力日付（和暦）を設定
            $operator[0]['eradate'] = $this->getEraDate(Carbon::now());

            // HTML内容確認用
//            return view('apply', $operator[0]);

            $pdf = \PDF::loadView('apply', $operator[0])
                ->setPaper('a4')
                ->setOption('enable-local-file-access', true)
                ->setOption('keep-relative-links', true)
                ->setOption('encoding', 'utf-8')
                ->setOption('margin-top', '15')
                ->setOption('margin-bottom', '15')
                ->setOption('margin-left', '17')
                ->setOption('margin-right', '17')
                ;
            return $pdf->inline('(様式1)事業者登録申請書・規約.pdf');  //ブラウザ上で開ける

        } catch(\Exception $e) {
            $hoge = $e->getMessage();
        }
    }

    /**
     * 西暦日付を和暦日付に変換する（簡易版）
     */
    private function getEraDate ($date)
    {
        $eras = [
            ['year' => 2019, 'name' => '令和', 'year2' => '31', 'name2' => '平成', 'new_Japanese_calendar' => '平成31年度'],
            ['year' => 1989, 'name' => '平成', 'year2' => '元', 'name2' => '平成', 'new_Japanese_calendar' => '平成元年度'],
            ['year' => 1926, 'name' => '昭和', 'year2' => '15', 'name2' => '大正', 'new_Japanese_calendar' => '大正15年度'],
        ];

        foreach ($eras as $era) {
            if ($date->year === $era['year']) {
                return [
                    'era' => $era['name2'],
                    'year' => sprintf('%02d', $era['year2']),
                    'month' => sprintf('%02d', $date->month),
                    'day' => sprintf('%02d', $date->day)
                ];
            }
            if ($date->year >= $era['year']) {
                $year = $date->year - $era['year'] + 1;
                return [
                    'era' => $era['name'],
                    'year' => sprintf('%02d', $year),
                    'month' => sprintf('%02d', $date->month),
                    'day' => sprintf('%02d', $date->day)
                ];

            }
        }
    }

}