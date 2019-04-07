@extends('front-end.master')
@section('title','Chi tiết')
@section('main')
<div class="inner-header">
     
    
    <div class="container">
        <div id="content">
            
            <form action="dangky" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                     
                        </div>
                                @endif
                    @if(Session::has('thongbao'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                    @endif
                    <div class="col-sm-6">
                        <h4>Đăng kí</h4>
                        <div class="space20">&nbsp;</div>

                        
                        <div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="form-block">
                            <label for="your_last_name">Fullname*</label>
                            <input type="text" name="fullname" required>
                        </div>

                        <div class="form-block">
                            <label for="adress">Address*</label>
                            <input type="text" name="adress" value="Street Address" required>
                        </div>


                        <div class="form-block">
                            <label for="phone">Phone*</label>
                            <input type="text" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Password*</label>
                            <input type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Re password*</label>
                            <input type="password" name="re_password" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary">Đăng kí</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> 
    @stop