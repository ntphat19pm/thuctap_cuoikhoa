@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('tinhnang.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('tinhnang.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">
    
                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="tentinhnang" class="form-label">Nhập tên đặc điểm</label>
                    <input type="text" value="{{$data->tentinhnang}}" class="form-control" name="tentinhnang" id="tentinhnang" required >
                    </div>
    
                    <div class="form-group">
                        <label for="sanpham_id">Sản phẩm<span class="text-danger font-weight-bold">*</span></label>
                        <select id="sanpham_id" class="form-control custom-select @error('sanpham_id') is-invalid @enderror" name="sanpham_id" required autofocus>
                            <option value="">--Chọn danh mục sản phẩm--</option>
                            @foreach($sanpham as $value)
                            <option value="{{ $value->id }}" {{($data->sanpham_id== $value->id)?'selected':'' }}>{{$value->tensp}}</option>
                            @endforeach
                        </select>
                    </div>

                
                </div>

                <div class="col-lg-8">
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