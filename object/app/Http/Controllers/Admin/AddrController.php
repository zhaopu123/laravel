<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class AddrController extends Controller
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
        $ob = DB::table('addr');
        if($request->has('aname')){
            //获取搜索的条件
            $name = $request->input('aname');
            //添加到将要携带到分页中的数组中
            $where['aname'] = $name;
            //给查询添加where条件
            $ob->where('aname','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob
            ->join('user', 'addr.uid', '=', 'user.id')
            ->select('addr.uid','addr.id','addr.uphone','addr.uaddress','addr.aname','user.name')
            ->paginate(3);
        return view('Admin.addr.index',['list'=>$list,'where'=>$where]);
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
        //加载修改页面
        $row = DB::table('addr')->where('id','=',$id)->first();
        return view('Admin.Addr.edit',['ob'=>$row]);
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
        $data = $request->only('aname','uaddress','uphone','uid');
        //执行修改语句
        $row = DB::table('addr')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            return redirect('/admin/addr')->with('info','修改成功');
        }else{
            return redirect("/admin/addr/{$id}/edit")->with('info','修改失败');
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
        $row = DB::table('addr')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('/admin/addr')->with('info','删除成功');
        }else{
            return redirect("/admin/addr")->with('info','删除失败');
        }
    }
}
