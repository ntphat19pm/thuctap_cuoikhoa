@extends('layouts.admin')
@section('main')
<div class="card" >
 
    <div class="card-body">
        <form class="mb-3" action="{{route('dauan.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="avatar">Hình ảnh đại diện <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('avatar') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    @error('file_uploads')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="nam" class="form-label">Nhập năm dấu ấn</label>
                  <input id="nam" type="number" class="form-control" name="nam" placeholder="Nhập năm bằng số" required>
                  <span class="form-message"></span>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="1"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@endsection
