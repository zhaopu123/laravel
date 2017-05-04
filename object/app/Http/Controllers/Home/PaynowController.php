<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class PaynowController extends Controller
{
    //立即购买
    public function insert(Request $request,$pnum)
    {
    	//获取添加信息
        $params = $request->except('_token');
        $params['sum'] = $pnum;
        $params['total'] = $pnum * $params['money'];
        $params['uid'] = session('adminuser.id');
        $params['state'] = 0;
        $params['atime'] = time();
         if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }
        //执行添加
        $row = DB::table('order')->insertGetId($params);
        //加载支付页
        return redirect('/home/pay');
    }
}
