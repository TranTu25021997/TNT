@extends('front-end.master')
@section('title','Khách Hàng')
@section('main')
<link rel="stylesheet" href="css/chitiet.css">
 <section class="new_arrivals_area section-padding-80 clearfix">
<div class="container">
	<div class="row">
				<div class="panel-body">
					<h2>Đăng Nhập</h2>
					<form role="form" method="post">
						<fieldset>
							 @include('errors.note')
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<input name="submit" type="submit" value="Đăng Nhập" class="btn btn-primary">
							
						</fieldset>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
@stop
