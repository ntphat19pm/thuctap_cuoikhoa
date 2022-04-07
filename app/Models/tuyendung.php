<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuyendung extends Model
{
    use HasFactory;
    protected $table='tuyendung';
    public $timestamps = false;
    protected $fillable=['id','hoten_ungvien','ngaysinh','sdt','diachi','email','cmnd','vitri_ungtuyen','file_cv','trangthai'];

}
