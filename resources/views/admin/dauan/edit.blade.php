@extends('layouts.admin')
@section('main')
<div class="card">
    <div class="card-body">
        <form action="{{route('dauan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf  @method('PUT')
          <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <img class="rounded mx-auto d-block" src="{{url('public/uploads/dauan')}}/{{$data->avatar}}"  width="300px"/>
                    <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->avatar }}" autocomplete="hinhanh" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label for="nam" class="form-label">Nhập năm dấu ấn</label>
                  <input value="{{$data->nam}}" type="text" class="form-control" name="nam" id="nam" >
                </div>
              </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <label for="noidung" class="form-label">Nội dung</label>
              <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1">{{$data->noidung}}</textarea>
              <div class="invalid-feedback"></div>
            </div>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
