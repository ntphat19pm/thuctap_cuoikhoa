<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\chitieu;
use App\Models\thuchien_chitieu;

class DoanhThuDichVuChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $KH = chitieu::select('doanhthu_dichvu','tytrong_dichvu')->first();
        $TH = thuchien_chitieu::select('doanhthu_dichvu')->first();

        $ptTH = $TH->doanhthu_dichvu/$KH->doanhthu_dichvu ;
        $conlai= $KH->doanhthu_dichvu - $TH->doanhthu_dichvu;
        $diem = 0 ;

        if($ptTH < 120 )
        {
            $diem = $ptTH * $KH->tytrong_dichvu;
        }
        else
        {
            $diem = (120/100) * $KH->tytrong_dichvu;
        }

        return Chartisan::build()
        ->labels(['Doanh thu dịch vụ  '])
        ->dataset('Kế hoạch', [$KH->doanhthu_dichvu])
        ->dataset('Thực hiện', [$TH->doanhthu_dichvu])
        ->dataset('Còn lại', [$conlai])
        ->dataset('Điểm ', [number_format($diem,1)]);
    }
}