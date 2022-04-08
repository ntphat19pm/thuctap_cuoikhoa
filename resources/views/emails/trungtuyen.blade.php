<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Trúng tuyển - {{ config('app.name', 'ViettelSolutions') }}</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            @foreach ($lienhe as $item)
                <img  src="{{url('public/uploads')}}/{{$item->logo}}" alt="" width="30"class="d-inline-block align-text-top">
                ĐÂY LÀ EMAIL TỰ ĐỘNG ĐƯỢC GỬI TỪ {{$item->ten_hethong}}
                <hr>
            @endforeach            
          </a>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            Kính gửi : Anh/chị {{$trungtuyen['hoten']}}
            <br>Đại diện Viettel Solutions, tôi xin vui mừng thông báo Anh/chị đã trúng tuyển vị trí {{$trungtuyen['vitri']}} tại công ty chúng tôi.
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <p class="card-text">Chúng tôi rất ấn tượng với kiến thức và kinh nghiệm của anh trong lĩnh vực, và nhận thấy anh hoàn toàn phù hợp vị trí {{$trungtuyen['vitri']}} tại công ty.</p>
                    <p class="card-text">Như đã thỏa thuận trong buổi phỏng vấn:</p>
                    <p class="card-text">- BHXH, BHYT, BHTN đầy đủ</p>
                    <p class="card-text">- Chế độ khen thưởng, Lễ Tết, nghỉ phép, du lịch thường niên theo quy định của công ty</p>
                    <p class="card-text">- Đào tạo chuyên môn theo yêu cầu thực tế công việc</p>
                    <p class="card-text">Chúng tôi cũng đính kèm file chi tiết hợp đồng và mô tả công việc mà vị trí Nhân viên kế toán yêu cầu để anh xem qua trước khi quyết định.</p>
                    <p class="card-text">Anh vui lòng phản hồi quyết định của mình trước ngày {{date("d-m-Y",strtotime($trungtuyen['ngay']))}}.</p>
                    <p class="card-text">Trong thời gian cân nhắc, nếu anh có bất cứ câu hỏi nào, vui lòng liên hệ tôi thông qua số điện thoại/zalo 0917663865 hoặc email ntphat_19pm@student.agu.edu.vn để được hồi âm nhanh nhất.</p>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="card-text">Thông tin tài khoản đăng nhập hệ thống Viettel Solutions</h3>
                    <p class="card-text">Đường link đăng nhập: http://viettel.solutions.com/admin</p>
                    <p class="card-text">Tên đăng nhập: {{$trungtuyen['tendangnhap']}}</p>
                    <p class="card-text">Mật khẩu: {{$trungtuyen['password']}}</p>
                    <p class="card-text">Lưu ý:</p>
                    <p class="card-text">- Tên đăng nhập và mật khẩu không được chia sẻ với bất kỳ ai.</p>
                    <p class="card-text">- Tài khoản hiện tại chưa được kích hoạt. Khi nào anh/chị phản hồi mail và trở thành nhân viên chính thức sẽ được kích hoạt.</p>
                    <p class="card-text">Chúng tôi rất mong sớm nhận được phản hồi từ anh . Chân thành cảm ơn !</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">
                <p>Trân trọng,</p>
                <p>PHÒNG NHÂN SỰ {{ config('app.name', 'ViettelSolutions') }}</p>
            </small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>