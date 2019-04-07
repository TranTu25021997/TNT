<?php

namespace App\Http\Controllers\QTV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class DangNhapController extends Controller
{
    //
    public function getDangNhap(){
    	return view('back-end.dangnhap');
    }

    public function postDangNhap(Request $request){
    	$arr = ['email' => $request->email, 'password' => $request->password];
        if ($request ->remember = 'Remember Me'){
            $remember = true;
        }else
        {
            $remember = false;
        }

    	if (Auth::attempt($arr,$remember)){
    		return redirect()->intended('quantri/home');
    	}else{
    		return redirect()->back()->with('error','Tài khoản hoặc mật khẩu chưa đúng!');
    	}
    }
}
