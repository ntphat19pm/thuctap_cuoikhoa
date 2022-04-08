@extends('layouts.admin')
@section('main')
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-secondary mt-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      <i class="fas fa-plus-circle"></i> Thêm vị trí tuyển dụng
    </button>
  
  <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">THÊM VỊ TRÍ TUYỂN DỤNG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="mb-3 needs-validation" action="{{route('vitri_ungtuyen.store')}}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="row">
                    
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <label for="tenvitri" class="form-label">Nhập tên vị trí tuyển dụng</label>
                                  <input id="tenvitri" type="text" class="form-control" name="tenvitri" autocomplete="off" required>
                                  <span class="form-message"></span>
                                </div>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm vị trí ứng tuyển</button>
                        </form>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th class="text-center" scope="col">STT</th>
                              <th class="text-center" scope="col">Tên vị trí tuyển dụng</th>
                              <th class="text-right" scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php 
                            $i = 0;
                            @endphp
                            @foreach ($danhsach as $item)
                            @php 
                            $i++;
                            @endphp
                            <tr>
                              <td class="text-center"><i>{{$i}}</i></td>
                              <td>{{$item->tenvitri}}</td>                      
                              <td class="text-right">
                                <a  href="{{route('vitri_ungtuyen.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 
</div>
    <div class="card" >
    
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center" scope="col">STT</th>
              <th class="text-center" scope="col">Họ tên ứng viên</th>
              <th class="text-center" scope="col">Vị trí ứng tuyển</th>
              <th class="text-center" scope="col">Trạng thái liên hệ</th>
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
              <td>{{$item->hoten_ungvien}}</td>            
              <td>{{$item->vitri_ungtuyen->tenvitri}}</td>
              <td class="text-center">
                @if($item->trangthai==0)
                <i style="color: red" class="far fa-times-circle fa-lg"></i>
                @elseif($item->trangthai==1)
                  <i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i>
                @endif
              </td>              
              <td class="text-right">
                <a href="{{route('tuyendung.show',$item->id)}}" class="btn btn-sm btn-warning">
                    <i class="fas fa-eye"></i>              
                </a>
                <a href="{{route('tuyendung.edit',$item->id)}}" class="btn btn-sm btn-success">
                  <i class="fas fa-edit"></i>              
                </a> 
                <a  href="{{route('tuyendung.destroy',$item->id)}}" class="btn btn-sm btn-danger btndelete">
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
