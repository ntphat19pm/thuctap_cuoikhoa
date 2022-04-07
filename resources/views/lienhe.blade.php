@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_lienhe.jpg'); background-size:1600px; height: 300px">

  <div class="container">
    <h1 class="text-center">LIÊN HỆ</h1>
  </div>

</section><!-- End Hero -->

<main id="main">
    <section id="contact" class="contact mt-5">
        <div class="container" data-aos="fade-up">
    
          <div class="row">
    
            <div class="col-lg-12 d-flex align-items-stretch">
                
              <div class="info">
                
                @foreach ($lienhe as $item)
                    <div class="section-title">
                        <h2>{{$item->ten_hethong}}</h2>
                    </div>
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>{{$item->diachi}}</p>
                    </div>
    
                    <div class="email">
                        <a href="mailto:{{$item->email}}"><i class="bi bi-envelope"></i></a>
                        <h4>Email:</h4>
                        <p>{{$item->email}}</p>
                    </div>
    
                    <div class="phone">
                        <a href="tel:{{$item->sdt}}"><i class="bi bi-phone"></i></a>
                        <h4>Call:</h4>
                        <p>0{{number_format($item->sdt,0,',',' ')}}</p>
                    </div>
                @endforeach
              </div>
    
            </div>    
          </div>
    
        </div>
    </section>

    @foreach ($lienhe as $item)
    <br>{!!$item->map!!}
    @endforeach

    <section id="contact" class="contact mt-5">
        <div id="contact" class="contact-us section">
            <div class="container">
              
              <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                  <form id="contact" action="{{route('home.postlienhe_chuyendoi')}}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                      <div class="section-title">
                        <h2>TƯ VẤN DỊCH VỤ CHUYỂN ĐỐI SỐ</h2>
                        <p>Liên hệ ngay với chúng tôi để cập nhật những xu hướng thị trường chuyển đổi số mới nhất, và nhận tư vấn từ chúng tôi</p>
                      </div>
                      <div class="col-lg-12">
                          <div class="row">
                              <div class="col-lg-6">
                                  <fieldset>
                                  <input type="text" name="hoten_lienhe" id="hoten_lienhe" class="form-control" placeholder="Họ tên" autocomplete="off" required>
                                </fieldset>
                              </div>
                              <div class="col-lg-3">
                                  <fieldset>
                                  <input type="sdt_lienhe" name="sdt_lienhe" id="sdt_lienhe" class="form-control" placeholder="Số điện thoại" autocomplete="off" required>
                                  </fieldset>
                              </div>
                              <div class="col-lg-3">
                                  <fieldset>
                                  <input type="text" name="email_lienhe" id="email_lienhe" pattern="[^ @]*@[^ @]*" placeholder="Email" class="form-control" required="" autocomplete="off">
                                  </fieldset>
                              </div>
                              <div class="col-lg-6">
                                  <fieldset>
                                  <input type="text" name="congty_lienhe" id="congty_lienhe" class="form-control" placeholder="Công ty" autocomplete="off" required="">
                                  </fieldset>
                              </div>
                              <div class="col-lg-6">
                                  <fieldset>
                                      <select id="linhvuc_lienhe" class="form-select" name="linhvuc_lienhe" required="">
                                          <option value="">--Chọn lĩnh vực--</option>
                                          @foreach($chuyendoi_linhvuc as $value)
                                              <option value="{{ $value->id }}">{{ $value->ten_danhmuc}}</option>
                                          @endforeach
                                      </select>
                                  </fieldset>
                              </div>
                              <div class="col-lg-12">
                                  <fieldset>
                                  <textarea name="chitiet" type="text" class="form-control" id="chitiet" placeholder="Message" required=""></textarea>  
                                  </fieldset>
                              </div>
                              <div class="col-lg-12">
                                  <fieldset>
                                  <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                  </fieldset>
                              </div>
                          </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </section>

    <section id="team" class="team section-bg">

        <div class="container mt-5 mb-5" data-aos="fade-up">
          <div class="member">
            <div class=" text-center">
                <div class="section-title">
                    <h2>TƯ VẤN GIẢI PHÁP SỐ</h2>
                </div>
              <p style="font-size: 15px"><i>Quý khách vui lòng liên hệ qua đầu số bán hàng, tư vấn dịch vụ trực tiếp: 18008000 (miễn phí).</i></p>
              <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ĐĂNG KÝ NGAY
              </button>
              
              <!-- Modal -->
    
            </div>
          </div>
        </div>
    
        <form action="{{route('home.postthongtin')}}" method="post" class="needs-validation" novalidate>
          @csrf
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN ĐĂNG KÝ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="form-group invalid">
                    <label for="hoten" class="form-label">Nhập họ và tên</label>
                    <input type="text" class="form-control" name="hoten" id="hoten" required autocomplete="off" >
                  </div>
    
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group invalid mt-3">
                        <label for="sdt" class="form-label">Nhập số điện thoại</label>
                        <input type="text" class="form-control" name="sdt" id="sdt" required autocomplete="off" >
                      </div>
                      <div class="form-group invalid mt-2">
                        <label for="diachi" class="form-label">Nhập địa chỉ</label>
                        <input type="text" class="form-control" name="diachi" id="diachi" required autocomplete="off" >
                      </div>
    
                      <div class="form-group mt-3">
                        <label for="sanpham_id">Sản phẩm tư vấn<span class="text-danger font-weight-bold">*</span></label>
                        <select id="sanpham_id" class="form-control custom-select @error('sanpham_id') is-invalid @enderror" name="sanpham_id" required autofocus>
                            <option value="">--Chọn sản phẩm--</option>
                            @foreach($sp as $value)
                                <option value="{{ $value->id }}">{{ $value->tensp}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group invalid mt-3">
                        <label for="email" class="form-label">Nhập địa chỉ mail</label>
                        <input type="email" class="form-control" name="email" id="email" required autocomplete="off" >
                      </div>
    
                      <div class="form-group mt-3">
                        <label for="hinhthuc">Hình thức liên hệ<span class="text-danger font-weight-bold">*</span></label>
                        <select id="hinhthuc" class="form-control custom-select @error('hinhthuc') is-invalid @enderror" name="hinhthuc" required autofocus>
                            <option value="">--Chọn hình thức liên hệ--</option>
                            <option value="0">Gọi điện</option>
                            <option value="1">SMS</option>
                            <option value="2">Zalo</option>
                            <option value="3">Email</option>    
                        </select>
                      </div>
    
                      <div class="form-group mt-3">
                        <label for="yeucau_id">Yêu cầu tư vấn<span class="text-danger font-weight-bold">*</span></label>
                        <select id="yeucau_id" class="form-control custom-select @error('yeucau_id') is-invalid @enderror" name="yeucau_id" required autofocus>
                            <option value="">--Chọn yêu cầu tư vấn--</option>
                            <option value="0">Phản ánh sản phẩm dịch vụ</option>
                            <option value="1">Tư vấn sản phẩm dịch vụ</option>    
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group invalid mt-3">
                    <label for="noidung" class="form-label">Nhập nội dung cụ thể</label>
                    <textarea class="form-control" name="noidung" id="noidung" cols="10" rows="5" required></textarea>
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
</main><!-- End #main -->

@endsection
       