<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('link');
        //判断是否有搜索条件
        if($request->has('url')){
            //获取搜索的条件
            $url = $request->input('url');
            //添加到将要携带到分页中的数组中
            $where['url'] = $url;
            //给查询添加where条件
            $ob->where('url','like',"%{$url}%");
        }
        if($request->has('name')){
            //获取搜索的条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(3);
        return view('Admin.link.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('Admin.link.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //执行添加
        //获取要添加的数据
        $data = $request->only('name','url');
        //执行添加
        $res=DB::table('link')->insertGetId($data);
        //判断是否添加成功
        if($res>0){
            return redirect('/admin/link')->with('info','添加成功');
        }
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
        //加载修改页面
        $row = DB::table('link')->where('id','=',$id)->first();
        return view('Admin.link.edit',['ob'=>$row]);
       
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
        $data = $request->only('name','url');
        //执行修改语句
        $row = DB::table('link')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            return redirect('/admin/link')->with('info','修改成功');
        }else{
            return redirect("/admin/link/{$id}/edit")->with('info','修改失败');
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
        //删除数据
        $row = DB::table('link')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('/admin/link')->with('info','删除成功');
        }else{
            return redirect("/admin/link")->with('info','删除失败');
        }
    }
}
