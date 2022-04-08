@extends('layouts.admin')
@section('main')

<div class="row">

    <div class="col-lg-4">
      <div class="">
        <a href="{{route('tuyendung.index')}}" class="btn btn-sm btn-danger mb-3">
          <i class="fas fa-sign-out-alt"> Quay về danh sách tuyển dụng</i>     
        </a>
      </div>
    </div>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Gửi mail phản hồi
    </button>
  
  <!-- Modal -->
  <form action="{{route('tuyendung.store')}}" method="post" class="needs-validation" novalidate>
    @csrf
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">GỬI MAIL PHẢN HỒI TUYỂN DỤNG CHO ỨNG VIÊN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Họ tên ứng viên:</span>
                            <input type="text" class="form-control" value="{{$data->hoten_ungvien}}" aria-label="hoten_ungvien" name="hoten_ungvien" id="hoten_ungvien" aria-describedby="basic-addon1" readonly>
                          </div>

                          <div class="input-group mb-3" hidden>
                            <span class="input-group-text" id="basic-addon1">id</span>
                            <input type="text" class="form-control" value="{{$data->id}}" aria-label="id" name="id" id="id" aria-describedby="basic-addon1" readonly>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">To:</span>
                            <input type="text" class="form-control" value="{{$data->email}}" aria-label="email" name="email" id="email" aria-describedby="basic-addon1" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1"></textarea>
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Gửi mail phản hồi ứng viên</button>
                </div>
            </div>
        </div>
    </div> 
  </form>
</div>

<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          THÔNG TIN CÁ NHÂN
          </h3>
          <div class="card-tools">
          <button class="btn btn-tool" type="button" data-toggle="collapse" data-target="#collapseExample{{$data->id}}" aria-expanded="false" aria-controls="collapseExample">
              <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
          </button>
          
          </div>
        </div>
          
        <div class="" id="collapseExample{{$data->id}}">
            <div class="card-body">
                <div class="tab-content p-0 h-100">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Họ tên ứng viên: {{$data->hoten_ungvien}}</p>
                            <p>CMND/CCCD: {{$data->cmnd}}</p>
                            <p>Số diện thoại: {{$data->sdt}}</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ngày sinh: {{$data->ngaysinh}}</p>
                            <p>Email: {{$data->email}}</p>
                            <p>Địa chỉ: {{$data->diachi}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer clearfix">
                <div class="text-left">
                    Vị trí ứng tuyển: {{$data->vitri_ungtuyen->tenvitri}}
                    <a href="{{url('public/uploads/tuyendung')}}/{{$data->file_cv}}" class="btn btn-outline-info float-right"><i class="fa fa-download"></i> Download file CV ứng viên</a>
                </div>
                {{-- <a href="{{route('danhmuc_chuyendoi.destroy',$item->id)}}" type="button" class="btn btn-danger float-left"><i class="fas fa-trash"></i> Xóa</a> --}}
                
            </div>
        </div>
      </div>
    </div>
</div>

@endsection

