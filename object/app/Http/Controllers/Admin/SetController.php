<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\Upload\UploadController;

use Intervention\Image\ImageManagerStatic as Image;

class SetController extends Controller
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
        $ob = DB::table('set');
        
        if($request->has('title')){
            //获取搜索的条件
            $title = $request->input('title');
            //添加到将要携带到分页中的数组中
            $where['title'] = $title;
            //给查询添加where条件
            $ob->where('title','like',"%{$title}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        return view('Admin.Set.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加页面
        return view('Admin.Set.add');
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
        //添加条件判断
        $this->validate($request, [
            'title' => 'required',
        ],$this->messages());
        //获取要添加的数据
        $data = $request->except('_token');
        //上传图片
        $ob = new UploadController();
        $data['pic'] = $ob->doupload($request);
        //执行添加
        $id = DB::table('Set')->insertGetId($data);
        //判断添加是否成功
        if($id>0){
            return redirect('admin/set')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        //自定义错误信息
        return [
            'title.required' => '标题必须填写',
        ];
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
        $data = DB::table('set')->where('id',$id)->first();
        return view('Admin.Set.edit',['ob'=>$data]);
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
        //执行修改页面
        $data = $request->only('title','keywords','copy','kg','pic');
        //上传图片
        $list = new UploadController();
        $data['pic'] = $list->doupload($request);
        //执行修改
        $row = DB::table('set')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            return redirect('admin/set')->with('msg','修改成功');
        }else{
            return redirect('admin/set')->with('error','修改失败');
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
        $row = DB::table('set')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('admin/set')->with('msg','删除成功');
        }else{
            return redirect('admin/set')->with('error','删除失败');
        }
    }
}
