@extends('layouts.site')
@section('main')
 

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{url('public/uploads')}}/banner_tuyendung.png'); background-size:1520px; height: 950px">

  <div class="container">
    {{-- <h1 class="text-center">TUYỂN DỤNG</h1> --}}
  </div>

</section><!-- End Hero -->

<main id="main">
    <div class="row">
        <div class="col-lg-2">
        </div>              
        <div class="col-lg-8">
          {{-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSem15Aas2srBer-kQm-6ErKIKh8XTwMlFVAMV_0YLNuLAPgYw/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe> --}}
          
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <section id="contact" class="contact mt-5">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>THÔNG TIN TUYỂN DỤNG</h2>
        </div>
  
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <h1><b>TUYỂN DỤNG NHÂN VIÊN VIETTEL</b></h1>
              <br><div style="font-size:20px">Chào mừng bạn đến với ngôi nhà Viettel. Tại đây chúng tôi yêu cầu tuyển dụng rất nhiều vị trí. Mong rằng bạn sẽ tìm được một công việc thích hợp với bản thân.</div>
            </div>
          </div>  
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="text-center"><h2><b>THÔNG TIN CÁ NHÂN</b></h2></div>
              <form action="{{route('home.posttuyendung')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group invalid mt-3">
                      <label for="hoten_ungvien" class="form-label">Họ và tên</label>
                      <input type="text" class="form-control" name="hoten_ungvien" id="hoten_ungvien" required >
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="sdt" class="form-label">Số điện thoại</label>
                      <input type="text" class="form-control" name="sdt" id="sdt" required >
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" required >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group invalid mt-3">
                      <label for="ngaysinh" class="form-label">Ngày sinh</label>
                      <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" required >
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="diachi" class="form-label">Địa chỉ</label>
                      <input type="text" class="form-control" name="diachi" id="diachi" required >
                    </div>
                    <div class="form-group invalid mt-3">
                      <label for="cmnd" class="form-label">CMND/CCCD</label>
                      <input type="text" class="form-control" name="cmnd" id="cmnd" required >
                    </div>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group mt-3">
                      <label for="vitri_ungtuyen">Vị trí ứng tuyển<span class="text-danger font-weight-bold">*</span></label>
                      <select id="vitri_ungtuyen" class="form-control custom-select @error('vitri_ungtuyen') is-invalid @enderror" name="vitri_ungtuyen" required autofocus>
                        <option value="">--Chọn vị trí ứng tuyển--</option>
                        <option value="1">Nhân viên bán hàng điểm bán</option>
                        <option value="2">Nhân viên bán hàng doanh nghiệp</option>
                        <option value="3">Nhân viên bán hàng dịch vụ số</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group mt-3">
                      <label for="file_cv">File tài liệu <span class="text-danger font-weight-bold">*</span></label>
                      <input id="file_uploads" type="file" class="form-control @error('file_cv') is-invalid @enderror" name="file_uploads" value="{{ old('file_uploads') }}" required autocomplete="file_uploads" />
                    </div>
                  </div>
                </div>
                <div class="form-group mt-5">
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-outline-danger btn-lg">Gửi thông tin ứng tuyển</button>
                  </div>
                </div>
              </form>
            </div>
          </div>  
        </div>
  
      </div>
    </section>
</main><!-- End #main -->

@endsection
       