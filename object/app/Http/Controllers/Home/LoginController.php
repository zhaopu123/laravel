<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Model\Usertwo;

class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('Home.Login.login');
    }
    public function dologin(Request $request)
    {
        // dd($request);
        // $mycode = session('mycode');
        // if($request->input('mycode') != $mycode){
        //     return back()->with('msg','登录失败:验证码有误');
        // }
        $user = new Usertwo();
        $ob = $user->checkUser($request);
        if($ob){
        	session(['adminuser' => $ob]);
        	return redirect('/home/index');
        }else{
            return back()->with('msg','登录失败');
        }
    }
    // public function captcha($tmp)
    // {
    //     $builder = new CaptchaBuilder;
    //     $builder->build();
    //     $data = $builder->getphrase();
    //     // header('content-type:image/jpeg');
    //     session()->flash('mycode',$data);
    //     // $builder->output();die;
    //     return response($builder->output())->header('content-type','image/jpeg');
    // }
    public function over()
    {
        session()->forget('adminuser');
        return redirect('/home/index');
    }
}
