@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('tailieu.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('tailieu.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        <input type="text" value="{{$data->file}}" class="form-control">
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->file }}" autocomplete="hinhanh" />
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <div class="form-group">
                    <label for="ten_tailieu" class="form-label">Nhập tên tài liệu</label>
                    <input type="text" value="{{$data->ten_tailieu}}" class="form-control" name="ten_tailieu" id="ten_tailieu" required >
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                      <label for="loai_file">Lĩnh vực<span class="text-danger font-weight-bold">*</span></label>
                      <select id="loai_file" class="form-control custom-select @error('loai_file') is-invalid @enderror" name="loai_file" required autofocus>  
                        <option value="1" {{($data->loai_file== 1)?'selected':'' }}>File PDF</option>
                        <option value="2" {{($data->loai_file== 2)?'selected':'' }}>File Word</option>
                        <option value="3" {{($data->loai_file== 3)?'selected':'' }}>File Excel</option>
                        <option value="4" {{($data->loai_file== 4)?'selected':'' }}>File PowerPoint</option>
                        <option value="5" {{($data->loai_file== 5)?'selected':'' }}>File Khác</option>
                      </select>
                    </div>
                  </div>
            </div>
          </form>
    </div>
</div>

@endsection