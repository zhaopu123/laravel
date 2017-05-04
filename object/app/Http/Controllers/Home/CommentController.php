<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class CommentController extends Controller
{
    public function index($id)
    {
        //加载评论页
        //获取分类信息
        $cat = DB::table('cate')->get();
	    //查询友情链接
	    $ob = DB::table('link')->get();
	    //查询网站配置
	    $list = DB::table('set')->where('id',2)->get();
        //判断未登录跳转登录页面
        if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }
        //加载评论页面
        return view('Home.Sign.comment',['list'=>$list,'ob'=>$ob,'id'=>$id,'cat'=>$cat]);

    }
    public function insert(Request $request)
    {
        //添加评论
        $data = $request->except('_token');
        //获取时间
        $data['atime'] = time();
        $id = DB::table('comment')->insertGetId($data);
        return redirect("/home/info/{$data['pid']}");
    }
}
