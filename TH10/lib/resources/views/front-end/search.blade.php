@extends('front-end.master')
@section('title','Tìm kiếm')
@section('main')
	
        <div class="container">
        	<h2>Kết quả tìm kiếm :</h2>
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                        @foreach($sea as $s)
          
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('lib/storage/app/avatar/'.$s->hinh)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('lib/storage/app/avatar/'.$s->hinh)}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                
                                <a href="single-product-details.html">
                                    <h6>{{$s->tengiay}}</h6>
                                </a>
                                <p class="product-price">{{number_format($s->gia,0,',','.')}}</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('chitiet/'.$s->giay_id.'/'.$s->slug.'.html')}}" class="btn essence-btn">Xem chi tiết</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>			
@stop