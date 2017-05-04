<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\Upload\UploadController;

use Intervention\Image\ImageManagerStatic as Image;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //我的个人信息
        //获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',2)->get();
        //查询个人信息
        $sign = DB::table('user')->where('name',session('adminuser.name'))->get();
        if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }
        return view('Home.Sign.person',['list'=>$list,'ob'=>$ob,'sign'=>$sign,'cat'=>$cat]);
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
        //执行修改
        $data = $request->except('_token','_method','oldpic');
        //上传图片
        $list = new UploadController();
        $data['pic'] = $list->doupload($request);
        //执行修改
        $row = DB::table('user')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            //如果修改的是当前登录用户 更新修改内容
            if(session('adminuser.id') == $id){
                //获取缺失的字段信息
                $data['id'] = $id;
                $data['pw'] = session('adminuser.pw');
                //更新缓存
                session(['adminuser' => $data]);
            }
            return redirect('/home/sign/person')->with('info','修改成功');
        }else{
            return redirect("/home/sign/person")->with('error','修改失败');
        }
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
