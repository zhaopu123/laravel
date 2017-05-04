<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
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
        $ob = DB::table('order');
  
        if($request->has('oid')){
            //获取搜索的条件
            $oid = $request->input('oid');
            //添加到将要携带到分页中的数组中
            $where['oid'] = $oid;
            //给查询添加where条件
            $ob->where('oid','like',"%{$oid}%");
        }
        //执行分页查询,关联查询
         $list = $ob
            ->join('product', 'order.pid', '=', 'product.id')
            ->join('user', 'order.uid', '=', 'user.id')
            ->join('addr', 'order.aid', '=', 'addr.id')
            ->select('order.*', 'product.pname', 'user.name', 'addr.aname', 'addr.uphone', 'addr.uaddress')
            ->paginate(5);
       
        return view('Admin.Order.index',['list'=>$list,'where'=>$where]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //显示添加页面
        return view('Admin.Order.add');
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
            'uname' => 'required|max:8',
          //  'uphone' => 'integer|max:12',
        ],$this->messages());
        //获取要添加的数据
        $data = $request->except('_token');
        $data['atime'] = time();
        //执行添加
        $id = DB::table('Order')->insertGetId($data);
        //判断是否添加成功
        if($oid>0){
            return redirect('admin/order')->with('msg','添加成功');
        }
    }

    public function messages()
    {
        //自定义错误信息
        return [
            'uname.required' => '姓名必须填写',
           // 'uphone.max' => '手机号为11位',
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($oid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($oid)
    {
        //加载修改页面
        $data = DB::table('Order')->where('oid',$oid)->first();
        return view('Admin.Order.edit',['ob'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $oid)
    {
        //执行修改
        $data = $request->only('uid');
        $data['state'] =2;
        //执行修改语句
        $row = DB::table('Order')->where('oid',$oid)->update($data);
        //判断是否成功
        if($row>0){
            return redirect('admin/order')->with('msg','发货成功');
        }else{
            return redirect('admin/order')->with('error','发货失败');
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
        $row = DB::table('Order')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('admin/order')->with('msg','删除成功');
        }else{
            return redirect('admin/order')->with('error','删除失败');
        }
    }
}