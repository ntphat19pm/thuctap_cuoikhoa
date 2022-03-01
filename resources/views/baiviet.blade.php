@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>TIN TỨC</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{url('public/arsha')}}/assets/img/hero-img.png" class="img-fluid animated" alt="">
        
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">
  <section id="portfolio" class="portfolio mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>KHÁCH HÀNG TIÊU BIỂU</h2>
        <p>Dưới đây là những khách hàng tiêu biểu đã cộng tác cùng VIETTEL SOLUTION </p>
      </div>

      <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Tin sự kiện</li>
        <li data-filter=".filter-card">Tin công nghệ</li>
      </ul>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @foreach ($sukien as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{route('home.chitietbai',$item->id)}}">
              <div class="portfolio-img"><img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4><a>{{$item->tenbai}}<</h4>
                <p>Tin sự kiện</p>
              </div>
            </a>
          </div>
        @endforeach

        @foreach ($congnghe as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <a href="{{route('home.chitietbai',$item->id)}}">
              <div class="portfolio-img"><img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>{{$item->tenbai}}</h4>
                <p>Tin công nghệ</p>
              </div>
            </a>
          </div>
        @endforeach
      </div>

    </div>
  </section>
  {{-- <section id="about" class="services mb-2">
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach($baiviet as $item)
        <div class="col-lg-4 mb-5 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" class="img-fluid animated d-block w-100" alt="">
            <h6 class="mt-2 text-center" style="font-size: 15px"><a href="{{route('home.chitietbai',$item->id)}}">{{$item->tenbai}}</a></h6>
            <span style="display: -webkit-box;
            line-height: 25px;
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;">{!!$item->mota!!}</span>
            <hr>
            <span class="badge rounded-pill bg-warning ml-5 pull-right">{{date("d-m-Y",strtotime($item->create_at))}} </span>
          </div>
        </div>
        @endforeach
      </div>
      <div>
        <div class="pagination justify-content-center" >{{$baiviet->appends(request()->all())->links()}}</div>
    </div>
    </div>
  </section> --}}
</main><!-- End #main -->

@endsection
       