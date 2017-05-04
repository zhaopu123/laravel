<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\Upload\UploadController;

use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
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
        $ob = DB::table('user');
        if($request->has('sex')){
            $sex = $request->input('sex');
            $where['sex'] = $sex;
            $ob->where('sex',$sex);
        }
        if($request->has('name')){
            //获取搜索条件
            $name = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $name;
            //给查询添加where条件
            $ob->where('name','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(5);
        return view('Admin.User.index',['list'=>$list,'where'=>$where]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('Admin.User.add');
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
            'name' => 'bail|required|between:8,12|alpha_dash',
            'pw' => 'bail|required|between:8,12|alpha_num',
            // 'pic' => 'bail|file|image',
            // 'age' => 'integer|min:1',
            // 'email' => 'email',
            // 'phone' => 'size:11',
            // 'sign' => 'max:100',
        ],$this->messages());
        //获取要添加的数据
        $data = $request->except('_token');
        //上传图片
        $ob = new UploadController();
        $data['pic'] = $ob->doupload($request);
        //密码加密
        $data['pw'] = md5($data['pw']);
        $data['rtime'] = time();
        //执行添加
        $id = DB::table('user')->insertGetId($data);
        //判断是否添加成功
        if($id > 0){
            return redirect('/admin/user')->with('info','添加成功');
        }
    }
    public function messages()
    {
        //自定义错误信息
        return [
            'name.required' => '用户名必须填写',
            'name.between' => '用户名必须为8到12位',
            'name.alpha_dash' => '用户名必须为数字字母-_',
            'pw.required' => '密码必须填写',
            'pw.between' => '密码必须为8到12位',
            'pw.alpha_num' => '密码必须为数字字母',
            // 'pic.file' => '文件上传失败',
            // 'pic.image' => '头像必须为jpg等图片样式',          
            // 'age.integer' => '年龄需要整数',
            // 'age.min' => '年龄不能低于1周岁',
            // 'email.email' => '请输入正确的邮箱格式',
            // 'phone.size' => '电话为11位',
            // 'sign.max' => '美丽宣言最多100字',
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
        $data = DB::table('user')->where('id',$id)->first();
        return view('Admin.User.edit',['ob'=>$data]);
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
        // $this->validate($request, [
        //     'name' => 'bail|required|between:8,12|alpha_dash',
        //     'pw' => 'bail|required|between:8,12|alpha_num',
        //     'pic' => 'bail|file|image',
        //     'age' => 'integer|min:1',
        //     'email' => 'email',
        //     'phone' => 'size:11',
        //     'sign' => 'max:100',
        // ],$this->messages());
        $data = $request->except('_token','_method','oldpic');
        //上传图片
        $list = new UploadController();
        $data['pic'] = $list->doupload($request);
        //执行修改语句
        $row = DB::table('user')->where('id',$id)->update($data);
        //判断修改是否成功
        if($row > 0){
            return redirect('/admin/user')->with('info','修改成功');
        }else{
            return redirect('/admin/user')->with('error','修改失败');
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
        $row = DB::table('user')->where('id',$id)->delete();
        //判断删除是否成功
        if($row > 0){
            return redirect('/admin/user')->with('info','删除成功');
        }else{
            return redirect('/admin/user')->with('error','删除失败');
        }
    }
}
