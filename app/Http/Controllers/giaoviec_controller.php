<?php

namespace App\Http\Controllers;

use App\Models\giaoviec;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use Toastr;
use File;
use Excel;

class giaoviec_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=giaoviec::all();
        return view('admin.giaoviec.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nhanvien=nhanvien::all();
        return view('admin.giaoviec.create',compact('nhanvien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new giaoviec;
        $data->ten_congviec=$request->ten_congviec;
        $data->nguoinhan=$request->nguoinhan;
        $data->hanchot=$request->hanchot;
        if($data->save()){
            $data=giaoviec::all();
            Toastr::success('Thêm công việc thành công','Thêm công việc');
            return redirect('admin/giaoviec');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function show(giaoviec $giaoviec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien=nhanvien::all();
        $data=giaoviec::find($id);
        return view('admin.giaoviec.edit',compact('data','nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=giaoviec::find($id);
        $data->ten_congviec=$request->ten_congviec;
        $data->nguoinhan=$request->nguoinhan;
        $data->hanchot=$request->hanchot;
        if($data->save()) {
            Toastr::success('Cập nhật công việc thành công','Cập nhật công việc');
            return redirect('admin/giaoviec');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=giaoviec::find($id)->delete();
        if($data){
            Toastr::success('Xóa công việc thành công','Xóa công việc');
            return redirect('admin/giaoviec');
        }
    }
}
