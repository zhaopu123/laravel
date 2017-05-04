<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
    //
    public function index($id)
    {
    	//我的订单
        //获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',2)->get();
        //查询订单信息
        $per = DB::table('order');
        if ($id != 0) {
            $per = $per->where('order.state',$id-1);
        }
        $person = $per->join('product', 'order.pid', '=', 'product.id')
            ->join('user', 'order.uid', '=', 'user.id')
            ->select('order.*','product.pname','product.pic','user.id')
            ->where('name',session('adminuser.name'))
            ->paginate(3);
        //判断未登录跳转登录页面
        if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }
        //加载我的订单
        return view('Home.Sign.order',['list'=>$list,'ob'=>$ob,'person'=>$person,'id'=>$id,'cat'=>$cat]);
    }
    public function delete($id)
    {
        //删除订单
        $row = DB::table('order')->where('oid',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('/home/sign/order/0')->with('msg','删除成功');
        }else{
            return redirect("/home/sign/order/0")->with('msg','删除失败');
        }
    }
}
