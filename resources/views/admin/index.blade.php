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
            <th scope="col">Trạng thái</th>
            <th class="text-right" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php 
            $i = 0;
            @endphp
          @foreach ($thongtin as $item)
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
            <td class="text-center">
              @if($item->trangthai==0)
                <a href="{{ route('thongtin.active',$item->id)}}"><i style="color: red" class="far fa-times-circle fa-lg"></i><br>Chưa liên hệ</a>
              @elseif($item->trangthai==1)
                <a href="{{ route('thongtin.unactive',$item->id)}}"><i style="color:rgb(8, 253, 0)" class="far fa-check-circle fa-lg"></i><br>Đã liên hệ</a>
              @endif
          </td>
            
            <td class="text-right">
                <a href="{{route('thongtin.show',$item->id)}}" class="btn btn-sm btn-warning">
                    <i class="fas fa-eye"></i>              
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

<div class="row">
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU DỊCH VỤ
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chart_doanhthudichvu" style="height: 300px;"></div>
                  </div>
                  
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_dv,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ TỔNG DOANH THU
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
              
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chart_tongdoanhthu" style="height: 300px;"></div>
                  </div>
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_tong,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU DỰ ÁN
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
              
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chart_duan" style="height: 300px;"></div>
                  </div>
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_da,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU KÊNH TRUYỀN
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
              
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chartkenhtruyen" style="height: 300px;"></div>
                  </div>
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_kt,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU GIÁO DỤC
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
              
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chartgiaoduc" style="height: 300px;"></div>
                  </div>
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_gd,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-chart-bar mr-1"></i>
          BIỂU ĐỒ DOANH THU Y TẾ
        </h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
          <div class="card-body">
              <div class="tab-content p-0">
              
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <div id="chart" style="height: 300px;"></div>
                  </div>
              </div>
              <b style="color: springgreen">Điểm đạt được: {{number_format($diem_yt,2)}}</b>
          </div>
      <!-- /.card-body -->
    
    </div>
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


<script>

const chart_doanhthudichvu = new Chartisan({
    el: '#chart_doanhthudichvu',
    url: "@chart('doanh_thu_dich_vu_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});
const chart_tongdoanhthu = new Chartisan({
    el: '#chart_tongdoanhthu',
    url: "@chart('tong_doanh_thu_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});
const chart_duan = new Chartisan({
    el: '#chart_duan',
    url: "@chart('du_an_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});
const chartkenhtruyen = new Chartisan({
    el: '#chartkenhtruyen',
    url: "@chart('kenh_truyen_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});
const chartgiaoduc = new Chartisan({
    el: '#chartgiaoduc',
    url: "@chart('giao_duc_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});
const chart = new Chartisan({
    el: '#chart',
    url: "@chart('y_te_chart')",
    hooks: new ChartisanHooks()
        .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
        .responsive()
        .beginAtZero()
        .legend({ position: 'bottom' })
});

</script>

@endsection