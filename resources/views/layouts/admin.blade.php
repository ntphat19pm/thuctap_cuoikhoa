<?php
  $menu=config('menu');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Dashboard 2</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="{{url('public/adminlte')}}/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="d4909c9b-66ba-4a96-a675-053bb32409b9">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>

<link rel="stylesheet" href="{{url('public/adminlte')}}/plugins/summernote/summernote-bs4.min.css"> 
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <script>
      window.setTimeout("dem_vn_clo()",1000);
      function getTime(){
        var time = new Date();
        var dow = time.getDay();
        if(dow==0)
          dow = "Chủ nhật";
        else if (dow==1)
          dow = "Thứ hai";
        else if (dow==2)
          dow = "Thứ ba";
        else if (dow==3)
          dow = "Thứ tư";
        else if (dow==4)
          dow = "Thứ năm";
        else if (dow==5)
          dow = "Thứ sáu";
        else if (dow==6)
          dow = "Thứ bảy";  
        var day = time.getDate();
        var month = time.getMonth()+1;
        var year = time.getFullYear();
        var hr = time.getHours();
        var min = time.getMinutes();
        var sec = time.getSeconds();
        day = ((day < 10) ? "0" : "") + day;
        month = ((month < 10) ? "0" : "") + month;
        hr = ((hr < 10) ? "0" : "") + hr;
        min = ((min < 10) ? "0" : "") + min;
        sec = ((sec < 10) ? "0" : "") + sec;
        return dow + " " + day + "/" + month + "/" + year + " " + hr + ":" + min + ":" + sec;
      }
      function dem_vn_clo(){
        var dem_vn_clo = document.getElementById("dem_vn_clo");
        if (dem_vn_clo != null)
          dem_vn_clo.innerHTML = getTime();
        setTimeout("dem_vn_clo()", 1000);
      }
    </script>
    {{-- <script type="text/javascript">
      toastr.options = {
      "closeButton": false,
      "debug": false,
      "newestOnTop": false,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    </script> --}}
  <script>
    function SHPassword(x)
    {
      var chbox=x.checked;
      if(chbox)
      {
        document.getElementById("password").type="text";
      }
      else{
        document.getElementById("password").type="password";
      }
      
    }
  </script>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

<div class="preloader flex-column justify-content-center align-items-center">
<img class="animation__wobble" src="{{url('public/adminlte')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>

<nav class="main-header navbar navbar-expand navbar-dark">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<marquee width="100%" behavior="scroll" scrollamount="10">  
  <h5>Xin chào bạn {{Auth::user()->hovaten}}! Đây là trang Quản lý Shop bán áo. Bạn đang đăng nhập bằng tài khoản {{Auth::user()->tendangnhap}}.</h5>
</marquee>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
 <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-5">

<a href="" class="brand-link text-center">
<span class="brand-text font-weight-light"><b style="color: red">VIETTEL SOLUTION</b></span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="{{url('public')}}/logo2.png" alt="User Image" style="width:70px">
</div>
<div class="info">

<a href="#" class="d-block">
  @if(Auth::user()->chucvu_id==1)
    <b><a class="d-block" style="color: red">{{Auth::user()->hovaten}}</a></b>
  @else
    <b><a class="d-block tex-center" style="color: rgb(0, 153, 255)">{{Auth::user()->hovaten}}</a></b>
  @endif
</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

@if(Auth::user()->trangthai==0)
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
              
          
          @foreach ($menu as $m)
          <li class="nav-item">
            <a href="{{route($m['route'])}}" class="nav-link">
              <i class="nav-icon fas {{$m['icon']}}"></i>
              <p>
                {{$m['label']}}
                @if (isset($m['item']))
                     <i class="right fas fa-angle-left"></i>           
                @endif
               
              </p>
            </a>
            @if (isset($m['item']))
              <ul class="nav nav-treeview">
                @foreach($m['item'] as $mit)
                  <li class="nav-item">
                    <a href="{{route($mit['route'])}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{$mit['label']}}</p>
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
         
         
          @endforeach
    
        </ul>
      </nav>
      @elseif(Auth::user()->trangthai==1)
      <a href="{{route('dangxuat')}}" class="nav-link">
        <i class="fas fa-sign-out-alt"></i>
          Đăng xuất
      </a>
      @endif

</div>

</aside>

<div class="content-wrapper">

<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
</div>
</div>
</div>


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
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
            @yield('main')
          </div>
          <!-- /.card-body -->
         
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

</div>


<aside class="control-sidebar control-sidebar-dark">

</aside>


<footer class="main-footer">
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <div class="text-center"><b><span style="color: rgb(255, 187, 0)" id="dem_vn_clo"></span></b></div>
</div>
</footer>
</div>


<!-- jQuery -->
<script src="{{url('public/adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('public/adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('public/adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('public/adminlte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('public/adminlte')}}/dist/js/demo.js"></script>
{{-- <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
<script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/decoupled-document/ckeditor.js"></script> --}}

<!-- DataTables  & Plugins -->
<script src="{{url('public/adminlte')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{url('public/adminlte')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
{!! Toastr::message() !!}


<!-- Summernote -->
<script src="{{url('public/adminlte')}}/plugins/summernote/summernote-bs4.min.js"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    $("#example11").DataTable({
      "responsive": true, "autoWidth": false
    }).buttons().container().appendTo('#example11_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  $(function () {
    $("#example111").DataTable({
      "responsive": true, "autoWidth": false
    }).buttons().container().appendTo('#example11_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

  })
</script>

<script>
  CKEDITOR.replace('chitiet');
  CKEDITOR.replace('noidung');
</script>

{{-- <script>
  function LayNoiDung(){
            var data = CKEDITOR.instances.chitiet.getData();
            alert(data)
        }
</script> --}}

{{-- <script src="{{url('public/ckeditor')}}/ckeditor.js"></script> --}}

<script src="{{url('resources/js')}}/Validator.js"></script>

<script>
  Validator({
    form:'#idForm',
    rule:[
      Validator.isRequired('#idInput'),
    ]
  });


</script>

<script>
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if(!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>


@yield('js')
@yield('cke')
</body>
</html>