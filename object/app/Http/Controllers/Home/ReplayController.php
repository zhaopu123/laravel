<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class ReplayController extends Controller
{
    //
    public function insert(Request $request)
    {
        //添加回复
        $data = $request->except('_token');
        //获取时间
        $data['atime'] = time();
        //获取回复人
        $data['uid'] = session('adminuser.id');
        //获取商品id
        $ob = DB::table('comment')->where('id',$data['coid'])->first();
        $data['pid'] = $ob->pid;
        $id = DB::table('replay')->insertGetId($data);
        return redirect("/home/info/{$data['pid']}");
    }
}
