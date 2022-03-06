<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helper\giohang;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\nhanvien;
use App\Models\doanhnghiep;
use App\Models\thongtin;
use App\Models\lienhe;
use App\Models\gioithieu;
use App\Models\video;
use App\Models\giaithuong;
use App\Models\giaoviec;
use App\Models\baiviet;
use App\Models\dauan;
use App\Models\cauhoi;
use App\Models\mangluoi;
use App\Models\slider;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $view->with([
                'danhmuc'=>danhmuc::all(),
                "slider"=>slider::where('trangthai',1)->get(),
                "thongtin"=>thongtin::where('trangthai',0)->get(),
                "linhvuc"=>danhmuc::where('linhvuc_id',0)->get(),
                "dichvu"=>danhmuc::where('linhvuc_id',1)->get(),
                "doanhnghiep"=>doanhnghiep::where('loai_kh',0)->get(),
                "chinhphu"=>doanhnghiep::where('loai_kh',1)->get(),
                'lienhe'=>lienhe::all(),
                'dauan'=>dauan::all(),
                'gioithieu'=>gioithieu::all(),
                'mangluoi'=>mangluoi::all(),
                'giaoviec'=>giaoviec::all(),
                'video'=>video::where('status',0)->paginate(6),
                'baiviet'=>baiviet::where('trangthai',0)->paginate(5),
                'cauhoi'=>cauhoi::where('trangthai',1)->paginate(5),
                'sukien'=>baiviet::where('trangthai',0)->where('phanloai_id',0)->paginate(6),
                'congnghe'=>baiviet::where('trangthai',0)->where('phanloai_id',1)->paginate(6),
                'giohang'=>new giohang(),
                'sp'=>sanpham::search()->paginate(20),
            ]);

        });
    }
}
