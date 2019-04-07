@extends('front-end.master')
@section('title','Chi tiết')
@section('main')
<link rel="stylesheet" href="css/chitiet.css">
 <section class="new_arrivals_area section-padding-80 clearfix">
<div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div id="wrap-inner">
                        <div id="product-info">
                            <div class="clearfix"></div>
                            <h3>{{$ct->tengiay}}</h3>
                            <div class="row">
                                <div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
                                    <img src="{{asset('lib/storage/app/avatar/'.$ct->hinh)}}">
                                </div>
                                <div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
                                    <p>Giá: <span class="price">{{number_format($ct->gia, 0,',','.')}}</span></p>
                                    <p>Số lượng: {{$ct->soluong}}</p>
                                    <p>Tình trạng: {{$ct->tinhtrang}}</p>
                                    <p>Khuyến mại: {{$ct->khuyenmai}}</p>
                                    <p>Trạng thái: @if($ct->trangthai==1) Còn hàng @else Hết hàng @endif</p>
                                    <p class="add-cart text-center"><a href="{{asset('cart/add/'.$ct->giay_id)}}">Đặt hàng</a></p>
                                </div>
                            </div>                          
                        </div>
                        <div id="product-detail">
                            <h3>Chi tiết sản phẩm</h3>
                            <p class="text-justify">{!!$ct->mota!!}</p>
                        </div>
                        <div id="comment">
                            <h3>Bình luận</h3>
                            <div class="col-md-9 comment">
                                <form method="post">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input required type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Tên:</label>
                                        <input required type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="cm">Bình luận:</label>
                                        <textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-default">Gửi</button>
                                    </div>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
                    </div>
                        
                    <div id="comment-list">
                       @foreach($bls as $bl)
                            <ul>
                                <li class="com-title">
                                    {{$bl->bl_name}}
                                    <br>
                                    <span>{{date('d/m/Y H:i', strtotime($bl->created_at))}}</span>    
                                </li>
                                <li class="com-details">
                                    {{$bl->bl_noidung}}
                                </li>
                            </ul>
                        @endforeach
                </div>
 </div> 
</div>
@stop
    
   