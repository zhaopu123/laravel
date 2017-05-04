<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class PassController extends Controller
{
    public function index()
    {
        //修改密码
        //获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',2)->get();
        if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }
        return view('Home.Sign.pass',['list'=>$list,'ob'=>$ob,'cat'=>$cat]);
    }
    
    public function update(Request $request, $id)
    {
        //执行修改
        $data = $request->except('_token','_method');
        $data['oldpass'] = md5($data['oldpass']);
        $data['pass'] = md5($data['pass']);
        $data['repass'] = md5($data['repass']);
        $ob = DB::table('user')->where('id',$id)->first();
        if ($data['oldpass'] != $ob->pw) {
        	return redirect("/home/sign/pass")->with('info','原密码输入错误');
        }elseif ($data['pass'] == $data['oldpass']) {
        	return redirect("/home/sign/pass")->with('info','和原密码相同');
        }elseif ($data['repass'] != $data['pass']) {
        	return redirect("/home/sign/pass")->with('info','重复密码和原密码不一致');
        }
        $row = DB::table('user')->where('id',$id)->update(['pw'=>$data['pass']]);
        if($row>0){
            return redirect('/home/login/index');
        }else{
            return redirect("/home/sign/pass")->with('error','修改失败');
        }
    }
}
