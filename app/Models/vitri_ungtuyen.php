<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tuyendung;

class vitri_ungtuyen extends Model
{
    use HasFactory;
    protected $table='vitri_ungtuyen';
    public $timestamps = false;
    protected $fillable=['id','tenvitri','chitiet'];

    public function tuyendung(){
        return $this->hasMany(tuyendung::class,'vitri_id','id');
      }
}
