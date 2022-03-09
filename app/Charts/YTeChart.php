<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class YTeChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = chitieu::select('yte','tytrong_yte')->first();
        $TH = thuchien_chitieu::select('yte')->first();

        $ptTH = $TH->yte/$KH->yte ;
        $conlai= $KH->yte - $TH->yte;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_yte;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_yte;
        }
        return Chartisan::build()
        ->labels(['Doanh thu dịch vụ'])
        ->dataset('Kế hoạch', [$KH->yte])
        ->dataset('Thực hiện', [$TH->yte])
        ->dataset('Còn lại', [$conlai]);
    }
}