<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

use App\Http\Controllers\Upload\UploadController;

use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
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
        $ob = DB::table('product');
        //判断是否有搜索条件
        if($request->has('pname')){
            //获取搜索的条件
            $pname = $request->input('pname');
            //添加到将要携带到分页中的数组中
            $where['pname'] = $pname;
            //给查询添加where条件
            $ob->where('pname','like',"%{$pname}%");
        }
        //执行分页查询
        $list = $ob->join('cate','cate.id','=','product.cid')->select('product.*','cate.name')->paginate(5);
        return view('Admin.Product.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示加载页面
        $list = DB::table('cate')->select('id','name')->get();
        return view('Admin.Product.add',['list'=>$list]);
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
            'pname' => 'required',
        ],$this->messages());
        //获取要添加的数据
        $data = $request->except('_token');
        //上传图片
        $ob = new UploadController();
        $data['pic'] = $ob->doupload($request);
        //缩放图片
        $img = Image::make('./Admin/upload/'.$data['pic']);
        $img->resize(350, 350, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save('./Admin/upload/s_'.$data['pic']);

        //密码加密
        $data['atime'] = time();
        //执行添加
        $id = DB::table('product')->insertGetId($data);
        //判断是否添加成功
        if($id > 0){
            return redirect('/admin/product')->with('info','添加成功');
        }
    }
    public function messages()
    {
        //自定义错误信息
        return [
            'pname.required' => '商品名必须填写',
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
        //关联查询分类信息
        $list = DB::table('cate')->select('id','name')->get();
        $data = DB::table('product')->where('id',$id)->first();
        return view('Admin.Product.edit',['ob'=>$data,'list'=>$list]);
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
        //缩放图片
        $img = Image::make('./Admin/upload/'.$data['pic']);
        $img->resize(350, 350, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save('./Admin/upload/s_'.$data['pic']);
        //执行修改
        $row = DB::table('product')->where('id',$id)->update($data);
        //判断修改是否成功
        if($row > 0){
            return redirect('/admin/product')->with('info','修改成功');
        }else{
            return redirect('/admin/product')->with('error','修改失败');
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
        $row = DB::table('product')->where('id',$id)->delete();
        //判断删除是否成功
        if($row > 0){
            return redirect('/admin/product')->with('info','删除成功');
        }else{
            return redirect('/admin/product')->with('error','删除失败');
        }
    }
}
