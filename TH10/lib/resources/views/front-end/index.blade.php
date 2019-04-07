@extends('front-end.master')
@section('title','Trang chủ')
@section('main')
  
  <!-- Sản Phẩm mới về -->   

        <div class="container">
             <h2>Sản phẩm mới về</h2>
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach($new as $g)
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('lib/storage/app/avatar/'.$g->hinh)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('lib/storage/app/avatar/'.$g->hinh)}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                
                                <a href="#">
                                    <h6>{{$g->tengiay}}</h6>
                                </a>
                                <p class="product-price">{{number_format($g->gia,0,',','.')}}</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('chitiet/'.$g->giay_id.'/'.$g->slug.'.html')}}" class="btn essence-btn">Xem chi tiết</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                          @endforeach
                </div>
            </div>
        </div>
        <!-- Sản Phẩm bán chạy -->
                        <h2>Sản phẩm bán chạy</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach($hot as $g)
          
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('lib/storage/app/avatar/'.$g->hinh)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('lib/storage/app/avatar/'.$g->hinh)}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                
                                <a href="single-product-details.html">
                                    <h6>{{$g->tengiay}}</h6>
                                </a>
                                <p class="product-price">{{number_format($g->gia,0,',','.')}}</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('chitiet/'.$g->giay_id.'/'.$g->slug.'.html')}}" class="btn essence-btn">Xem chi tiết</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
@stop
    
   