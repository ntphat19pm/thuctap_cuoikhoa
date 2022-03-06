<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\nhanvien;

class giaoviec extends Model
{
    use HasFactory;
    protected $table='giaoviec';
    public $timestamps = false;
    protected $fillable=['id','ten_congviec','nguoinhan','hanchot','ngaynop','trangthai','file_nop'];

    public function nhanvien()
    {
        return $this->hasOne(nhanvien::class,'id','nguoinhan');
    }
}
