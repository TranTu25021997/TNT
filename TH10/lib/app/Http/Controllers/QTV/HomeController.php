<?php

namespace App\Http\Controllers\QTV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    //
    public function getHome()
    {
    	return view('back-end.index');
    }
    public function getDangXuat()
    {
    	Auth::logout();
    	return redirect()->intended('dangnhap');
    }
}
