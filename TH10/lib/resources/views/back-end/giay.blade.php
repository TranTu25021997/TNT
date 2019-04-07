	@extends('back-end.master')
	@section('title','Danh sách')
	@section ('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách sản phẩm</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('quantri/giay/add')}}" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width="20%">Tên Sản phẩm</th>
											<th>Giá sản phẩm</th>
											<th width="10%">Ảnh sản phẩm</th>
											<th>Danh mục</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@foreach($giaylist as $giay)
										<tr>
											<td>{{$giay->giay_id}}</td>
											<td>{{$giay->tengiay}}</td>
											<td>{{number_format($giay->gia,0,',','.')}} VND</td>
											<td>
												<img height="100px" src="{{asset('lib/storage/app/avatar/'.$giay->hinh)}}" class="thumbnail">
											</td>
											<td>{{$giay->loai_name}}</td>
											<td>
												<a href="{{asset('quantri/giay/edit/'.$giay->giay_id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{{asset('quantri/giay/delete/'.$giay->giay_id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@stop
	