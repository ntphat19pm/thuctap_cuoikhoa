<?php

namespace App\Http\Controllers;

use App\Models\vitri_ungtuyen;
use Illuminate\Http\Request;
use Toastr;

class vitri_ungtuyen_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=new vitri_ungtuyen;
        $data->tenvitri=$request->tenvitri;
        if($data->save()){
            $data=vitri_ungtuyen::all();
            Toastr::success('Thêm vị trí tuyển dụng thành công','Thêm vị trí tuyển dụng');
            return redirect('admin/tuyendung');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vitri_ungtuyen  $vitri_ungtuyen
     * @return \Illuminate\Http\Response
     */
    public function show(vitri_ungtuyen $vitri_ungtuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vitri_ungtuyen  $vitri_ungtuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(vitri_ungtuyen $vitri_ungtuyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vitri_ungtuyen  $vitri_ungtuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vitri_ungtuyen $vitri_ungtuyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vitri_ungtuyen  $vitri_ungtuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=vitri_ungtuyen::find($id)->delete();
        if($data){
            Toastr::success('Xóa vị trí tuyển dụng thành công','Xóa vị trí tuyển dụng');
            return redirect('admin/tuyendung');
        }
    }
}
