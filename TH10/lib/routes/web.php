<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('',[
// 	'as'=>'home',
// 	'uses'=>'HomeController@getIndex'
// ]);
Route::get('/','FrontendController@getHome');
Route::get('chitiet/{id}/{slug}.html','FrontendController@getChitiet');
Route::post('chitiet/{id}/{slug}.html','FrontendController@postBinhluan');
Route::get('dangky','FrontendController@getDangKy');
Route::post('dangky','FrontendController@postDangKy');
Route::get('dangnhapkh','FrontendController@getDangNhapKH');
Route::post('dangnhapkh','FrontendController@postDangNhapKH');


Route::get('loaigiay/{id}/{slug}.html','FrontendController@getLoaiGiay');
Route::get('search','FrontendController@getSearch');

Route::group(['prefix'=>'cart'], function(){
	Route::get('add/{id}','CartController@getAddCart');
	Route::get('delete/{id}','CartController@getDeleteCart');
});




Route::group(['namespace'=>'QTV'], function(){
	Route::group(['prefix'=>'dangnhap', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('/','DangNhapController@getDangNhap');
		Route::post('/','DangNhapController@postDangNhap');
		
	});

	Route::get('logout','HomeController@getDangXuat');

	Route::group(['prefix'=>'quantri', 'middleware'=>'ChecklogedOut'], function(){
		Route::get('home','HomeController@getHome');

		Route::group(['prefix'=>'loaigiay'], function(){
			Route::get('/','LoaiGiayController@getLoaiGiay');
			Route::post('/','LoaiGiayController@postLoaiGiay');

			Route::get('edit/{id}','LoaiGiayController@getEditLoaiGiay');
			Route::post('edit/{id}','LoaiGiayController@postEditLoaiGiay');

			Route::get('delete/{id}','LoaiGiayController@getDeleteLoaiGiay');
			});

		Route::group(['prefix'=>'giay'], function(){
			Route::get('/','GiayController@getGiay');

			Route::get('add','GiayController@getAddGiay');
			Route::post('add','GiayController@postAddGiay');
			
			Route::get('edit/{id}','GiayController@getEditGiay');
			Route::post('edit/{id}','GiayController@postEditGiay');

			Route::get('delete/{id}','GiayController@getDeleteGiay');
			});
		});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
