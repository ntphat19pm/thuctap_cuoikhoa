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
