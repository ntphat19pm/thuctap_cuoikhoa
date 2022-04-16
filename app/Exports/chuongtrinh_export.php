<?php

namespace App\Exports;

use App\Models\chuongtrinh;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class chuongtrinh_export implements FromCollection, WithHeadings, WithMapping
{
    public function headings(): array
    {
        return [
            'thang_id',
            'ten_chuongtrinh',
            'kehoach',
            'tytrong',
            'thuchien',
        ];
    }
    public function map($row): array
    {
        return [
            $row->thang_id,
            $row->ten_chuongtrinh,
            $row->kehoach,
            $row->tytrong,
            $row->thuchien,
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return chuongtrinh::all();
    }
}
