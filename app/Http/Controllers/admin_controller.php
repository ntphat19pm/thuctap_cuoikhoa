<?php

namespace App\Http\Controllers;
use App\Models\nhanvien;
use App\Models\thuchien_chitieu;
use App\Models\chitieu;
use App\Models\chuongtrinh;
use App\Models\thang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class admin_controller extends Controller
{
   public function index(){
    $KH = chitieu::select('thang_id','doanhthu_dichvu','tytrong_dichvu','doanhthu_tong','tytrong_tong','kenhtruyen','tytrong_kenhtruyen','duan','tytrong_duan','giaoduc','tytrong_giaoduc','yte','tytrong_yte')->first();
    $TH = thuchien_chitieu::select('doanhthu_dichvu','doanhthu_tong','kenhtruyen','duan','giaoduc','yte')->first();
    
    $ptTH_dv = $TH->doanhthu_dichvu/$KH->doanhthu_dichvu ;
    $ptTH_tong = $TH->doanhthu_tong/$KH->doanhthu_tong ;
    $ptTH_kt = $TH->kenhtruyen/$KH->kenhtruyen ;
    $ptTH_da = $TH->duan/$KH->duan ;
    $ptTH_gd = $TH->giaoduc/$KH->giaoduc ;
    $ptTH_yt = $TH->yte/$KH->yte ;
    
    $diem_dv = 0 ;
    $diem_tong = 0 ;
    $diem_kt = 0 ;
    $diem_da = 0 ;
    $diem_gd = 0 ;
    $diem_yt = 0 ;

    if($ptTH_dv < 120 )
    {
        $diem_dv = $ptTH_dv * $KH->tytrong_dichvu;
    }
    else
    {
        $diem_dv = (120/100) * $KH->tytrong_dichvu;
    }

    if($ptTH_tong < 120 )
    {
        $diem_tong = $ptTH_tong * $KH->tytrong_tong;
    }
    else
    {
        $diem_tong = (120/100) * $KH->tytrong_tong;
    }

    if($ptTH_kt < 120 )
    {
        $diem_kt = $ptTH_kt * $KH->tytrong_kenhtruyen;
    }
    else
    {
        $diem_kt = (120/100) * $KH->tytrong_kenhtruyen;
    }

    if($ptTH_da < 120 )
    {
        $diem_da = $ptTH_da * $KH->tytrong_duan;
    }
    else
    {
        $diem_da = (120/100) * $KH->tytrong_duan;
    }
    if($ptTH_gd < 120 )
    {
        $diem_gd = $ptTH_gd * $KH->tytrong_giaoduc;
    }
    else
    {
        $diem_gd = (120/100) * $KH->tytrong_giaoduc;
    }
    if($ptTH_yt < 120 )
    {
        $diem_yt = $ptTH_yt * $KH->tytrong_yte;
    }
    else
    {
        $diem_yt = (120/100) * $KH->tytrong_yte;
    }
    $CT = Carbon::now()->month;

    $showchuongtrinh=chuongtrinh::where('thang_id',$CT)->orderby('thang_id','DESC')->paginate(10);

    return view('admin.index', compact('diem_dv','diem_tong','diem_kt','diem_da','diem_gd','diem_yt','showchuongtrinh'));
   }
    public function getdangnhap(){
        return view('admin.login');
    }
    public function showchuongtrinh($id){
        $KH = chitieu::select('doanhthu_dichvu','tytrong_dichvu','doanhthu_tong','tytrong_tong','kenhtruyen','tytrong_kenhtruyen','duan','tytrong_duan','giaoduc','tytrong_giaoduc','yte','tytrong_yte')->first();
        $TH = thuchien_chitieu::select('doanhthu_dichvu','doanhthu_tong','kenhtruyen','duan','giaoduc','yte')->first();
        
        $ptTH_dv = $TH->doanhthu_dichvu/$KH->doanhthu_dichvu ;
        $ptTH_tong = $TH->doanhthu_tong/$KH->doanhthu_tong ;
        $ptTH_kt = $TH->kenhtruyen/$KH->kenhtruyen ;
        $ptTH_da = $TH->duan/$KH->duan ;
        $ptTH_gd = $TH->giaoduc/$KH->giaoduc ;
        $ptTH_yt = $TH->yte/$KH->yte ;
        
        $diem_dv = 0 ;
        $diem_tong = 0 ;
        $diem_kt = 0 ;
        $diem_da = 0 ;
        $diem_gd = 0 ;
        $diem_yt = 0 ;

        if($ptTH_dv < 120 )
        {
            $diem_dv = $ptTH_dv * $KH->tytrong_dichvu;
        }
        else
        {
            $diem_dv = (120/100) * $KH->tytrong_dichvu;
        }

        if($ptTH_tong < 120 )
        {
            $diem_tong = $ptTH_tong * $KH->tytrong_tong;
        }
        else
        {
            $diem_tong = (120/100) * $KH->tytrong_tong;
        }

        if($ptTH_kt < 120 )
        {
            $diem_kt = $ptTH_kt * $KH->tytrong_kenhtruyen;
        }
        else
        {
            $diem_kt = (120/100) * $KH->tytrong_kenhtruyen;
        }

        if($ptTH_da < 120 )
        {
            $diem_da = $ptTH_da * $KH->tytrong_duan;
        }
        else
        {
            $diem_da = (120/100) * $KH->tytrong_duan;
        }
        if($ptTH_gd < 120 )
        {
            $diem_gd = $ptTH_gd * $KH->tytrong_giaoduc;
        }
        else
        {
            $diem_gd = (120/100) * $KH->tytrong_giaoduc;
        }
        if($ptTH_yt < 120 )
        {
            $diem_yt = $ptTH_yt * $KH->tytrong_yte;
        }
        else
        {
            $diem_yt = (120/100) * $KH->tytrong_yte;
        }

        $showchuongtrinh=chuongtrinh::where('thang_id',$id)->orderby('thang_id','DESC')->paginate(10);
        $thang=thang::all(); 
        return view('admin.index',compact('thang','showchuongtrinh','diem_dv','diem_tong','diem_kt','diem_da','diem_gd','diem_yt'));
    }
    public function profile(){
        return view('admin.profile');
    }
    // public function filter_by_date(Request $request){
    //     $data = $request->all();
    //     $from_date = $data['from_date'];
    //     $to_date = $data['to_date'];

    //     $get = thongke::whereBetween('ngaydathang',[$from_date,$to_date])->orderBy('ngaydathang','ASC')->get();
    //         foreach($get as $key -> $val){
    //             $chart_data[] = array(
    //                 'thoigian'=> $val->ngaydathang,
    //                 'tong_donhang'=> $val->tong_donhang,
    //                 'doanh_so'=> $val->doanh_so,
    //                 'loi_nhuan'=> $val->loi_nhuan,
    //                 'soluong_ban'=> $val->soluong_ban
    //             );
    //         }
    //         echo $data = json_encode($chart_data);
    // }
   
   

}
