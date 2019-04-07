<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giay;
use App\Models\Loaigiay;
use App\Models\Binhluan;
use App\Models\Khachhang;
use Auth;
class FrontendController extends Controller
{
    //
    public function getHome(){
    	$data['hot'] = Giay::orderBy('giay_id','desc')->take(10)->get();
    	$data['new'] = Giay::where('tinhtrang','hot')->orderBy('giay_id','desc')->take(10)->get();
		return view('front-end.index',$data);
    }
    public function getChitiet($id){
    	$datag['ct'] = Giay::find($id) ;
        $datag['bls'] = Binhluan::where('bl_giay',$id)->get();
    	return view('front-end.chitiet',$datag);
    }
    public function getLoaiGiay($id){
    	$data['cts'] = Giay::where('giay_loai',$id)->orderBy('giay_id','desc')->paginate(16);
    	return view('front-end.loaigiay',$data);
    }
    public function postBinhluan(Request $request,$id){
        $binhluan = new Binhluan;
        $binhluan->bl_email = $request->email;
        $binhluan->bl_name = $request->name;
        $binhluan->bl_noidung = $request->content;
        $binhluan->bl_giay = $id;
        $binhluan->save();
        return back();

    }
    public function getSearch(Request $request){
        $result =$request->result;
        $data['tukhoa'] = $request;
        $result = str_replace(' ','%',$result);
        $data['sea'] = Giay::where('tengiay','like','%'.$result.'%')->get();
        return view('front-end.search', $data);
    }
    public function getDangKy(){
        return view('front-end.dangky');
    }
    public function postDangKy(Request $request){
        $this->validate($request,[
            'ten' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'sodt' => 'required|max:11',
            'diachi' =>'required|min:5'
        ],[
            'ten.required'=>'Bạn chưa nhập tên.',
            'ten.min'=>'tên phải có ít nhất 3 ký tự.',
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email.',
            'email.unique'=>'Email đã tồn tại.',
            'password.required'=>'Bạn chưa nhập mật khẩu.',
            'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu nhiều nhất là 32 ký tự.',
            'sodt.required'=>'Bạn chưa nhập số điện thoại',
            'sodt.max' =>'Số điện thoại không dài quá 11 số',
            'diachi.required'=>'Bạn chưa nhập địa chỉ',
            'diachi.min'=>'Địa chỉ phải hơn 5 ký tự'
        ]);
        $khachhang = new Khachhang;
        $khachhang ->tenkh = $request ->ten;
        $khachhang ->email = $request ->email;
        $khachhang ->password =md5($request->password);
        $khachhang ->sodt = $request->sodt;
        $khachhang ->diachi = $request ->diachi;
        $khachhang ->save();
        return redirect('dangnhapkh')->with('error','Bạn đã tạo tài khoản thành công!Hãy đăng nhập tài khoản của mình!');
    }

    public function getDangNhapKH(){
        return view('front-end.dangnhapkh');
    }
    public function postDangNhapKH(Request $request){
        $arr = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($arr)){
            return redirect()->intended('/');
        }else{
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu chưa đúng!');
        }

    }
}

