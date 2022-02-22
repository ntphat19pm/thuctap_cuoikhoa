@extends('layouts.site')
@section('main')
    </div>
        <div class="main_content">
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive shop_cart_table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-thumbnail">Sản phẩm</th>
                                            <th class="product-name">Đơn giá</th>
                                            <th class="product-price">Số lượng</th>
                                            <th class="product-quantity">Thành tiền</th>
                                           
                                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            
                                       
                                        @foreach ($data as $item)
                                        <tr>
                                            <td  ><img width="50px" src="{{url('public/uploads/sanpham/avatar')}}/{{$item->sanpham->anh}}"></td>
                                            <td  >{{$item->sanpham->tensp}}</td>
                                            <td  >{{number_format($item->sanpham->giaxuat)}}.VND</td>
                                            <td  >{{$item->soluong}}</td>
                                            <td  >{{number_format($item->soluong*$item->sanpham->giaxuat)}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                
                                </table>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div> 
@endsection