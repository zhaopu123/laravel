<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\Upload\UploadController;

use Intervention\Image\ImageManagerStatic as Image;

class AdmController extends Controller
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
        $ob = DB::table('admin');
        if($request->has('sex')){
            $sex = $request->input('sex');
            $where['sex'] = $sex;
            $ob->where('sex',$sex);
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
        $list = $ob->paginate(5);
        return view('Admin.adm.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('Admin.adm.add');
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
        //添加条件判断（问题：同时显示问题，图片上传大小限制）
        $this->validate($request, [
            'name' => 'bail|required|between:8,12|alpha_dash',
            'pw' => 'bail|required|between:8,12|alpha_num',
            // 'pic' => 'bail|image|max:2048',
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
        //执行添加
        $res = DB::table('admin')->insertGetId($data);
        // 判断是否添加成功
        if($res>0){
            return redirect('/admin/adm')->with('info','添加成功');
        }
    }
    
    public function messages()
    {
        //自定义错误信息
        return [
            'name.required' => '管理员名必须填写',
            'name.between' => '管理员名必须为8到12位',
            'name.alpha_dash' => '管理员名必须为数字字母-_',
            'pw.required' => '密码必须填写',
            'pw.between' => '密码必须为8到12位',
            'pw.alpha_num' => '密码必须为数字字母',
            // 'pic.image' => '文件类型必须是图片',
            // 'pic.max' => '文件大小最多2M',        
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
        $row = DB::table('admin')->where('id','=',$id)->first();
        return view('Admin.adm.edit',['ob'=>$row]);
       
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
        $row = DB::table('admin')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            //如果修改的是当前登录用户 更新修改内容
            if(session('adminusers.id') == $id){
                //获取缺失的字段信息
                $data['id'] = $id;
                $data['pw'] = session('adminusers.pw');
                //更新缓存
                session(['adminusers' => $data]);
            }
            return redirect('/admin/adm')->with('info','修改成功');
        }else{
            return redirect("/admin/adm")->with('error','修改失败');
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
        //删除内容
        $row = DB::table('admin')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('/admin/adm')->with('info','删除成功');
        }else{
            return redirect("/admin/adm")->with('error','删除失败');
        }
    }
}
