<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class ListController extends Controller
{
    //加载列表页
    public function index(Request $request,$id)
    {
    	//获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',4)->get();
        //查询商品总数
        $total = DB::table('product')->where('cid',$id)->get();
        //查询分类名
        $cate = DB::table('cate')->where('id',$id)->first();
        //保存搜索条件
        $where = '';
        //关联查询商品
        $product = DB::table('product')->where('cid',$id);
        if ($request->has('search')) {
        	// 获取搜索条件
            $search = $request->input('search');
            //添加到将要携带到分页中的数组中
            $where['search'] = $search;
            //给查询添加where条件
            $product->where('pname','like',"%{$search}%");
        }
        $pro = $product->paginate(4);
    	return view('Home.List.index',['cat'=>$cat,'list'=>$list,'ob'=>$ob,'pro'=>$pro,'total'=>$total,'where'=>$where,'cate'=>$cate]);
    }
}
