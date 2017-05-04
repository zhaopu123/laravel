<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', 'Home\HomeController');

Route::group(['prefix'=>'admin','middleware'=>'login'],function(){
	//后台首页
	Route::resource('/index','Admin\AdminController');
	//登出
	Route::get('/over','Admin\LoginController@over');
	//用户管理
	Route::resource('/user','Admin\UserController');
	//分类管理
	Route::resource('/type','Admin\TypeController');
	//添加分类
	Route::get('/type/typeson/{id}','Admin\TypeController@createSon');
	//执行添加
	Route::post('/type/typeson','Admin\TypeController@storeSon');
	//商品管理
	Route::resource('/product','Admin\ProductController');
	//友情链接
	Route::resource('/link','Admin\LinkController');	
	//管理员
	Route::resource('/adm','Admin\AdmController');
	// 订单管理
	Route::resource('/order','Admin\OrderController');
	//公告管理
	Route::resource('/notice','Admin\NoticeController');
	//商品评价
	Route::resource('/comment','Admin\CommentController');
	//网站配置
	Route::resource('/set','Admin\SetController');
	//地址管理
	Route::resource('/addr','Admin\AddrController');

});
//登录
Route::get('admin/login','Admin\LoginController@index');
//执行登录
Route::post('admin/dologin','Admin\LoginController@dologin');
//获取验证码
Route::get('admin/captcha/{tmp}','Admin\LoginController@captcha');

Route::group(['prefix' => 'home'],function(){
	//前台首页
    Route::resource('/index','Home\HomeController');
    //注册页面
	Route::get('/register','Home\RegisterController@index');
    //执行注册
	Route::post('/doregister','Home\RegisterController@doregister');
    //我的订单
    Route::get('sign/order/{id}','Home\OrderController@index');
    Route::post('sign/order/0/{oid}','Home\OrderController@delete');  
    //设置账户信息
    Route::resource('sign/person','Home\PersonController');
    //修改密码
    Route::get('/sign/pass','Home\PassController@index');
    Route::post('/sign/pass/{id}','Home\PassController@update');
    //收货地址
    Route::resource('sign/addr','Home\AddrController');
    //城市联动
    Route::get('/sign/addrs/{id}','Home\AddrController@getinfo');
    //详情页
    Route::get('/info/{id}','Home\InfoController@index');
    Route::post('/info/in/{sum}','Home\InfoController@insert');
    //立即购买
    Route::post('/paynow/{sum}','Home\PaynowController@insert');
    //确认收货
    Route::get('/confirm/{id}','Home\ConfirmController@index');
    //购物车
    Route::resource('/shopcart','Home\ShopcartController');
    //评论页
    Route::get('/comment/{id}','Home\CommentController@index');
    Route::post('/comment','Home\CommentController@insert');
    //回复评论
    Route::post('/replay','Home\ReplayController@insert');
    //列表页
    Route::get('/list/{id}','Home\ListController@index');
    //搜索页
    Route::get('/search','Home\SearchController@index');
    //支付页
    Route::resource('/pay','Home\PayController');
    Route::post('/pay/create/order/{id}','Home\PayController@createorder');
    //交易完成页
    Route::resource('/success','Home\SuccessController');

    //删除商品
    Route::post('/shopcart/deleteproduct','Home\ShopcartController@deleteProduct');

    //添加订单
    Route::post('/shopcart/createorder','Home\ShopcartController@createorder');

    //更新购物车
    Route::post('/shopcart/updatecart','Home\ShopcartController@updatecart');

    //订单绑定收货地址
    Route::post('/pay/bindaddress','Home\PayController@bindaddress');
});
//登录页面
Route::get('home/login/index','Home\LoginController@index');
//执行登录
Route::post('home/dologin','Home\LoginController@dologin');
//登出操作
Route::get('home/over','Home\LoginController@over');
