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
            </div>
            <div class="col-lg-1">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
            </div>              
            <div class="col-lg-8">
                <p class="text-left"><i>Được viết bởi {{$data->nguoidang}}
                    <br>Xuất bản: {{date("d-m-Y",strtotime($data->create_at))}}</i></p>
                <p class="text-right">
                    <div class="zalo-share-button" data-href="" data-oaid="228440942617831112" data-layout="1" data-color="blue" data-customize="false"></div>
                </p>
                <p><b><h5 style="color:rgb(0, 0, 0)">{!!$data->mota!!}</h5></b></p>
                <hr>
                <div style="text-align: center;">                
                    {!!$data->noidung!!}
                </div>
            </div>
            <div class="col-lg-2">
            </div>
        </div>
    </div>
    <section id="services" class="services section-bg">
        <div class="container mb-5" data-aos="fade-up">
  
          <div class="section-title mt-5">
            <h2>BÌNH LUẬN</h2>
            
            <p>Có {{$binhluan->count()}} bình luận</p>

            @if($data->binhluan_id==1)
            <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                BÌNH LUẬN
            </button>
            @elseif($data->binhluan_id==0)
            <p>Hiện tại bài viết này đã tắt tính năng bình luận. </p>
            @endif
          </div>
  
          <div class="row">
            @foreach($binhluan as $item)
                <div class="col-lg-4 ">
                    <div class="icon-box">
                        <h5>{{$item->hoten}}</h5>
                        <hr>
                        <p>{!!$item->noidung!!}</p>
                    </div>
                </div>
            @endforeach
  
          </div>  
        </div>

        <form action="{{route('home.postbinhluan')}}" method="post">
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN BÌNH LUẬN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
      
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group invalid">
                                <label for="hoten" class="form-label">Nhập họ và tên</label>
                                <input type="text" class="form-control" name="hoten" id="hoten" required >
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="baiviet_id" class="form-label">Bài viết</label>
                                <input type="text" value="{{$data->id}}" class="form-control" name="baiviet_id" id="baiviet_id" required readonly >
                            </div>
                        </div>
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="noidung" class="form-label">Nhập nội dung cụ thể</label>
                      <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Gửi thông tin</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </section>
</main>
