<?php

namespace App\Http\Controllers\QTV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoaiGiay;
use App\Http\Requests\ThemLoaiRequest;
use App\Http\Requests\EditLoaiRequest;

class LoaiGiayController extends Controller
{
    //
    public function getLoaiGiay()
    {
    	$data['loailist']= LoaiGiay::all();
    	return view('back-end.loaigiay',$data);
    }
    public function postLoaiGiay(ThemLoaiRequest $request)
    {
    	$loaigiay = new LoaiGiay;
    	$loaigiay->loai_name = $request->name;
    	$loaigiay->loai_slug = str_slug($request->name);
    	$loaigiay -> save();
    	return back();
    }
    public function getEditLoaiGiay($id)
    {
    	$data['loai']= LoaiGiay::find($id);
    	return view('back-end.editloaigiay',$data);
    }
    public function postEditLoaiGiay(EditLoaiRequest $request,$id)
    {
    	$loaigiay = LoaiGiay::find($id);
    	$loaigiay->loai_name = $request->name;
    	$loaigiay->loai_slug = str_slug($request->name);
    	$loaigiay -> save();
    	return redirect()->intended('quantri/loaigiay');
    }
    public function getDeleteLoaiGiay($id)
    {
    	LoaiGiay::destroy($id);
    	return back();
    }
}
