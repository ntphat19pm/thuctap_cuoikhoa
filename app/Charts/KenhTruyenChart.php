<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class KenhTruyenChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = chitieu::select('kenhtruyen','tytrong_kenhtruyen')->first();
        $TH = thuchien_chitieu::select('kenhtruyen')->first();

        $ptTH = $TH->kenhtruyen/$KH->kenhtruyen ;
        $conlai= $KH->kenhtruyen - $TH->kenhtruyen;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_kenhtruyen;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_kenhtruyen;
        }
        return Chartisan::build()
        ->labels(['Doanh thu kênh truyền'])
        ->dataset('Kế hoạch', [$KH->kenhtruyen])
        ->dataset('Thực hiện', [$TH->kenhtruyen])
        ->dataset('Còn lại', [$conlai]);
    }
}