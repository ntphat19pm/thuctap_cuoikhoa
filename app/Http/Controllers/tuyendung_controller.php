<?php

namespace App\Http\Controllers;

use App\Models\tuyendung;
use App\Models\gioitinh;
use App\Models\nhanvien;
use App\Models\vitri_ungtuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Toastr;
use File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\phanhoi_email;
use Illuminate\Support\Facades\Mail;
use App\Mail\trungtuyen_mail;
use Carbon\Carbon;

class tuyendung_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->chucvu_id==1)
        {
            $data=tuyendung::all();
            
            $danhsach=vitri_ungtuyen::all();
            return view('admin.tuyendung.index',compact('data','danhsach'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng tuyển dụng','Hạn chế truy cập');
            return redirect()->route('admin.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phanhoi = array(
            'chitiet' => $request->chitiet,
        );
        Mail::to($request->email)->queue(new phanhoi_email($phanhoi));

        $data=tuyendung::find($request->id);
        $data->trangthai=1;
        $data->save();

        Toastr::success('Gửi mail phản hổi thành công','Gửi mail phản hồi');
        return redirect('admin/tuyendung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tuyendung  $tuyendung
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=tuyendung::find($id);
        return view('admin.tuyendung.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tuyendung  $tuyendung
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=tuyendung::find($id);
        $gioitinh=gioitinh::all();
        return view('admin.tuyendung.edit',compact('data','gioitinh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tuyendung  $tuyendung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $random= Str::random();
        $data=new nhanvien;
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->chucvu_id=3;
        $sub_link=substr($request->email,0,-10);
        $data->tendangnhap=$sub_link;
        $data->password=bcrypt($random);
        //$data->password=$request->password;
        $data->email=$request->email;

        $vitri= vitri_ungtuyen::find($request->vitri_id);
        $ngay= Carbon::now('Asia/Ho_Chi_Minh')->addDays(7);

        $trungtuyen = array(
            'hoten' => $request->hovaten,
            'ngay' => $ngay,
            'tendangnhap' => $sub_link,
            'password' => $random,
            'vitri' => $vitri->tenvitri
        );
        

        Mail::to($request->email_an)->queue(new trungtuyen_mail($trungtuyen));

        $tuyendung=tuyendung::find($id);
        $duongdan = 'public/uploads/tuyendung';
        File::delete($duongdan.'/'.$request->file_cv);
        $tuyendung->delete();
        
       if($data->save()) {
            Toastr::success('Chuyển dữ liệu sang nhân viên thành công','Chuyển dữ liệu nhân viên');
           return redirect('admin/tuyendung');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tuyendung  $tuyendung
     * @return \Illuminate\Http\Response
     */
    public function destroy(tuyendung $tuyendung)
    {
        //
    }

    public function post_dulieu(Request $request)
    {
        $data=new nhanvien;
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->chucvu_id=3;
        $sub_link=substr($request->email,0,-10);
        $data->tendangnhap=$sub_link;
        $data->password=bcrypt($request->password);
        //$data->password=$request->password;
        $data->email=$request->email;

        $tuyendung=tuyendung::find($request->id);
        $duongdan = 'public/uploads/tuyendung';
        File::delete($duongdan.'/'.$request->file_cv);
        $tuyendung->delete();
       if($data->save()) {
            Toastr::success('Chuyển dữ liệu sang nhân viên thành công','Chuyển dữ liệu nhân viên');
           return redirect('admin/tuyendung');
       }
    }
}
