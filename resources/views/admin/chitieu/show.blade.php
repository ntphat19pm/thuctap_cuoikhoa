@extends('layouts.admin')
@section('main')
<div class="card-body">
    <div class="form-group">
        <a href="{{route('chitieu.index')}}" class="btn btn-sm btn-danger">
            <i class="fas fa-sign-out-alt"> Quay về bảng chỉ tiêu</i>     
        </a>
        <a href="{{route('chitieu.edit',$data->id)}}" class="btn btn-sm btn-success float-right">
            <i class="fas fa-edit"> Sửa chỉ tiêu kế hoạch</i>     
        </a>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        <i class="fas fa-chart-bar mr-1"></i>
        KẾ HOẠCH CHỈ TIÊU VÀ THỰC HIỆN CHỈ TIÊU THÁNG {{ $data->thang_id }}
        </h3>
        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content p-0">
        
            <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                <div class="row">
                    <div class="col-lg-3">  
                        <label for="doanhthu_dichvu" class="form-label">Doanh thu dịch vụ (Kế hoạch)</label>
                        <input type="number" value="{{$data->doanhthu_dichvu}}" class="form-control" id="doanhthu_dichvu" name="doanhthu_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu dịch vụ (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->doanhthu_dichvu}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="doanhthu_tong" class="form-label">Tổng doanh thu (Kế hoạch)</label>
                        <input type="number" value="{{$data->doanhthu_tong}}" class="form-control" id="doanhthu_tong" name="doanhthu_tong" readonly required>
                    </div>
                    <div class="col-lg-3"> 
                        <label for="tytrong_dichvu" class="form-label">Tổng doanh thu (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->doanhthu_tong}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="duan" class="form-label">Doanh thu dự án (Kế hoạch)</label>
                        <input type="number" value="{{$data->duan}}" class="form-control" id="duan" name="duan" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu dự án (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->duan}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="giaoduc" class="form-label">Doanh thu giáo dục (Kế hoạch)</label>
                        <input type="number" value="{{$data->giaoduc}}" class="form-control" id="giaoduc" name="giaoduc" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu giáo dục (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->giaoduc}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="kenhtruyen" class="form-label">Doanh thu kênh truyền</label>
                        <input type="number" value="{{$data->kenhtruyen}}" class="form-control" id="kenhtruyen" name="kenhtruyen" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu kênh truyền (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->kenhtruyen}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="yte" class="form-label">Doanh thu y tế</label>
                        <input type="number" value="{{$data->yte}}" class="form-control" id="yte" name="yte" readonly required>
                    </div>
                    <div class="col-lg-3 mt-3"> 
                        <label for="tytrong_dichvu" class="form-label">Doanh thu y tế (Thực hiện)</label>
                        <input type="number" value="{{$thuchien->yte}}" class="form-control" id="tytrong_dichvu" name="tytrong_dichvu" readonly required>
                    </div>            
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>

@endsection
