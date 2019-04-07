@extends('front-end.master')
@section('title','Đăng Ký')
@section('main')
<link rel="stylesheet" href="css/chitiet.css">
 <section class="new_arrivals_area section-padding-80 clearfix">
<div class="container">
		   			<!-- @if(count($errors)>0)
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                                @endif
                    @if(Session::has('thongbao')) -->
                   <!--  <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif -->
				<div class="panel-body">
					<form action="{{asset('dangky')}}" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<h2>Đăng Ký</h2>
						<fieldset>
							 @include('errors.note')
							<div class="form-group">
								<h>Tên khách hàng</h>
								<input required class="form-control" placeholder="Nhập Tên" name="ten" type="text" autofocus="" value="">
							</div>
							<div class="form-group">
								<h>Email</h>
								<input required class="form-control" placeholder="Nhập Email" name="email" type="email" autofocus="" value="">
							</div>
							
							<div class="form-group">
								<h>Mật khẩu</h>
								<input required class="form-control" placeholder=" Nhập Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<h>Số điện thoại</h>
								<input required class="form-control" placeholder="Nhập số điện thoại" name="sodt" type="text" autofocus="" value="">
							</div>

							<div class="form-group">
								<h>Địa chỉ</h>
								<input required class="form-control" placeholder="Nhập địa chỉ" name="diachi" type="text" autofocus="" value="">
							</div>
							<input name="submit" type="submit" value="Đăng Ký" class="btn btn-primary">
							
						</fieldset>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div>	


                </div>
            </div>
        </div>
 </section>
@stop