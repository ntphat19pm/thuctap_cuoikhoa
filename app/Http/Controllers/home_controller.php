<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\khachhang;
use App\Models\dathang;
use App\Models\dacdiem;
use App\Models\thongtin;
use App\Models\tinhnang;
use App\Models\loiich;
use App\Models\binhluan;
use App\Models\gioitinh;
use App\Models\giaithuong;
use App\Models\baiviet;
use Illuminate\Support\Facades\DB;
use App\Helper\giohang;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Mail\dathang_email;
use Illuminate\Support\Facades\Mail;

class home_controller extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function home(){
        $data=sanpham::paginate(20);
        return view('home');
    }

    public function chitiet($id){
        $data=sanpham::find($id);
        $dacdiem=dacdiem::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        $tinhnang=tinhnang::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        $loiich=loiich::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        return view('chitiet',compact('data','dacdiem','tinhnang','loiich'));
    }
    public function showlinhvuc($id){
        $showlinhvuc=sanpham::where('danhmuc_id',$id)->orderby('danhmuc_id','DESC')->paginate(10);
       
        $data=danhmuc::find($id);
        // $ten=$data->tendanhmuc;
        return view('showlinhvuc',compact('data','showlinhvuc'));
    }
    public function chitietbai($id){
        $data=baiviet::find($id);
        $binhluan=binhluan::where('baiviet_id',$id)->where('trangthai',1)->get();
        return view('chitietbai',compact('data','binhluan'));
    }
    public function shop(){
        return view('shop');
    }
    public function get_dangnhap(){
       return view('login_kh');
 
    }
    public function dangxuat(){
       Auth::guard('khachhang')->logout();
       
        return view('home');
  
    }

    public function gioithieu(){
        return view('gioithieu');
    }

    public function mangluoi(){
        return view('mangluoi');
    }
    public function dauan(){
        return view('dauan');
    }
    public function giaithuong(){
        $vang=giaithuong::where('phanloai_id',1)->get();
        $bac=giaithuong::where('phanloai_id',2)->get();
        $dong=giaithuong::where('phanloai_id',3)->get();
        $trongnuoc=giaithuong::where('phanloai_id',0)->get();
        return view('giaithuong',compact('vang','bac','dong','trongnuoc'));
    }

    public function post_dangnhap(Request $request){
       
        $arr=[
            'tendangnhap'=>$request->tendangnhap,
            'password'=>$request->password
        ];

        if(Auth::guard('khachhang')->attempt($arr))
        {
            return redirect('/home');
        }
        else{
            return redirect('/dangnhap');

        }
  
    }
    public function get_dangky()
    {
        return view('regis_kh');
  
    }
    public function lienhe()
    {
        return view('lienhe');
  
    }

    public function video()
    {
        return view('video');
  
    }
    public function baiviet()
    {
        return view('baiviet');
  
    }

    public function post_thongtin(Request $request)
    {
       
        $data=new thongtin;
        $data->hoten=$request->hoten;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        $data->email=$request->email;
        $data->hinhthuc=$request->hinhthuc;
        $data->sanpham_id=$request->sanpham_id;
        $data->yeucau_id=$request->yeucau_id;
        $data->noidung=$request->noidung;

        if($data->save()){
            return view('completed');
        }
  
    }

    public function post_binhluan(Request $request)
    {
       
        $data=new binhluan;
        $data->hoten=$request->hoten;
        $data->noidung=$request->noidung;
        $data->baiviet_id=$request->baiviet_id;

        if($data->save()){
            return view('baiviet');
        }
  
    }

    public function edit($id)
    {
        $gioitinh=gioitinh::all();
        $data=khachhang::find($id);
        return view('edit',compact('data','gioitinh'));  
        
    }
    public function update(Request $request, $id)
    {
        $data=khachhang::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->tendangnhap=$request->tendangnhap;
        $data->email=$request->email;
       if($data->save()) {
           return redirect('/home');
       }
    }
    
    public function getDatHangDemo()
    {
        // Thêm Đơn hàng demo
        $dathang = dathang::create([
        'khachhang_id' => Auth::user()->id,
        'dienthoaigiaohang' => '0939011900',
        'diachigiaohang' => '18 Ung Văn Khiêm - TP. Long Xuyên - An Giang',
        ]);
        
        // Thêm Đơn hàng chi tiết demo
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 2,
        'soluong' => 1,
        'dongia' => 5990000,
        ]);
        
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 142,
        'soluong' => 1,
        'dongia' => 350000,
        ]);
        
        // Gởi email
        Mail::to(Auth::guard('khachhang')->user()->email)->send(new dathang_email($dathang));
        
        return redirect()->route('completed');
    }
}
