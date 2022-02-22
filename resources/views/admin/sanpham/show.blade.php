@extends('layouts.admin')
@section('main')

<div class="row">

  <div class="col-lg-4">
    <div class="">
      <a href="{{route('sanpham.index')}}" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-sign-out-alt"> Quay về danh sách các đơn hàng</i>     
      </a>
    </div>
  </div>
</div>

{{-- <form action="" method="GET" class="form-inline mb-2">
  <div class="form-group ">
    <label for="hoadon" class="form-label mr-3">Mã hóa đơn là: </label>
    <input value="{{$data->id}}" class="form-control col-lg-3" name="tukhoa" type="number" readonly >

    <button type="submit" class="btn btn-outline-success ml-3">
      <i class="fas fa-check-circle"></i>
    </button>
  </div>
</form> --}}

    <div class="card" >

      
    
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN SẢN PHẨM</h4></b></p>
            {{-- <p><b><h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD{{$data->id}}</h6></b></p> --}}
            {{-- <input type="date" style="color:rgb(255, 67, 67)" value="{{$data->ngaydathang}}" class="text-left" id="ngaydathang" name="ngaydathang" readonly> --}}
            
            <tr>
              <th class="text-center" scope="col">Tên sản phẩm</th>
              <th class="text-center" scope="col">Hình ảnh</th>
              <th class="text-center" scope="col">Tên danh mục</th>

            </tr>
          </thead>
          <tbody>

            <tr>
              <td class="text-center">{{$data->tensp}}</td>
              <td class="text-center"><img src="{{url('public/uploads/sanpham/avatar')}}/{{$data->anh}}" width="30px"></td>          
              <td class="text-center">{{$data->danhmuc->tendanhmuc}}</td>          
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <hr>
    <br>
    
    <div class="card" >
    
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ ĐẶC ĐIỂM</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Tên đặc điểm</th>
                <th class="text-center" scope="col">Chi tiết</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i = 0;
              @endphp
              @foreach($dacdiem as $item)
              @php 
              $i++;
              @endphp
                  <tr>
                    <td class="text-center"><i>{{$i}}</i></td>
                    <td class="text-center">{{$item->tendacdiem}}</td>
                    <td class="text-center">{!!$item->chitiet!!}</td>
                    <td class="text-right">
                      <a href="{{route('dacdiem.edit',$item->id)}}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>              
                      </a> 
                      <a  href="{{route('dacdiem.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
      <div class="card" >
        <div class="card-body">
          <table id="example11" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ TÍNH NĂNG</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Tên tính năng</th>
                <th class="text-center" scope="col">Chi tiết</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i = 0;
              @endphp
              @foreach($tinhnang as $item)
              @php 
              $i++;
              @endphp
                  <tr>
                    <td class="text-center"><i>{{$i}}</i></td>
                    <td class="text-center">{{$item->tentinhnang}}</td>
                    <td class="text-center">{!!$item->chitiet!!}</td>
                    <td class="text-right">
                      <a href="{{route('tinhnang.edit',$item->id)}}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>              
                      </a> 
                      <a  href="{{route('tinhnang.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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

      <div class="card" >
        <div class="card-body">
          <table id="example111" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">LIỆT KÊ LỢI ÍCH</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">STT</th>
                <th class="text-center" scope="col">Tên lợi ích</th>
                <th class="text-center" scope="col">Chi tiết</th>
                <th class="text-center" scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php 
              $i = 0;
              @endphp
              @foreach($loiich as $item)
              @php 
              $i++;
              @endphp
                  <tr>
                    <td class="text-center"><i>{{$i}}</i></td>
                    <td class="text-center">{{$item->tenloiich}}</td>
                    <td class="text-center">{!!$item->chitiet!!}</td>
                    <td class="text-right">
                      <a href="{{route('loiich.edit',$item->id)}}" class="btn btn-sm btn-success">
                        <i class="fas fa-edit"></i>              
                      </a> 
                      <a  href="{{route('loiich.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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