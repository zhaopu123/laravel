<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;

use DB;

use App\Http\Controllers\Upload\UploadController;


class RegisterController extends Controller
{
    //
    public function index()
    {
    	return view('home.register');
    }

    public function doregister(Request $request)
    {
    	// dd($request);
    	$this->validate($request, [
            'name' => 'bail|required|between:8,12|alpha_dash',
            'pw' => 'bail|required|between:8,12|alpha_num',
        ],$this->messages());

    	$name = DB::table('user')->where('name',$request->input('name'))->first();
    	if($name){
    		 return back()->with('fff','用户名已存在');
    	}

    	$mycode = session('mycode');
        if($request->input('mycode') != $mycode){
            return back()->with('msg','登录失败:验证码有误');
        }

    	$data = $request->only('name','pw');
    	// dd($data);
    	$data['pw'] = md5($request->input('pw')) ;
        $data['rtime'] = time();
    	$res = DB::table('user')->insertGetId($data);

    	return redirect('/home/login/index');
     	// return view('Home.Login.login');
    }

     public function messages()
    {
        return [
            'name.required' => '用户名必须填写',
            'name.between' => '用户名必须为8到12位',
            'name.alpha_dash' => '用户名必须为数字字母-_',
            'pw.required' => '密码必须填写',
            'pw.between' => '密码必须为8到12位',
            'pw.alpha_num' => '密码必须为数字字母',
        ];
    }
}