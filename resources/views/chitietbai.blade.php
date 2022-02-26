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
</main>
