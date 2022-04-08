<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\vitri_ungtuyen;
use App\Models\gioitinh;

class tuyendung extends Model
{
    use HasFactory;
    protected $table='tuyendung';
    public $timestamps = false;
    protected $fillable=['id','hoten_ungvien','ngaysinh','sdt','diachi','email','cmnd','vitri_id','file_cv','trangthai','gioitinh_id'];

    public function vitri_ungtuyen(){
        return $this->hasOne(vitri_ungtuyen::class,'id','vitri_id');
      }
      public function gioitinh(){
        return $this->hasOne(gioitinh::class,'id','gioitinh_id');
      }
}
