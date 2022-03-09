<?php

namespace App\Imports;

use App\Models\chitieu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class chitieu_import implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new chitieu([
            'thang_id' => $row['thang'],
            'doanhthu_dichvu' => $row['doanh_thu_dich_vu'],
            'tytrong_dichvu' => $row['ty_trong_doanh_thu_dich_vu'],
            'doanhthu_tong' => $row['tong_doanh_thu'],
            'tytrong_tong' => $row['ty_trong_tong_doanh_thu'],
            'duan' => $row['doanh_thu_du_an'],
            'tytrong_duan' => $row['ty_trong_doanh_thu_du_an'],
            'kenhtruyen' => $row['doanh_thu_kenh_truyen'],
            'tytrong_kenhtruyen' => $row['ty_trong_doanh_thu_kenh_truyen'],
            'giaoduc' => $row['doanh_thu_giao_duc'],
            'tytrong_giaoduc' => $row['ty_trong_doanh_thu_giao_duc'],
            'yte' => $row['doanh_thu_y_te'],
            'tytrong_yte' => $row['ty_trong_doanh_thu_y_te'],
        ]);
    }
}
