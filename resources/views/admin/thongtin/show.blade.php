@extends('layouts.admin')
@section('main')

<div class="row">

  <div class="col-lg-4">
    <div class="">
      <a href="{{route('thongtin.index')}}" class="btn btn-sm btn-danger mb-3">
        <i class="fas fa-sign-out-alt"> Quay về danh sách các thông tin</i>     
      </a>
    </div>
  </div>
</div>
    <div class="card" >

      
    
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <p><b><h4 class="text-center" style="color:rgb(255, 67, 67)">THÔNG TIN KHÁCH HÀNG</h4></b></p>
            {{-- <p><b><h6 class="text-center" style="color:rgb(255, 67, 67)">Mã hóa đơn: HD{{$data->id}}</h6></b></p> --}}
            {{-- <input type="date" style="color:rgb(255, 67, 67)" value="{{$data->ngaydathang}}" class="text-left" id="ngaydathang" name="ngaydathang" readonly> --}}
            
            <tr>
              <th class="text-center" scope="col">Tên khách hàng</th>
              <th class="text-center" scope="col">Số điện thoại</th>
              <th class="text-center" scope="col">Email</th>
              <th class="text-center" scope="col">Địa chỉ</th>
              <th class="text-center" scope="col">Hình thức liên hệ</th>
              <th class="text-center" scope="col">Yêu cầu</th>
              <th class="text-center" scope="col">Nội dung</th>

            </tr>
          </thead>
          <tbody>

            <tr>
                <td class="text-center">{{$data->hoten}}</td>       
                <td class="text-center">{{$data->sdt}}</td>      
                <td class="text-center">{{$data->email}}</td>      
                <td class="text-center">{{$data->diachi}}</td>      
                <td class="text-center">
                    @if($data->hinhthuc==0)
                    Gọi điện
                    @elseif($data->hinhthuc==1)
                    SMS
                    @elseif($data->hinhthuc==2)
                    Zalo
                    @elseif($data->hinhthuc==3)
                    Email
                    @endif
                </td>
                <td class="text-center">
                    @if($data->yeucau_id==0)
                    Phản ánh sản phẩm dịch vụ
                    @elseif($data->yeucau_id==1)
                    Tư vấn sản phẩm dịch vụ
                    @endif
                </td>      
                <td class="text-center">{{$data->noidung}}</td>          
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <hr>
    <br>
    
    {{-- <div class="card" >
    
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <p><b>
                <h3 class="text-center" style="color:rgb(37, 59, 255) ">THÔNG TIN SẢN PHẨM TƯ VẤN</h3>
              </b></p>
              <tr>
                <th class="text-center" scope="col">Tên sản phẩm</th>
                <th class="text-center" scope="col">Danh mục sản phẩm</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td class="text-center">{{$data->sanpham->tensp}}</td>
                    <td class="text-center"></td>
                    
                  </tr>
            </tbody>    
          </table>
          <form method="POST" action="" id="form-delete">
            @csrf @method('DELETE')
          <form>
        </div>
      </div>
      </div> --}}
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
