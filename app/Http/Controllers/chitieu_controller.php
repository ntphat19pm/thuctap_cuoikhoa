<?php

namespace App\Http\Controllers;

use App\Models\chitieu;
use App\Models\thang;
use Illuminate\Http\Request;
use Toastr;

class chitieu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=chitieu::all();
        $thang=thang::all();
        
        return view('admin.chitieu.index',compact('data','thang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thang=thang::all();
        return view('admin.chitieu.create',compact('thang')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new chitieu;
        $data->thang=$request->thang;
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->tytrong_dichvu=$request->tytrong_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->tytrong_tong=$request->tytrong_tong;
        $data->duan=$request->duan;
        $data->tytrong_duan=$request->tytrong_duan;
        $data->giaoduc=$request->giaoduc;
        $data->tytrong_giaoduc=$request->tytrong_giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->tytrong_kenhtruyen=$request->tytrong_kenhtruyen;
        $data->yte=$request->yte;
        $data->tytrong_yte=$request->tytrong_yte;
        if($data->save()){
            $data=chitieu::all();
            Toastr::success('Thêm câu hỏi thành công','Thêm câu hỏi');
            return redirect('admin/chitieu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function show(chitieu $chitieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $thang=thang::all();
        $data=chitieu::find($id);
        return view('admin.chitieu.edit',compact('data','thang'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data=chitieu::find($id);
        $data->thang=$request->thang;
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->tytrong_dichvu=$request->tytrong_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->tytrong_tong=$request->tytrong_tong;
        $data->duan=$request->duan;
        $data->tytrong_duan=$request->tytrong_duan;
        $data->giaoduc=$request->giaoduc;
        $data->tytrong_giaoduc=$request->tytrong_giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->tytrong_kenhtruyen=$request->tytrong_kenhtruyen;
        $data->yte=$request->yte;
        $data->tytrong_yte=$request->tytrong_yte;
        
       if($data->save()) {
            Toastr::success('Cập nhật chỉ tiêu thành công','Cập nhật chỉ tiêu');
           return redirect('admin/chitieu');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(chitieu $chitieu)
    {
        //
    }
}
