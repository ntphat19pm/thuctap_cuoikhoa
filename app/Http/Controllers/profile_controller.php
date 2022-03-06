<?php

namespace App\Http\Controllers;

use App\Models\chucvu;
use App\Models\nhanvien;
use App\Models\gioitinh;
use App\Models\giaoviec;
use App\Models\User;
use Toastr;
use Illuminate\Http\Request;

class profile_controller extends Controller
{
    public function index()
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        return view('admin.profile.index',compact('chucvu','gioitinh'));
        
    }
    public function edit($id)
    {
        $chucvu=chucvu::all();
        $gioitinh=gioitinh::all();
        $data=nhanvien::find($id);
        return view('admin.profile.edit',compact('data','chucvu','gioitinh'));  
        
    }
    public function show($id)
    {
        $data=nhanvien::find($id);
        $giaoviec_nv=giaoviec::where('nguoinhan',$id)->orderby('nguoinhan','DESC')->paginate(10);
        $giaoviec_nop=giaoviec::all();
        return view('admin.profile.show',compact('data','giaoviec_nv','giaoviec_nop'));
    }
    public function update(Request $request, $id)
    {
        $data=nhanvien::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->chucvu_id=$request->chucvu_id;
        $data->tendangnhap=$request->tendangnhap;
        if(!empty($request->password)) $data->password = bcrypt($request->password);
		$data->save();
        $data->email=$request->email;
       if($data->save()) {
            Toastr::success('Cập nhật thông tin thành công','Cập nhật thông tin');
           return redirect('admin/profile');
       }
       
    }
    public function destroy($id)
    {
        if(nhanvien::find($id)->delete()){
            Toastr::success('Xóa nhân viên thành công','Xóa nhân viên');
            return redirect('dangnhap');
        }
            
    }

    public function postSua(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-file_giaoviec'.'.'.$ex;
            $file->move(public_path('uploads/giaoviec'),$file_name);

            $data=giaoviec::find($id);
            File::delete('public/uploads/giaoviec/'.$data->file_nop);
            $request->merge(['file_nop'=>$file_name]); 
        }
    
        if(giaoviec::find($id)->update($request->all())){
            Toastr::success('Cập nhật file thành công','Cập nhật file');
            return redirect('admin/giaoviec');
        }
    }
}
