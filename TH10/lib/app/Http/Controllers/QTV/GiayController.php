<?php

namespace App\Http\Controllers\QTV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddGiayRequest;
use App\Models\Giay;
use App\Models\LoaiGiay;
use DB;
class GiayController extends Controller
{
    //
    public function getGiay(){
        $data['giaylist']= DB::table('giay')->join('loaigiay', 'giay.giay_loai','=', 'loaigiay.loai_id')->orderBy('giay_id','desc')->get();
    	return view('back-end.giay',$data);
    }
    public function getAddGiay(){
         $data['loaigiaylist']= LoaiGiay::all();
    	return view('back-end.addgiay',$data);
    }
    public function postAddGiay(AddGiayRequest $request){
        $giay = new Giay;
        $filename = $request->img->getClientOriginalName();
        $giay->tengiay =$request->name;
        $giay->slug = str_slug($request->name);
        $giay->gia =$request->price;
        $giay->hinh =$filename;
        $giay->soluong =$request->soluong;
        $giay->trangthai =$request->status;
        $giay->tinhtrang =$request->condition;
        $giay->khuyenmai =$request->promotion;
        $giay->mota =$request->description;
     
        $giay->giay_loai=$request->cate;
        $giay->save();
        $request->img->storeAs('avatar', $filename);
        return back();
    }
    public function getEditGiay($id){
        $data['giay'] = Giay::find($id);
        $data['loaigiaylist'] = LoaiGiay::all();
    	return view('back-end.editgiay',$data);

    }
    public function postEditGiay(Request $request,$id){
        $giay = new Giay;
        $arr['tengiay']= $request->name;
        $arr['slug']= str_slug($request->name);
        $arr['gia'] = $request->price;
        $arr['soluong'] =$request->soluong;
        $arr['trangthai'] =$request->status;
        $arr['tinhtrang'] =$request->condition;
        $arr['khuyenmai'] =$request->promotion;
        $arr['mota'] =$request->description;
        
        $arr['giay_loai']=$request->cate;
        if ($request->hasFile('img')) {
           $img = $request->img->getClientOriginalName();
            $arr['hinh']= $img;
            $request->img->storeAs('avatar'.$img);
        }

        $giay::where('giay_id',$id)->update($arr);
        return redirect('quantri/giay');

    }
    public function getDeleteGiay($id){
        Giay::destroy($id);
        return back();


    }
}
