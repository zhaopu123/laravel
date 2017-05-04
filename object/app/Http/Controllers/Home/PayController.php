<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use DB;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        $ob = DB::table('Order');
 
        $list = $ob
            ->join('product', 'order.pid', '=', 'product.id')
            ->join('user', 'order.uid', '=', 'user.id')
            ->select('order.*', 'product.pname', 'user.name', 'product.pic')
            ->where('user.name',session('adminuser.name'))
            ->where('order.state', '=', 0)
            ->paginate(10);

        $oa = DB::table('addr');
        $data = $oa
            ->join('user', 'addr.uid', '=', 'user.id')
            ->select('addr.*', 'user.name')
            ->where('user.name',session('adminuser.name'))->paginate(10);

        return view('Home.Pay.pay', ['list'=>$list, 'data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($oid)
    {
        //删除数据
        $row = DB::table('order')->where('oid',$oid)->delete();
        //判断删除是否成功
        if($row>0){
            return redirect('home/pay')->with('msg','取消订单成功');
        }else{
            return redirect('home/pay')->with('error','取消订单失败');
        }
    }

    /**
    * 绑定地址
    */
    public function bindAddress(Request $request){
        if(!$request->oid){
            return redirect('/home/pay')->with('msg','请选择订单');
        }
        $params = $request->except('_token');
            if ($request->has('addr_id')) {
                for($i = 0; $i < count($params['oid']); $i ++){   
                    //更新地址
                    $update = array(
                        //post传过来的地址id
                        'aid' => $params['addr_id'][0],
                        'state' => 1, 
                    );
                    $row = DB::table('Order')->where('oid', $params['oid'][$i])->update($update);
                }  
                 return redirect('/home/success');
            }else{
            return redirect('/home/pay')->with('msg','请输入地址');
        }
    }
}