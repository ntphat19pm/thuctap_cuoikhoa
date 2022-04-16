@extends('layouts.admin')
@section('main')
    <div class="card-body">
        <form action="{{route('tuyendung.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-outline-success mt-2 float-right mb-3"><i class="fa fa-server"></i> Chuyển dữ liệu qua bảng nhân viên</button>
                </a>
                <a href="{{route('tuyendung.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng tuyển dụng</i>     
                </a>
            </div>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN ỨNG VIÊN <br>----- *** -----</h4></b></p>
            <div class="row">

              <div class="col-lg-3">
                  <div class="mb-3">
                  <label for="TieuDe" class="form-label">Họ và tên</label>
                  <input type="text" value="{{$data->hoten_ungvien}}" class="form-control" id="hovaten" name="hovaten" required>
                  </div>

                    <div class="mb-3" hidden>
                        <label for="TieuDe" class="form-label">id</label>
                        <input type="text" value="{{$data->id}}" class="form-control" id="id" name="id" required>
                        <input type="text" value="{{$data->file_cv}}" class="form-control" id="id" name="id" required>
                    </div>
              </div>
                  
              <div class="col-lg-1">
                <div class="form-group">
                    <label for="gioitinh_id">Giới tính<span class="text-danger font-weight-bold">*</span></label>
                    <select id="gioitinh_id" class="form-control custom-select @error('gioitinh_id') is-invalid @enderror" name="gioitinh_id" required autofocus>
                        <option value="">--Chọn giới tính--</option>
                        @foreach($gioitinh as $value)
                        <option value="{{ $value->id }}" {{($data->gioitinh_id== $value->id)?'selected':'' }}>{{$value->gioitinh}}</option>
                        @endforeach
                    </select>
                </div>
              </div>
              <div class="col-lg-2">  
                  <div class="mb-3">
                      <label for="ngaysinh" class="form-label">Ngày sinh</label>
                      <input type="date" value="{{$data->ngaysinh}}" class="form-control" id="ngaysinh" name="ngaysinh" required>
                  </div>
              </div>
              <div class="col-lg-3"> 
                    <div class="mb-3">
                        <label for="email" class="form-label">Email công ty</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>


                    <div class="mb-3" hidden>
                        <label for="email_an" class="form-label">Email ẩn</label>
                        <input type="text" value="{{$data->email}}" class="form-control" id="email_an" name="email_an" required>
                    </div>
                    <div class="mb-3" hidden>
                        <label for="vitri_id" class="form-label">Vị trí ẩn</label>
                        <input type="text" value="{{$data->vitri_id}}" class="form-control" id="vitri_id" name="vitri_id" required>
                    </div>
              </div>
              <div class="col-lg-3">
                  <div class="mb-3">
                      <label for="diachi" class="form-label">Địa chỉ</label>
                      <input type="text" value="{{$data->diachi}}" class="form-control" id="diachi" name="diachi" required>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="mb-3">
                  <label for="sdt" class="form-label">SĐT</label>
                  <input type="text" value="{{$data->sdt}}" class="form-control" id="sdt" name="sdt" required>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="mb-3">
                      <label for="cmnd" class="form-label">CMND</label>
                      <input type="text" value="{{$data->cmnd}}" class="form-control" id="cmnd" name="cmnd" required>
                  </div>
              </div> 
            </div>
        </form>
    </div>
</div>

@endsection
