<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\home_controller; 
use App\Http\Controllers\danhmuc_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache',function(){
    $exitCode= Artisan::call('cache:clear');
});

Route::get('/showlinhvuc/{id}', [home_controller::class, 'showlinhvuc'])->name('home.showlinhvuc');


Route::get('/','home_controller@index')->name('home.index');
Route::get('/home','home_controller@home')->name('home.home');
Route::get('/themgiohang/{id}','giohang_controller@themgiohang')->name('home.themgiohang');
Route::get('/shop','home_controller@shop')->name('home.shop');

Route::get('/gioithieu','home_controller@gioithieu')->name('home.gioithieu');
Route::get('/mangluoi','home_controller@mangluoi')->name('home.mangluoi');
Route::get('/giaithuong','home_controller@giaithuong')->name('home.giaithuong');
Route::get('/dauan','home_controller@dauan')->name('home.dauan');
Route::get('/cauhoi','home_controller@cauhoi')->name('home.cauhoi');
Route::get('/chinhsach','home_controller@chinhsach')->name('home.chinhsach');
Route::get('/dieukhoan','home_controller@dieukhoan')->name('home.dieukhoan');

Route::get('/dangnhap','home_controller@get_dangnhap')->name('home.getdangnhap');
Route::get('/dangxuat','home_controller@dangxuat')->name('home.dangxuat');
Route::post('/dangnhap','home_controller@post_dangnhap')->name('home.postdangnhap');
Route::get('/dangky','home_controller@get_dangky')->name('home.getdangky');

Route::post('/thongtin','home_controller@post_thongtin')->name('home.postthongtin');
Route::post('/binhluan','home_controller@post_binhluan')->name('home.postbinhluan');
Route::post('/cauhoi','home_controller@post_cauhoi')->name('home.postcauhoi');
Route::get('/chitiet/{id}','home_controller@chitiet')->name('home.chitiet');

Route::get('/lienhe','home_controller@lienhe')->name('home.lienhe');
Route::get('/video','home_controller@video')->name('home.video');
Route::get('/baiviet','home_controller@baiviet')->name('home.baiviet');
Route::get('/chitietbai/{id}','home_controller@chitietbai')->name('home.chitietbai');

Route::get('/edit/{id}','home_controller@edit')->name('home.edit');
Route::post('/update','home_controller@update')->name('home.update');

Route::get('/giohang','giohang_controller@index')->name('giohang.index');
Route::get('/giohang/capnhat/{id}','giohang_controller@capnhat')->name('giohang.capnhattang');
Route::get('/giohang/xoa/{id}','giohang_controller@xoa')->name('giohang.xoa');
Route::get('/giohang/xoatatca','giohang_controller@xoatatca')->name('giohang.xoatatca');

Route::get('/giohang/xacnhan','dathang_controller@create')->name('get_dathang');
Route::post('/giohang/xacnhan','dathang_controller@store')->name('post_dathang');
Route::get('/giohang/completed','dathang_controller@completed')->name('dathang.completed');
Route::get('/donhang/{id}','dathang_controller@getdonhang')->name('get.donhang');
Route::get('/donhang_chitiet/{id}','dathang_controller@getchitiet_donhang')->name('get.chitiet_donhang');


Route::get('admin/dangnhap','nhanvien_controller@getdangnhap')->name('get.dangnhap');
Route::post('admin/dangnhap','nhanvien_controller@postdangnhap')->name('post.dangnhap');
Route::get('admin/dangxuat','nhanvien_controller@dangxuat')->name('dangxuat');

Route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function(){
    Route::get('/', 'admin_controller@index')->name('admin.index');
    
    Route::post('/sanpham/nhap', 'sanpham_controller@postNhap')->name('sanpham.nhap');
    Route::get('/sanpham/xuat', 'sanpham_controller@getXuat')->name('sanpham.xuat');

    Route::post('/dacdiem/nhap', 'dacdiem_controller@postNhap')->name('dacdiem.nhap');
    Route::get('/dacdiem/xuat', 'dacdiem_controller@getXuat')->name('dacdiem.xuat');

    Route::post('/loiich/nhap', 'loiich_controller@postNhap')->name('loiich.nhap');
    Route::get('/loiich/xuat', 'loiich_controller@getXuat')->name('loiich.xuat');

    Route::post('/tinhnang/nhap', 'tinhnang_controller@postNhap')->name('tinhnang.nhap');
    Route::get('/tinhnang/xuat', 'tinhnang_controller@getXuat')->name('tinhnang.xuat');

    Route::post('/profile/sua/{id}', 'profile_controller@postSua')->name('profile.sua');

    Route::get('/thongtin/active/{id}', 'thongtin_controller@active')->name('thongtin.active');
    Route::get('/thongtin/unactive/{id}', 'thongtin_controller@unactive')->name('thongtin.unactive');
    Route::get('/slider/active/{id}', 'slider_controller@active')->name('slider.active');
    Route::get('/slider/unactive/{id}', 'slider_controller@unactive')->name('slider.unactive');
    Route::get('/giaoviec/active/{id}', 'giaoviec_controller@active')->name('giaoviec.active');
    Route::get('/giaoviec/unactive/{id}', 'giaoviec_controller@unactive')->name('giaoviec.unactive');
    Route::get('/binhluan/active/{id}', 'binhluan_controller@active')->name('binhluan.active');
    Route::get('/binhluan/unactive/{id}', 'binhluan_controller@unactive')->name('binhluan.unactive');
    Route::get('/cauhoi/active/{id}', 'cauhoi_controller@active')->name('cauhoi.active');
    Route::get('/cauhoi/unactive/{id}', 'cauhoi_controller@unactive')->name('cauhoi.unactive');
    Route::get('/video/active/{id}', 'video_controller@active')->name('video.active');
    Route::get('/video/unactive/{id}', 'video_controller@unactive')->name('video.unactive');

    
    Route::resources([
        'danhmuc'=>'danhmuc_controller',
        'doanhnghiep'=>'doanhnghiep_controller',
        'loiich'=>'loiich_controller',
        'dacdiem'=>'dacdiem_controller',
        'tinhnang'=>'tinhnang_controller',
        'sanpham'=>'sanpham_controller',
        'slider'=>'slider_controller',
        'chucvu'=>'chucvu_controller',
        'thongtin'=>'thongtin_controller',
        'lienhe'=>'lienhe_controller',
        'video'=>'video_controller',
        'menu'=>'menu_controller',
        'baiviet'=>'baiviet_controller',
        'profile'=>'profile_controller',
        'binhluan'=>'binhluan_controller',
        'nhanvien'=>'nhanvien_controller',
        'gioithieu'=>'gioithieu_controller',
        'mangluoi'=>'mangluoi_controller',
        'dauan'=>'dauan_controller',
        'giaithuong'=>'giaithuong_controller',
        'cauhoi'=>'cauhoi_controller',
        'tinhtrang'=>'tinhtrang_controller',
        'thongke'=>'thongke_controller',
        'chitieu'=>'chitieu_controller',
        'thuchien_chitieu'=>'thuchien_chitieu_controller',
        'giaoviec'=>'giaoviec_controller',
        'nop_file'=>'nop_file_controller',
    ]);
});

/*Route::prefix('admin')->group(function () {
    Route::get('/', 'admin_controller@index')->name('admin.index');
    Route::resources([
        'danhmuc'=>'danhmuc_controller',
        'khachhang'=>'khachhang_controller',
        'nhanhieu'=>'nhanhieu_controller',
        'xuatxu'=>'xuatxu_controller',
        'sanpham'=>'sanpham_controller',
        'baohanh'=>'baohanh_controller',
        'chucvu'=>'chucvu_controller',
        'nhanvien'=>'nhanvien_controller'
    ]);
}); 
*/

