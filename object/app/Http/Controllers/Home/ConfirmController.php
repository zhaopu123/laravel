<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class ConfirmController extends Controller
{
    //确认收货
    public function index($id)
    {
        //修改订单信息
        $row = DB::table('order')->where('oid',$id)->update(['state' => 3]);
        //加载我的订单
        return redirect('/home/sign/order/0');
    }
}
