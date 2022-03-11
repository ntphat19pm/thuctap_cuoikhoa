
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @foreach ($lienhe as $item)
    {{$item->ten_hethong}}
    @endforeach
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('public/arsha')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('public/arsha')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('public/arsha')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{url('public/arsha')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('public/arsha')}}/assets/css/style.css" rel="stylesheet">

  <link href="{{url('public/seo_dream')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/fontawesome.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/templatemo-seo-dream.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/animated.css">
  <link rel="stylesheet" href="{{url('public/seo_dream')}}/assets/css/owl.css">

  <script>
    function SHPassword(x)
    {
      var chbox=x.checked;
      if(chbox)
      {
        document.getElementById("password").type="text";
        document.getElementById("repassword").type="text";
      }
      else{
        document.getElementById("password").type="password";
        document.getElementById("repassword").type="password";
      }
      
    }
  </script>

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
        <a href="{{route('home.home')}}">
          @foreach ($lienhe as $item)
            <img class="" width="55px" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" />
          @endforeach
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="{{route('home.home')}}"><span>Trang chủ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.gioithieu')}}"><span>Giới thiệu chung</span></a></li>
              <li class="dropdown"><a href="{{route('home.mangluoi')}}"><span>Mạng lưới toàn cầu</span></a></li>
              <li class="dropdown"><a href="{{route('home.giaithuong')}}"><span>Giải thưởng</span></a></li>
              <li class="dropdown"><a href="{{route('home.dauan')}}"><span>Dấu ấn</span></a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Giải pháp</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Lĩnh vực</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($linhvuc as $item)
                    <li><a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Dịch vụ</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  @foreach ($dichvu as $item)
                    <li><a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
                  @endforeach
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="https://3dbooth.egal.vn/khonggianao/viettel/" target="_blank">Không gian số</a></li>          
          <li class="dropdown"><a href="#"><span>Tin tức</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.baiviet')}}"><span>Bài viết</span></a></li>
              <li class="dropdown"><a href="{{route('home.video')}}"><span>Video</span></a></li>
            </ul>
          </li>     
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
          <li class="dropdown"><a href="#"><span>Hỗ trợ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="{{route('home.cauhoi')}}"><span>Câu hỏi thường gặp</span></a></li>
              <li class="dropdown"><a href="{{route('home.chinhsach')}}"><span>Chính sách bảo mật</span></a></li>
              <li class="dropdown"><a href="{{route('home.dieukhoan')}}"><span>Điều khoản sử dụng website</span></a></li>
              <li class="dropdown"><a href="{{route('home.dauan')}}"><span>Dấu ấn</span></a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('main')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            @foreach ($lienhe as $item)
              <img class="rounded mx-auto d-block " style="width:200px" src="{{url('public/uploads')}}/{{$item->logo}}" alt="logo" />
              <p>
                {{$item->diachi}} <br><br>
                <strong>Phone:</strong> {{$item->sdt}}<br>
                <strong>Email:</strong> {{$item->email}}<br>
              </p>
            @endforeach
          </div>
          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Hạ tầng số</h4>
            <ul>
              @foreach ($dichvu as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Giải pháp số</h4>
            <ul>
              @foreach ($linhvuc as $item)
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('home.showlinhvuc',$item->id)}}">{{$item->tendanhmuc}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('public/arsha')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('public/arsha')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('public/arsha')}}/assets/js/main.js"></script>

  <!-- Scripts -->
  <script src="{{url('public/seo_dream')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('public/seo_dream')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/owl-carousel.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/animation.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/imagesloaded.js"></script>
  <script src="{{url('public/seo_dream')}}/assets/js/custom.js"></script>

  @foreach ($lienhe as $item)
    {!!$item->mess!!}
    {!!$item->zalo!!}
  @endforeach

</body>

</html>