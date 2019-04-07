<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giay;
use App\Cart;
use Session;

class CartController extends Controller
{
	public function getAddCart( Request $request,$id){
		$giay = Giay::find($id);
		$oldCart = Session('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->add($giay, $id);
		$request->session()->put('cart', $cart);
		return back();
		// return view('front-end.cart');
	}

	public function getDeleteCart($id){

	}
}
