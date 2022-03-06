@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('cauhoi.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <a>
                    <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                </a>
                <a href="{{route('cauhoi.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng câu hỏi</i>     
                </a>
            </div>
            <div class="row">  
                <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="hoten" class="form-label">Nhập họ và tên</label>
                        <input type="text" class="form-control" name="hoten" id="hoten" required >
                    </div>                    
                </div>
                <div class="col-lg-4">  
                    <label for="sdt" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="sdt" name="sdt" required>
                </div>
                <div class="col-lg-4">  
                    <label for="diachi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="diachi" required>
                </div>
                <div class="col-lg-4">  
                    <label for="email" class="form-label">Địa chỉ mail</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="trangthai">Trạng thái<span class="text-danger font-weight-bold">*</span></label>
                      <select id="trangthai" class="form-control custom-select @error('trangthai') is-invalid @enderror" name="trangthai" required autofocus>
                          <option value="">--Chọn trạng thái--</option>
                          <option value="0">Chưa duyệt</option>
                          <option value="1">Đã duyệt</option>
                          
                      </select>
                    </div>
                </div>
                <div class="col-lg-12">  
                    <label for="cauhoi" class="form-label">Câu hỏi</label>
                    <input type="text" class="form-control" id="cauhoi" name="cauhoi" required>
                </div>
                <div class="col-lg-12 mt-3">  
                    <div class="form-group">
                        <label for="traloi" class="form-label">Trả lời</label>
                        <textarea class="form-control" name="traloi" id="traloi" cols="10" rows="1"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection