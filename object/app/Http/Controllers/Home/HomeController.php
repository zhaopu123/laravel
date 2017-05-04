<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载首页
        //查询友情链接
        $link = DB::table('link')->get();
        //查询网站配置
        $set = DB::table('set')->where('id',5)->get();
        //获取分类信息
        $ob = DB::table('cate')->get();
        //获取分类下的商品
        foreach ($ob as $k => $v) {
            $list = DB::table('product')->where('cid',$v->id)->limit(4)->get();
            $v->path = $list;
        }
        //设置轮播图
        $pic = DB::table('notice')->get();
        $dd= DB::table('product')->where('cid','=','11')->get();
        //加载页面
        return view('Home.index',['ob' => $ob,'pic'=> $pic,'dd'=>$dd,'link'=>$link,'set'=>$set]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
