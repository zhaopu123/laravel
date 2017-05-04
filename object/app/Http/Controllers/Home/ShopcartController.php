<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ShopcartController extends Controller
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
        $ob = DB::table('cart');

        //执行分页查询,关联查询
         $list = $ob
            ->join('product', 'cart.pid', '=', 'product.id')
            ->join('user', 'cart.uid', '=', 'user.id')
            ->select('cart.*', 'product.pname', 'user.name', 'product.pic')
            ->where('user.name',session('adminuser.name'))
            ->paginate(5);

        if (session('adminuser.name') == null) {
            return redirect('/home/login/index');               
         }
        
        return view('Home.Shopcart.shopcart', ['list'=>$list,'where'=>$where,'versionId'=>time()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //删除数据
        $row = DB::table('cart')->where('id',$id)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('home/shopcart')->with('msg','删除成功');
        }else{
            return redirect('home/shopcart')->with('error','删除失败');
        }
    }

    /**
    * 删除商品
    */
    public function deleteProduct(Request $request){
        //产品id
        $product_id = $request->input('product_id'); 
        //删除数据
        $row = DB::table('Cart')->where('id', $product_id)->delete();
    }

    /**
    * 更新购物车
    */
    public function updateCart(Request $request){
        //产品id
        $product_id = $request->input('product_id'); 
        //购买数量
        $num        = $request->input('num');     
        //更新购物车数量
        $update = array(
            'pnum' => $num
        );

        $row = DB::table('Cart')->where('id', $product_id)->update($update);
    }

    /**
    * 生成订单
    */
    public function createorder(Request $request){
        if(!$request->has('check')){
            return redirect('/home/shopcart');
        }
        $params = $request->except('_token');
        // dd($params);
        $check = array();
        $check = $params['check'];

        $tmpParams = array();

        foreach($check as $k => $v){
            //页面传递过来的数据
            $tmpParams = array(
                'pid' => $params['pid'][$v],
                'money' => $params['money'][$v],
                'sum' => $params['pnum'][$v],
                'total' => $params['money'][$v] * $params['pnum'][$v],
                'uid' => session('adminuser.id'),
                'state' => 0,
                'atime' =>  time(),
            ); 

            //获取订单表是否有过下单记录
            $where = array(
                'uid' => session('adminuser.id'), 
                'pid' => $params['pid'][$v], 
                'state' => array('neq' => 0)
            );

            $order = DB::table('order')->select('*')->where($where)->first();

            if(empty($order)){ 
                //没有下单记录
                DB::table('Order')->insertGetId($tmpParams);      
            }else{ 
            //有下单记录
                $where = array('oid' => $order->oid);
                $update = array('sum' => $params['pnum'][$v]);
                DB::table('Order')->where($where)->update($update);      
            }
        }

        return redirect('/home/pay');
    }
}
