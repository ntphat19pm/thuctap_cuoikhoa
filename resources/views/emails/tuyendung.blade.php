<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ứng tuyển thành công - {{ config('app.name', 'ViettelSolutions') }}</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            @foreach ($lienhe as $item)
                <img  src="{{url('public/uploads')}}/{{$item->logo}}" alt="" width="30"class="d-inline-block align-text-top">
                Đây là email tự động được gửi từ {{$item->ten_hethong}}
                <hr>
            @endforeach            
          </a>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
          THÔNG TIN CÁ NHÂN
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <p class="card-text">Họ và tên: {{$tuyendung['hoten']}}</p>
                    <p class="card-text">Giới tính: {{$tuyendung['gioitinh']}}</p>
                    <p class="card-text">CMND/CCCD: {{$tuyendung['cmnd']}}</p>
                    <p class="card-text">Email: {{$tuyendung['email']}}</p>
                </div>
                <div class="col-lg-6">
                    <p class="card-text">Ngày sinh: {{date("d-m-Y",strtotime($tuyendung['ngaysinh']))}}</p>
                    <p class="card-text">Số điện thoại: {{$tuyendung['sdt']}}</p>
                    <p class="card-text">Địa chỉ: {{$tuyendung['diachi']}}</p>
                </div>
                <div class="col-lg-12">
                    <p class="card-text">Vị trí ứng tuyển: {{$tuyendung['vitri']}}</p>
                    <hr>
                    <p>Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất. Mọi chi tiết vui lòng liên hệ 0917663865 - 0385111603</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">
                <p>Trân trọng,</p>
                <p>{{ config('app.name', 'ViettelSolutions') }}</p>
            </small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>