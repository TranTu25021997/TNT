@extends('front-end.master')
@section('title','Giỏ hàng')
@section('main')
	<link rel="stylesheet" href="css/cart.css">
	 <section class="new_arrivals_area section-padding-80 clearfix">
		<div class="container">
            <div class="row">
                <div class="col-12">
					<div id="wrap-inner">
						if(Session::has('cart'))
						<div id="list-cart">
							<h3>Giỏ hàng</h3>
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh sản phẩm</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Giá tiền</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
									</tr>
									
									@foreach($giay_cart as $giay)
									<tr>
										<td><img class="img-responsive" src="{{asset('lib/storage/app/avatar/'.$giay->hinh)}}"></td>
										<td>{{$giay['item']['tengiay']}}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number">
											</div>
										</td>
										<td><span class="price">{{number_format($ct->gia, 0,',','.')}}</span></td>
										<td><span class="price"></span></td>
										<td><a href="#">Xóa</a></td>
									</tr>
									@endforeach
									
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
											Tổng thanh toán: <span class="total-price">{{Session('cart')->totalPrice}}</span>
																													
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="#" class="my-btn btn">Mua tiếp</a>
										<a href="#" class="my-btn btn">Cập nhật</a>
										<a href="#" class="my-btn btn">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>            	                	
						</div>
						@endif

						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form>
								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" id="add" name="add">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
 @stop