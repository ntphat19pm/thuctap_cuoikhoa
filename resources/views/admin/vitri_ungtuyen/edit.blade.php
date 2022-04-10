@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('vitri_ungtuyen.update',$data->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('tuyendung.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng tuyển dụng</i>     
                </a>
            </div>
            <div class="row">
    
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="tenvitri" class="form-label">Tên vị trí tuyển dụng</label>
                    <input type="text" value="{{$data->tenvitri}}" class="form-control" name="tenvitri" id="tenvitri" autocomplete="off" required >
                    </div>               
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="chitiet" class="form-label">Chi tiết</label>
                        <textarea class="form-control" name="chitiet" id="chitiet" cols="10" rows="1">{{$data->chitiet}}</textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
          </form>
    </div>
</div>

@endsection