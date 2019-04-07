@extends('front-end.master')
@section('title','Danh mục loại giày')
@section('main')   
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">
                    	@foreach($cts as $ct)
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="{{asset('lib/storage/app/avatar/'.$ct->hinh)}}" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="{{asset('lib/storage/app/avatar/'.$ct->hinh)}}" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                
                                <a href="#">
                                    <h6>{{$ct->tengiay}}</h6>
                                </a>
                                <p class="product-price">{{number_format($ct->gia,0,',','.')}}</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{asset('chitiet/'.$ct->giay_id.'/'.$ct->slug.'.html')}}" class="btn essence-btn">Xem chi tiết</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                          @endforeach
                </div>
            </div>
        </div>   
@stop	
					
			