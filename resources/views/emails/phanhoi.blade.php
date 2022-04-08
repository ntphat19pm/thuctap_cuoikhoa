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
                Đây là email phản hổi từ Phòng Nhân sự {{$item->ten_hethong}}
                <hr>
            @endforeach            
          </a>
        </div>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <p class="card-text">{!!$phanhoi['chitiet']!!}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">
                <p>Trân trọng./.</p>
                @foreach ($lienhe as $item)
                    PHÒNG NHÂN SỰ {{$item->ten_hethong}}
                @endforeach  
            </small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>