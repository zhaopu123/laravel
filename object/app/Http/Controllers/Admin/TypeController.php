<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('cate');
        //判断是否有搜索条件
        if($request->has('name')){
            //获取搜索的条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        return view('Admin.Type.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加页面
        return view('Admin.Type.add');
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
        //自定义错误信息
        $message = [
            'name.required' => '类别名必须填写',
            'name.max' => '类别名不能超过10',
        ];
        //添加条件限制
        $this->validate($request, [
            'name' => 'bail|required|max:10',
        ],$message);
        //获取要添加的数据
        $data = $request->except('_token');
        //执行添加
        $id = DB::table('cate')->insertGetId($data);
        //判断添加是否成功
        if($id>0){
            return redirect('/admin/type')->with('info','添加成功');
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
        $data = DB::table('cate')->where('id',$id)->first();
        return view('Admin.Type.edit',['ob'=>$data]);
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
        //获取修改数据
        $data = $request->only('name');
        //执行修改语句
        $row = DB::table('cate')->where('id',$id)->update($data);
        //判断修改是否成功
        if($row>0){
            return redirect('admin/type')->with('info','修改成功');
        }else{
            return redirect('admin/type')->with('error','修改失败');
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
        //获取分类下的子类
        $list = DB::table('cate')->where('ord',$id)->get();
        //判断是否存在子类，若存在不能删除
        if(count($list)>0){
            return redirect('admin/type')->with('error','要删除此类必须先删除此类下的子类');
        }
        //执行删除
        $row = DB::table('cate')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('admin/type')->with('info','删除成功');
        }else{
            return redirect('admin/type')->with('error','删除失败');
        }
    }
    public function createSon($id)
    {
        //添加子类
        $list = DB::table('cate')->where('id',$id)->first();
        return view('Admin.Type.addSon',['list' => $list]);
    }
    public function storeSon(Request $request)
    {
        //执行添加子类
        //获取要添加的子类数据
        $data = $request->except('_token');
        //拼接字段path
        $par = DB::table('cate')->where('id',$request->input('ord'))->first();
        $data['path'] = $par->path.','.$data['ord'];
        //执行添加子类
        $id = DB::table('cate')->insertGetId($data);
        //判断是否添加成功
        if($id>0){
            return redirect('admin/type')->with('info','添加子类成功');
        }

    }
}
