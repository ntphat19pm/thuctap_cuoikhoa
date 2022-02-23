<?php

namespace App\Http\Controllers;

use App\Models\thongtin;
use App\Models\sanpham;
use Illuminate\Http\Request;

class thongtin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=thongtin::all();
        return view('admin.thongtin.index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=thongtin::find($id);
        return view('admin.thongtin.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function edit(thongtin $thongtin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thongtin $thongtin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function destroy(thongtin $thongtin)
    {
        //
    }
}
