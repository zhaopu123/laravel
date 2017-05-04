<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class InfoController extends Controller
{
	public function index($id)
	{
		//加载详情页
		//获取分类信息
        $cate = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',3)->get();
        //查询商品信息
        $pro = DB::table('product')
	        ->join('cate', 'product.cid', '=', 'cate.id')
	        ->select('product.*','cate.name')
	        ->where('product.id',$id)
	        ->get();
	    $cm = DB::table('comment')
	        ->join('product','product.id','=','comment.pid')
	        ->join('user','user.id','=','comment.uid')
	        ->select('comment.*','user.pic','user.name')
	        ->where('product.id',$id)
	        ->paginate(3);
	    $rp = DB::table('replay')
	        ->join('product','product.id','=','replay.pid')
	        ->join('user','user.id','=','replay.uid')
	        ->join('comment','comment.id','=','replay.coid')
	        ->select('replay.*','user.pic','user.name')
	        ->where('product.id',$id)
	        ->orderby('atime','desc')
	        ->limit(3)
	        ->get();
        return view('Home.Info.info',['cate'=>$cate,'list'=>$list,'ob'=>$ob,'pro'=>$pro,'cm'=>$cm,'rp'=>$rp]);
	}
	public function insert(Request $request,$pnum)
	{
	// 	if(session('adminuser.id') == null){
	// 		return redirect('/home/login/index');
	// 	}
 //        //添加进订单
 //        $data = $request->except('_token');
 //        //获取时间
 //        $data['atime'] = time();
 //        //添加数量
 	      
 //        //添加状态
 //        $data['state'] = 0;
 //        //添加用户
 //        $data['uid'] = session('adminuser.id');
 //        //执行添加
 //        $id = DB::table('order')->insertGetId($data);
       // return redirect('/home/shopcart');
		$data = $request->except('_token');

		$where = array('pid' => $data['pid'], 'uid' => session('adminuser.id'));
		$cart = DB::table('cart')->select('*')->where($where)->first();

		if(empty($cart)){
			$data['pnum'] = $pnum;
			$data['atime'] = time();
			$data['uid'] = session('adminuser.id');
			$id = DB::table('cart')->insertGetId($data);

		}else{
			$where = array('id' => $cart->id);
			$data['pnum'] = $cart->pnum + $pnum;
			$id = DB::table('cart')->where($where)->update($data);
		}

		
		return redirect('/home/shopcart');
	}
}
