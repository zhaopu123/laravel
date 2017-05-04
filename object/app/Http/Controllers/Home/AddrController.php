<?php

namespace App\Http\Controllers\Home;

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
    public function index()
    {
        //我的个人信息
        //获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',2)->get();
        //查询收货地址
        $addr = DB::table('addr')
            ->join('user', 'addr.uid', '=', 'user.id')
            ->select('addr.uid','addr.id','addr.uphone','addr.uaddress','addr.aname','user.name')
            ->where('user.name',session('adminuser.name'))
            ->get();
        $info = DB::table('addr')
            ->join('user', 'addr.uid', '=', 'user.id')
            ->select('addr.uid','addr.id','addr.uphone','addr.uaddress','addr.aname','user.name')
            ->where('addr.aname',session('adminuser.name'))
            ->first();
        $total = DB::table('district')->where('upid',0)->get();
        //判断未登录跳转登录页面
        if(session('adminuser.name') == null){
            return redirect('/home/login/index');
        }        
        return view('Home.Sign.address',['list'=>$list,'ob'=>$ob,'addr'=>$addr,'info'=>$info,'cat'=>$cat,'total'=>$total]);
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
        //执行添加
        //获取要添加的数据
        $data = $request->except('_token','city','city1');
        $data1 = $request->only('city');
        $data2 = $request->only('city1');
        $list = DB::table('district')->where('id',$data1['city']['0'])->get();
        $a = $list[0]->name;
        foreach($data2['city1'] as $k => $v) {
            $info[$k] = DB::table('district')->where('id',$data2['city1'][$k])->get();
        }
        foreach($info as $b) {
            $a .= ' '.$b[0]->name;
        }
        $data['uaddress'] = $a;

        //执行添加
        $res=DB::table('addr')->insertGetId($data);
        //判断是否添加成功
        if($res>0){
            return redirect('/home/sign/addr')->with('msg','添加成功');
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
        //获取分类信息
        $cat = DB::table('cate')->get();
        //查询友情链接
        $ob = DB::table('link')->get();
        //查询网站配置
        $list = DB::table('set')->where('id',2)->get();
        //查询收货地址
        $addr = DB::table('addr')
            ->join('user', 'addr.uid', '=', 'user.id')
            ->select('addr.uid','addr.id','addr.uphone','addr.uaddress','addr.aname','user.name')
            ->where('user.name',session('adminuser.name'))
            ->get();
        $data = DB::table('addr')->where('id',$id)->first();
        return view('Home.Sign.address',['list'=>$list,'ob'=>$ob,'addr'=>$addr,'info'=>$data,'cat'=>$cat]);
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
        $data = $request->except('_token','_method');
        $row = DB::table('addr')->where('id',$id)->update($data);
        //判断修改是否成功
        if($row > 0){
            return redirect('/home/sign/addr')->with('msg','修改成功');
        }else{
            return redirect('/home/sign/addr')->with('msg','修改失败');
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
        if($row > 0){
            return redirect('/home/sign/addr')->with('msg','删除成功');
        }else{
            return redirect('/home/sign/addr')->with('msg','删除失败');
        }
    }
    public function getinfo($id)
    {
        //查询指定upid下的子类
        $total = DB::table('district')->where('upid',$id)->get();
        echo json_encode($total);
    }
}
