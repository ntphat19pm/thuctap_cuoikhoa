@extends('layouts.site')
@section('main')

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_tintuc.jpg'); background-size:1600px; height: 300px">

    <div class="container">
        <h1 class="text-center">
            TIN TỨC
        </h1>
    </div>

    
  
</section>

<main id="main">
    <div class="mt-5 mb-5">
        <div class="row">
            <div class="col-lg-1">
                
            </div>
            <div class="col-lg-10">
                <div class="text-center">
                    <p><b><h1 style="color:red; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">{{$data->tenbai}}</h1></b></p>
                    {{-- <div class="badge rounded-pill bg-warning ml-5 pull-center">{{date("d-m-Y",strtotime($data->create_at))}}</div> --}}
                </div>

                <div class="row">
                    <div class="col-lg-2">
                    </div>              
                    <div class="col-lg-8">
                        <p class="text-left"><i>Được viết bởi {{$data->nhanvien->hovaten}}
                            <br>Xuất bản: {{date("l, d-m-Y",strtotime($data->create_at))}}</i></p>
                        <p class="text-right">
                            <div class="zalo-share-button" data-href="" data-oaid="3623842424356090488" data-layout="1" data-color="blue" data-customize="false"></div>
                            <div class="fb-share-button" data-href="" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            
                            {{-- <div class="fb-like" data-href="" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div> --}}
                        </p>
                        <p class="text-left">
                            
                        </p>
                        <p><b><h5 style="color:rgb(0, 0, 0)">{!!$data->mota!!}</h5></b></p>
                        <hr>
                        <div style="text-align: center;">                
                            {!!$data->noidung!!}
                        </div>
                        <fieldset>
                            <legend>Tags bài viết</legend>
                            <p>
                                <i class="fa fa-tag"></i>
                                @php
                                    $tags=$data->tags;
                                    $tags= explode(",",$tags);
                                @endphp

                                @foreach($tags as $tag)
                                    <a style="background: rgb(78, 227, 253); color:white; margin: 1px 2px" href="{{route('home.tag',str_slug($tag))}}" clas="tags_style">{{$tag}}</a>
                                @endforeach
                            </p>
                        </fieldset>
                        <div class="zalo-share-button" data-href="" data-oaid="3623842424356090488" data-layout="1" data-color="blue" data-customize="false"></div>
                        <div class="fb-like" data-href="{{$currentUrl}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                        <div class="fb-share-button" data-href="{{$currentUrl}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{$currentUrl}}" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                        
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                
            </div>
        </div>
        
    </div>
    <section id="portfolio" class="portfolio mt-5">
        <div class="container" data-aos="fade-up">
    
            <div class="section-title">
                <h2>BÌNH LUẬN</h2>
                <p>Dưới đây là những bình luận của bài viết</p>
                <b style="color: red">{{$data->tenbai}}</b>
            </div>
            @if($data->binhluan_id==1)
                <div class="fb-comments" data-href="{{$currentUrl}}" data-width="100%" data-numposts="5"></div>
            @elseif($data->binhluan_id==0)
                <p class="text-center">Hiện tại bài viết này đã tắt tính năng bình luận. </p>
            @endif
        </div>
    </section>

    <section id="services" class="services section-bg">
        <div class="container-fluid" data-aos="fade-up">
    
          <div id="portfolio" class="our-portfolio section">
            <div class="container">
              <div class="row">
                <div class="col-lg-5">
                  <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6 style="font-size: 25px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">BÀI VIẾT</h6>
                    <h2 style="font-size: 35px;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><span>LIÊN QUAN</span></h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="row">
                <div class="col-lg-12">
                  <div class="loop owl-carousel">
                    @foreach ($bv_lienquan as $item)
                    <div class="item">
                      <div class="portfolio-item">
                        <div class="thumb">
                          <img src="{{url('public/uploads/baiviet')}}/{{$item->avatar}}" alt="" height="220px" width="100px">
                          <div class="hover-content">
                            <div class="inner-content">
                              <a href="{{route('home.chitietbai',$item->id)}}"><h4>{{$item->tenbai}}</h4></a>
                              <span>
                                @if($item->phanloai_id==0)
                                TIN SỰ KIỆN
                                @elseif($item->phanloai_id==1)
                                TIN CÔNG NGHỆ
                                @endif
    
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
    
        </div>
      </section>

</main>
