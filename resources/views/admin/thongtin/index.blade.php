@extends('layouts.admin')
@section('main')

<div class="card" >
 
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Họ tên khách hàng</th>
            <th scope="col">Hình thức liên hệ</th>
            <th scope="col">Yêu cầu</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php 
            $i = 0;
            @endphp
          @foreach ($data as $item)
          @php 
          $i++;
          @endphp
          <tr>
            <td class="text-center"><i>{{$i}}</i></td>
            <td>{{$item->hoten}}</td>
            <td>
              @if($item->hinhthuc==0)
              Gọi điện
              @elseif($item->hinhthuc==1)
              SMS
              @elseif($item->hinhthuc==2)
              Zalo
              @elseif($item->hinhthuc==3)
              Email
              @endif
            </td>
            <td>
                @if($item->yeucau_id==0)
                Phản ánh sản phẩm dịch vụ
                @elseif($item->yeucau_id==1)
                Tư vấn sản phẩm dịch vụ
                @endif
            </td>
            
            <td class="text-right">
                <a href="{{route('thongtin.show',$item->id)}}" class="btn btn-sm btn-warning">
                    <i class="fas fa-eye"></i>              
                  </a>
                <a href="{{route('thongtin.edit',$item->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('thongtin.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
                    <i class="fas fa-trash"></i>
                </a>
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
