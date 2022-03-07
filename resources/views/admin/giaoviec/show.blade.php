@extends('layouts.admin')
@section('main')
<div class="card" >
    <div class="card-body">
        <form action="{{route('giaoviec.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-group">
                <a>
                    <button type="submit" class="btn btn-sm btn-primary float-right mb-3">Lưu</button>
                </a>
                <a href="{{route('giaoviec.index')}}" class="btn btn-sm btn-danger mb-3">
                    <i class="fas fa-sign-out-alt"> Quay về bảng sản phẩm</i>     
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <img class="rounded mx-auto d-block mb-2" src="{{url('public/uploads/giaoviec')}}/{{$data->file_nop}}"  width="350px"/>
                        <input id="file_uploads" type="file" class="form-control @error('file_uploads') is-invalid @enderror" name="file_uploads" value="{{ $data->file_nop }}" autocomplete="file_nop" />
                      </div>
                </div>
            </div>
          </form>
    </div>
</div>

@endsection