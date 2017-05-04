<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class SearchController extends Controller
{
    //加载搜素页
    public function index(Request $request)
    {
    	//获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',4)->get();
        //保存搜索条件
        $where = '';
        //实例化对象
        $product = DB::table('product');
        if ($request->has('search')) {
        	// 获取搜索条件
            $search = $request->input('search');
            //添加到将要携带到分页中的数组中
            $where['search'] = $search;
            //给查询添加where条件
            $product->where('pname','like',"%{$search}%");
        }
        //查询商品总数
        $total = $product->get();
        //获取搜索结果
        $pro = $product->paginate(4);
        return view('Home.Search.Search',['list'=>$list,'ob'=>$ob,'pro'=>$pro,'total'=>$total,'where'=>$where,'cat'=>$cat]);
    }
}
