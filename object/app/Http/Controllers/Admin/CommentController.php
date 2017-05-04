<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CommentController extends Controller
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
        $ob = DB::table('comment');
        // dd($request);die;
        if($request->has('cont')){
            //获取搜索的条件
            $cont = $request->input('cont');
            // dd($content);die;
            //添加到将要携带到分页中的数组中
            $where['cont'] = $cont;
            //给查询添加where条件
            $ob->where('cont','like',"%{$cont}%");
        }

        //执行分页查询
        $list = $ob
            ->join('product', 'comment.pid', '=', 'product.id')
            ->join('user', 'comment.uid', '=', 'user.id')
            ->select('comment.*', 'product.pname', 'user.name')
            ->paginate(5);
        return view('Admin.Comment.index',['list'=>$list,'where'=>$where]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加页面
        return view('Admin.Comment.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //执行添加页面
        //添加条件限制
        $this->validate($request, [
            'content' => 'required|max:8',
            'age' => 'integer|max:150|min:18',
        ],$this->messages());
        //获取要添加的数据
        $data = $request->except('_token');
        $data['atime'] = time();
        //执行添加
        $id = DB::table('comment')->insertGetId($data);
        //判断是否添加成功
        if($id>0){
            return redirect('admin/comment')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        //自定义错误信息
        return [
            'content.required' => '用户名必须填写',
            'age.min' => '未满18周岁禁止注册',
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
        $data = DB::table('Comment')->where('id',$id)->first();
        return view('Admin.Comment.edit',['ob'=>$data]);
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
        //获取要修改的数据
        $data = $request->only('cont');
        //执行修改语句
        $row = DB::table('Comment')->where('id',$id)->update($data);
        //判断是否修改成功
        if($row>0){
            return redirect('admin/comment')->with('msg','修改成功');
        }else{
            return redirect('admin/comment')->with('error','修改失败');
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
        $row = DB::table('Comment')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('admin/comment')->with('msg','删除成功');
        }else{
            return redirect('admin/comment')->with('error','删除失败');
        }
    }
}

