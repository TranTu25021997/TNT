<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\LoaiGiay;
use App\Cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['loaigiay'] = LoaiGiay::all();
        view()->share($data);
        Schema::defaultStringLength(191); 
        view()->composer(['cart'],function($view){
         if(Session('cart')){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            $view->with(['cart'=>Session::get('cart'),'giay_cart'=>$cart->items,
            'totalPrice'=>$cart->totalPrice,'totalQly'=>$cart->totalQty]);
        }
    });
    }
}