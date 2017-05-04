<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //
    public function index()
    {
        //加载登录界面
    	return view('Admin.login');
    }
    public function dologin(Request $request)
    {
        //获取验证码
        $mycode = session('mycode');
        //判断接受的验证码是否与原验证码一致
        if($request->input('mycode') != $mycode){
            return back()->with('msg','登录失败:验证码有误');
        }
        //验证登录用户和密码是否正确
        $user = new User();
        $ob = $user->checkUser($request);
        //如果正确，存入缓存；失败则返回登录界面
        if($ob){
        	session(['adminusers' => $ob]);
        	return redirect('/admin/index');
        }else{
            return back()->with('msg','登录失败');
        }
    }
    public function captcha($tmp)
    {
        //实例化验证码类
        $builder = new CaptchaBuilder;
        //创建验证码
        $builder->build();
        //存储验证码
        $data = $builder->getphrase();
        // header('content-type:image/jpeg');
        session()->flash('mycode',$data);
        // $builder->output();die;
        //高速浏览器以图片的形式输出
        return response($builder->output())->header('content-type','image/jpeg');
    }
    public function over()
    {
        //登出
        //删除缓存
        session()->forget('adminusers');
        //重定向到登录页面
        return redirect('/admin/login');
    }
}
