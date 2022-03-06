@extends('layouts.admin')
@section('main')


    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Tên công việc</th>
              <th class="text-center" scope="col">Người phụ trách</th>
              <th class="text-center" scope="col">Hạn chót</th>
              <th class="text-center" scope="col">Ngày nộp</th>
              <th class="text-center" scope="col">Trạng thái</th>
              <th class="text-right" scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php 
            $i = 0;
            @endphp
            @foreach ($giaoviec_nv as $item)
            @php 
            $i++;
            @endphp
            <tr>
              <td class="text-center"><i>{{$i}}</i></td>
              <td>{{$item->ten_congviec}}</td>            
              <td>{{$item->nhanvien->hovaten}}</td>            
              <td>{{$item->hanchot}}</td>            
              <td>{{date("d-m-Y H:i:s",strtotime($item->ngaynop))}}</td>            
              <td>
                @if($item->trangthai==0)
                <a href="{{ route('giaoviec.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i></a>
                @elseif($item->trangthai==1)
                  <a href=""><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i></a>
                @endif
              </td>            
              <td class="text-right">
                {{-- <a  href="" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa fa-upload"></i>
                </a> --}}
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modal-secondary" href="#nhap"> <i class="fa fa-upload"></i></button>
                @if($item->trangthai==1)
                <a  href="{{route('giaoviec.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                  <i class="fas fa-trash"></i>
                </a>
                @endif
              </td>
          
              </tr>
            @endforeach
          </tbody>
        </table>

        <form action="{{route('giaoviec.update',$data->id)}}" method="post" enctype="multipart/form-data">
          @csrf @method('PUT')
          <div class="modal fade" id="modal-secondary">
            <div class="modal-dialog">
              <div class="modal-content bg-secondary">
                <div class="modal-header">
                  <h4 class="modal-title">Nộp file công việc</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label for="file_nop">Chọn file <span class="text-danger font-weight-bold">*</span></label>
                    <input id="file_uploads" type="file" class="form-control @error('file_nop') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    @error('file_uploads')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline-success">Upload file</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        </form>

        <form method="POST" action="" id="form-delete">
          @csrf @method('DELETE')
        <form>
          
      </div>
    </div>
    <hr>
{{-- <div class="pagination justify-content-center">{{$data->appends(request()->all())->links()}}</div> --}}
@endsection
@section('js')
<script>
  $('.btndelete').click(function(ev){
    ev.preventDefault();
    var _href=$(this).attr('href');
    $('form#form-delete').attr('action',_href);
   if(confirm('bạn có chắc muốn xóa nó không?')){
      $('form#form-delete').submit();
   }
    
  })
</script>

@endsection
