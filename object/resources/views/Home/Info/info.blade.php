@foreach($list as $v)
    @if($v->kg == 2)
        {{ exit("<script>alert('网页维护中，请稍后！');</script>") }}
    @endif    
    <!DOCTYPE html>
    <html>
        <!--[if lt IE 7 ]><html class="ie6" lang="zh-cn"><![endif]-->
        <!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]-->
        <!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]-->
        <!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--><html lang="zh-cn"><!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <link rel="dns-prefetch" href="">
            <link rel="dns-prefetch" href="">
            <link rel="dns-prefetch" href="">
            <link rel="dns-prefetch" href="">
            <link rel="dns-prefetch" href="">
            <link rel="dns-prefetch" href="">
            <meta name="renderer" content="webkit"> 
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta property="qc:admins" content="56207406376255516375">
            <meta name="keywords" content="{{ $v->keywords }}">
            <title>{{ $v->title }}</title>
            <link rel="stylesheet" type="text/css" href="{{ asset('/Home/infor/css/common.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('/Home/infor/css/app.css') }}">
            <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
            <script type="text/javascript">
                // document.domain = 'jumei.com';

                var JM = JM || {};
                JM.SITE_MAIN_TOPLEVELDOMAINNAME = 'jumei.com';
                JM.SITE = 'bj';
                JM.CONTROL = 'Mall';
                JM.ACTION = 'Detail';
                JM.JMC_DEBUG = false;
                JM.DEBUG = false;
                JM.ASYNCAD = true;
                JM.SERVER_TIME = 1492650266;
                JM.CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
                JM.DEGRADATION = false;
                JM.DEGRADATIONUSER = 1488556799;
                JM.HIDEDISCOUNT = true;
                JM.$HIDEMARKETPRICE= false;
                JM.REFUND_WINDOW= 1;
                // 兼容在jquery加载之前就开始使用$的代码
                window.__domReadyCallbacks__ = [];
                window.jQuery = window.$ = function( callback ){
                    if( typeof callback === 'function' ){
                        window.__domReadyCallbacks__.push( callback );
                    }
                };
            </script>    
            <!-- 子系统的样式 start -->
            <link rel="stylesheet" type="text/css" href="{{ asset('/Home/infor/css/detail.css') }}">
            <!-- 子系统的样式 end -->
        </head>
        <body>
            <div class="header header_wide_lv2" >
                <!--header top-->
                <div class="header_top" >
                    <div class="header_top_box" >
                        <!--login-->
                        @if(session('adminuser')['name'])
                            <ul class="header_top_left" id="headerTopLeft">
                                <li>欢迎您，</li>
                                <li><a href="/home/sign/order/0" rel="nofollow">{{ session('adminuser')['name'] }}</a></li>
                                <li><a href="{{ asset('home/over') }}" rel="nofollow">退出</a></li>
                            </ul> 
                        @else
                            <ul class="header_top_left" id="headerTopLeft">
                                <li>欢迎来到聚美！</li>
                                <!-- <li><a href="http://www.jumei.com/i/account/login" rel="nofollow">请登录</a></li> -->
                                <li><a href="{{ asset('home/login/index') }}" rel="nofollow">请登录</a></li>
                                <li><a href="{{ asset('home/register') }}" rel="nofollow">快速注册</a></li>
                            </ul>
                        @endif
                        <!--login end-->
                        <!--city choose-->
                        <div class="default-city fl">
                                <span class="add-city-icons">
                                    送至<span class="add-default-city">&nbsp;</span>
                                    <s class="icon_arrow_down"></s>
                                    <i class="user-local-icon"></i>
                                </span>
                            <div class="header-city-list"></div>
                        </div>
                        <!--city choose end-->
                        <!--right list-->
                        <ul class="header_top_right" id="headerTopRight">
                            <li><a href="">正品保证</a></li>
                            <li><a href="/home/sign/order/0" rel="nofollow">订单查询</a></li>
                            <li><a href="" rel="nofollow"><s class="icon_favorite"></s>收藏的品牌</a></li>
                            <li class="item_ijumei">
                                <a href="/home/sign/order/0" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a>
                                <i class="icon_arrow_back"></i>
                                <div class="sub_nav">
                                    <ul>
                                        <li><a href="/home/sign/order/0" rel="nofollow">我的订单</a></li>
                                        <li><a href="" rel="nofollow">我的现金券</a></li>
                                        <li><a href="" rel="nofollow">我的红包</a></li>
                                        <li><a href="" rel="nofollow">我的余额</a></li>
                                        <li><a href="" rel="nofollow">我的提现退款</a></li>
                                        <li><a href="" rel="nofollow">我的收藏</a></li>
                                        <li><a href="" rel="nofollow">我的心愿单</a></li>
                                        <li><a href="/home/sign/person" rel="nofollow">会员中心</a></li>
                                        <li><a href="" rel="nofollow">礼品卡兑换</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item_mobile"><a href="" rel="nofollow"><span class="line"></span><s class="icon_mobile"></s>手机聚美</a></li>
                            <li id="see_more">
                                <span class="line"></span>
                            </li>
                            <li class="item_more">
                                <a href="">更多<s class="icon_arrow icon_arrow_down"></s></a>
                                <i class="icon_arrow_back"></i>
                                <div class="sub_nav">
                                    <ul>
                                        <li><a href="" target="_blank" rel="nofollow">邀请好友</a></li>
                                        <li><a href="" rel="nofollow" id="bookmark_us"><span class="bottomline">加入收藏</span></a></li>
                                        <li>
                                            <a href="" class="er_box" rel="nofollow" target="_blank">新浪微博
                                                <span style="display: none;">
                                                    <img src="{{ asset('/Home/infor/picture/sina_er.png') }}">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="er_box" rel="nofollow">聚美微信
                                                <span style="display: none;">
                                                    <img src="{{ asset('/Home/infor/picture/jumei_weixin_header1.png') }}">
                                                </span>
                                             </a>
                                         </li>
                                        <li>
                                            <a href="" class="er_box" target="_blank">百度贴吧</a>
                                        </li>
                                        <li>
                                            <a href="" class="er_box" rel="nofollow" target="_blank">腾讯微博
                                                <span style="display: none;">
                                                    <img src="{{ asset('/Home/infor/picture/qq_er.png') }}">
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="er_box" rel="nofollow" target="_blank">人人公众主页
                                                <span style="display: none;">
                                                    <img src="{{ asset('/Home/infor/picture/renren_er.png') }}">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <!--right list end-->
                    </div>
                </div>
                <!--header top end-->
                <!--header middle-->
                <div class="header_center">
                    <h1 class="logo" style="position:relative;left:-200px;"><a href="/home/index"  id="home"  title="聚美优品" style="background:url({{ asset('/Admin/upload/'.$v->pic) }}) no-repeat top left;">化妆品品牌排行榜大全网站聚美优品</a></h1>
                    <!-- 活动、节日入口广告位 -->
                        <!-- 活动、节日入口广告位 end -->
                    <!--商城页面加 --><!-- <h2 class="sub_mall_logo"><a href="http://mall.jumeihmy.com" title="聚美优品美妆商城">聚美优品美妆商城</a></h2>-->
                    <div class="header_searchbox header_out_searchbox" style="position:relative;left:-200px;">
                        <form action="/home/search" method="get" pos="top">
                            <input name="search" type="text" class="header_search_input" id="header_search_input" default_val="" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" lang="zh" style="height:38px;width:430px;">
                            <button type="submit" class="header_search_btn" >搜索</button>
                        </form>
                        <div class="search_result_pop_a" id="top_out_search_pop_div"></div>
                    </div>
                    
                    <div id="cart_box" class="cart_box" style="position:relative;top:-85px;">
                        <a id="cart" class="cart_link" href="/home/shopcart" rel="nofollow">
                            <img src="{{ asset('/Home/infor/picture/cart.gif') }}" width="28" height="28" class="cart_gif">
                            <span class="text" style="width:90px;height:30px;">去购物车结算</span>
                            <span class="num" style='display: none;'></span>
                            <s class="icon_arrow_right"></s>
                        </a>
                    </div>
                </div>
                <!--header middle end-->
                <!--header bottom-->
                <div class="header_bottom" style='clear:both;'>
                    <div class="channel_nav_box">
                        <div class="channel_nav_list_wrap">
                            <ul class="channel_nav_list">
                                <li>
                                    <a href="/home/index" class="home">首页</a>
                                </li>
                                @foreach($cate as $c)
                                    <li class="haitao_li"><a href="/home/list/{{ $c->id }}">{{ $c->name }}</a></li>
                                @endforeach
                            </ul>
                            <div class="header_pop_subAtc box-shadow" id="header_pop_subAct"></div>
                            <!--导航icon 动画-->
                            <ul id="icon_wrap" class="icon_Wrap">
                                <li>
                                    <div class="divlist divlist01">
                                        <a href=""><span class=""></span> <b>品牌防伪码</b></a></div></li><li><div class="divlist divlist02">
                                        <a href=""><span class="th"></span> <b>美妆30天无理由退货</b></a></div></li><li><div class="divlist divlist03">
                                        <a href=""><span class="by"></span> <b>美妆满2件或299包邮</b></a>
                                    </div>
                                </li>
                            </ul>
                            <!--导航icon 动画 end-->
                        </div>
                    </div>
                </div>
                <!--header bottom end-->
                </div>
                    
                <!-- 子系统内容区域代码 start -->
                <input type="hidden" id="refund_window" value="0">
                <input type="hidden" id="is_show_custserv" value="0">
                <div class="mall_nav_list_wrap_new" id="mall_nav_box">
                    <div class="mall_nav_list_wrap w1090">
                        <ul class="mall_nav_list clearfix">
                            <li class="current"><a href="">美妆商城首页</a></li>
                            <li class=""><a href="">个人护理</a></li>
                            <li id="Mall_shepingmeizhuang" class=""><a href="">奢品美妆</a></li>
                            <li class=""><a href="">护肤</a></li>
                            <li><a href="">彩妆</a></li>
                            <li><a href="">香氛</a></li>
                        </ul>
                        <span class="mall_line" style="width: 112px; left: 26px;">&nbsp;</span>
                    </div>
                </div>
                <style type="text/css">
                    .mall_shop_menu{background: #000;}
                </style>
                <div id="mall_shop_content" class="mall_shop_content"></div>
                @foreach ($pro as $p)
                    <div class="mall_detail_wrap white_bg">
                        <!-- <div>
                            <a href="/home/index" target="_blank" rel="nofollow" style='color:black;'>美妆商城首页</a>
                            <em>></em>
                            <a href='' target='_blank' style='color:black;'>{{$p->name}}</a><em>></em>
                        </div> -->
                        <h1 class="mall_main_title">{{$p->pname}}</h1>
                        <div class="mall_detail_all clearfix">
                            <div class="mall_detail_l jqZoomContent fl"  id="mid">
                                <div class="pro_img">
                                    <!-- 350*350 add small, 375*500 not -->
                                    <div class="jqzoom small">
                                        <img id='product_img' width='350' height='350' src='/Admin/upload/s_{{ $p->pic }}'><i class="zoom_icon"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="did" style="display:none;width:350px;height:350px;overflow:hidden;position:absolute;margin-left:0;">
                                <img src="/Admin/upload/{{ $p->pic }}">
                            </div>
                            <script type="text/javascript">
                                var did = document.getElementById('did');
                                var mid = document.getElementById('mid');

                                mid.onmouseover = function()
                                {
                                    var top = this.offsetTop;
                                    var left = this.offsetLeft+this.offsetWidth;

                                    did.style.top = top+'px';
                                    did.style.left = left+'px';
                                    did.style.display = 'block';

                                    this.onmousemove = function(ent)
                                    {
                                        var x = ent.clientX-this.offsetLeft;
                                        var y = ent.clientY-this.offsetTop;

                                        did.scrollLeft = x*2.8-160;
                                        did.scrollTop = y*2.8-160;
                                    }
                                }
                                mid.onmouseout = function()
                                {
                                    did.style.display = 'none';
                                }
                            </script>
                            <div class="mall_detail_r fl">
                                <div class="mall_price_detail">
                                    <div id="mall_price_detail" class="mall_price clearfix">
                                        <em class="yen">¥</em>
                                        <span class="price_num">{{ $p->money }}</span>
                                        <span class="label" style="color:#ED145B;">聚美价</span>
                                    </div>
                                    <dl class="mall_sale_rules" id="mall_sale_rules">
                                    </dl>
                                </div>
                                <div class="mall_detail_common mall_detail_koubei mar_t15 clearfix">
                                    <span class="label">口碑</span>
                                </div>
                                <input type="hidden" id="mall_product_id" value="">
                                <div id="mall_sku_list" class="mall_detail_common mall_sku_list mar_t15 clearfix">
                                </div>
                                <div class="mall_detail_common mall_product_num mar_t15 clearfix">
                                    <span class="label">数量</span>
                                    <div class="num_detail" id="num_detail">
                                        <em title="减少" class="number_reduce fl" id="reduce"></em>
                                        <input type="text" id="sum" value="1" name="sum" class="buy_number fl" maxlength="2">
                                        <em title="增加" class="number_add fl" id="add"></em>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var reduce = document.getElementById('reduce');
                                    var sum = document.getElementById('sum');
                                    var add = document.getElementById('add');
                                    reduce.onclick = function(){
                                        if(parseInt(sum.value) != 1){
                                            sum.value = parseInt(sum.value) - 1;
                                        }else{
                                            sum.value = 1;
                                        }
                                    }
                                    add.onclick = function(){
                                        sum.value = parseInt(sum.value) + 1;
                                    }
                                </script>
                                <form method="post" name="myform">
                                    {{ csrf_field() }}
                                    <input type='hidden' name='pid' value='{{ $p->id }}'>
                                    <input type='hidden' name='money' value='{{ $p->money }}'>
                                </form>
                                <div class="mall_info_button mar_t20 clearfix">
                                    <a href="javascript:doAdd({{ $v->id }});" class="mall_addcart_up"></a>
                                    <div id ="paynow" style="width:100px;height:20px;background:#FFFCFD;float:left;">
                                        <a class="mall_like_fav" href="javascript:doPay({{ $v->id }})">立即购买</a>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function doAdd(id)
                                    {
                                        var form = document.myform;
                                        var sum = document.getElementById('sum').value;
                                        form.action = '/home/info/in/'+sum;
                                        form.submit();
                                    }
                                    function doPay(id)
                                    {
                                        var form = document.myform;
                                        var sum = document.getElementById('sum').value;
                                        form.action = '/home/paynow/'+sum;
                                        form.submit();
                                    }     
                                </script>
                                <div class ="mall_detail_buynum mar_t15 clearfix" height="50">
                                    <i class="deal_buy_icon"></i>
                                    <p class="buynum">
                                        月销<span class="red_num">333</span>
                                    </p>
                                </div>
                                <div class="mall_detail_common mall_product_service mar_t20 clearfix">
                                    <span class="label">服务</span>
                                    <div class="mall_serce_list">
                                        <a href="" target="_blank" class="con" title="质量保险">质量保险</a>
                                        <a href="" target="_blank" title="30天退货" class="con">本商品支持30天无条件退货</a><a href="" target="_blank" class="con" title="闪电发货">闪电发货</a>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>
                    <input type="hidden" id="item_category" value="jumei_mall">
                    <div class="layout_1090 mar_t20 clearfix"></div>
                    <!--left-->
                    <div id="mall_slidebar_l" class="mall_slidebar_l fl">
                        <div id="same_band_introduce" class="m_hidden mar_b10"></div>
                        <div id="same_type_introduce" class="m_hidden mar_b10"></div>
                        <div id="same_new_introduce" class="m_hidden mar_b10"></div>
                    </div>
                    <!--left end-->
                    <!--right-->
                    <div id="slidebarTabsFixed" class="slidebar_r_detail" style="width:1100px;margin:0 auto;">
                        <div class="slidebar_r_nav black_title" style="padding-left:70px;">
                            <ul class="slidebar_r_ul">
                                <li class="tab_current">
                                    <a class="tab_menu_a" href="#shoppingParameter">商品参数</a>
                                </li>
                                <li>
                                    <a class="tab_menu_a" href="#userKoubei">用户口碑</a>
                                </li>
                                <li class="mall_cart_icons">
                                    <span class="jm_price fl"><em class="jm_yen">¥</em>399</span>
                                    <a class="mall_bottom_cart" href="javascript:;"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--right content-->
                    <div style="width:1100px;background:white;margin:0 auto;">
                        <div id="new_user_imgshow" class="w_700">
                            <img src="{{ asset('/Home/infor/picture/baoxian.jpg') }}" style="margin:10px 14px 0;" id＝"new_user_img02"="">
                        </div>
                        <div class="deal_newuser_view" id="deal_newuser_view" style="display: none;">
                            <div class="clearfix">
                                <a href="" target="_blank">
                                    <strong>正品采购</strong>
                                    <span></span>
                                    <span> 品牌商直供 </span>
                                    <span>入库检验</span>
                                </a>
                                <a href="" target="_blank">
                                    <strong>质量保证</strong>
                                    <span></span>
                                    <span>真品联盟</span>
                                    <span>质量保险</span>
                                </a>
                                <a href="" style="width:150px" target="_blank">
                                    <strong>30天无条件退货</strong>
                                    <span>即使拆封</span>
                                    <span>只要您不满意</span>
                                    <span>30天内我们退货</span>
                                </a>
                                <a href="" target="_blank">
                                    <strong>上市公司保证</strong>
                                    <span>美国纽交所上市</span>
                                    <span>获得国际的</span>
                                    <span>信任和监管</span>
                                </a>
                                <a href="" target="_blank">
                                    <strong>新人专享福利</strong>
                                    <span>最多165元现金券</span>
                                    <span>满39元包邮</span>
                                    <span>首单返现金券礼包</span>
                                </a>
                            </div>
                        </div>
                        <!--新用户 end-->

                        <!-- 品牌授权及防伪 -->
                        <div class="product-validate">
                            <p class="product-validate-title">
                                娇韵诗防伪码<span id="zhenpin_flag_brand"></span>验真流程
                            </p>
                            <ul class="product-validate-tab  product-validate-tab1">
                                <li class="current">
                                    <a>
                                        <span>1</span>
                                        <div class="product-tab-title">
                                            <p>SECURITY CODE</p>
                                            <p class="product-tab-tt1">找到品牌防伪码</p>
                                        </div>
                                        <i class="product-tab-icon"></i>
                                    </a>
                                    <i class="product-tab-bottom"></i>
                                </li>
                                <li>
                                    <a>
                                        <span>2</span>
                                        <div class="product-tab-title">
                                            <p>CHECK</p>
                                            <p class="product-tab-tt1">登录<b id="zhenpin_flag_login"></b>官网查询</p>
                                        </div>
                                        <i class="product-tab-icon"></i>
                                    </a>
                                    <i class="product-tab-bottom"></i>
                                </li>
                                <li>
                                    <a>
                                        <span>3</span>
                                        <div class="product-tab-title">
                                            <p>RESULT</p>
                                            <p class="product-tab-tt1">查看结果</p>
                                        </div>
                                        <i class="product-tab-icon"></i>
                                    </a>
                                    <i class="product-tab-bottom"></i>
                                </li>
                            </ul>
                            <div class="product-validate-content" style="display:block">
                                <img src="{{ asset('/Home/infor/picture/285_1.jpg') }}">
                            </div>
                            <div class="product-validate-content">
                                <img src="{{ asset('/Home/infor/picture/285_2.jpg') }}">
                            </div>
                            <div class="product-validate-content">
                                <img src="{{ asset('/Home/infor/picture/285_3.jpg') }}">
                            </div>
                        </div>
                        <!-- 品牌授权及防伪 end -->
                        <!--商品参数-->
                        <div id="shoppingParameter" class="shopping_parameter w_700">
                            <h2 class="detail_title"></h2>
                            <div class="mall_detail_des">
                                <p class="mar_t15">
                                    {{ $p->content }}
                                </p>
                                <table border="0" class="parameter_table" cellspacing="0" cellpadding="0" width="700">
                                    <tbody>
                                        <tr>
                                            <td width="85"><b>商品名称：</b></td>
                                            <td width="250">
                                                <span>{{ $p->pname }}</span>
                                            </td>
                                            <td rowspan="7" align="right" valign="bottom"><img src="/Admin/upload/s_{{ $p->pic }}" alt="" border="0"></td>
                                        </tr>
                                        <tr>
                                            <td><b>品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;牌：</b></td>
                                            <td><span itemprop="brand">{{ $p->pname }}</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>功&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;效：</b></td>
                                            <td><span>*****</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>适用人群</b></td>
                                            <td><span>****人士</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>产品规格</b></td>
                                            <td><span>****</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>保质期限</b></td>
                                            <td><span>3年（具体日期以收到实物为准）</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>原产国家</b></td>
                                            <td><span>中国（具体产地以收到实物为准）</span></td>
                                        </tr>
                                        <tr>
                                            <td><b>特别说明</b></td>
                                            <td><span>本产品为全新正品，有外盒包装。多款包装随机发货，具体以收到实物为准，请介意的人士慎重购买。</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--商品参数 end-->

                        <!--划线价说明图片-->
                        <div class="marketprice_wrapper" style="padding-left:100px;">
                            <img src="{{ asset('/Home/infor/picture/marketprice_pc_660.png') }}" class="marketprice_pc" />
                        </div>
                        <!--划线价说明图片 end-->
                        <!--用户口碑-->
                        <div id="userKoubei" class="user_koubei w_700">
                            <h2 class="detail_title"></h2>
                            <div style="height:10px;"></div>
                            @foreach($cm as $c)   
                                <div id="script_koubei">
                                    <div style="float:left;">
                                        <img src="/Admin/upload/{{ $c->pic }}" style="width:50px;height:50px;">
                                    </div>
                                    <div style="float:left;align:left;border:1px solid #FEF1F5;width:630px;margin-left:10px;">
                                        <div style="padding-left:5px;border-bottom:1px solid #FEF1F5;background:#FEF1F5;height:30px;line-height:30px;">
                                            <span style="color:#ED56C1;">{{ $c->name }}</span>
                                            <span style="padding-left:500px;"><a href="javascript:click({{ $c->id }})" style="cursor:pointer;text-decoration;color:black;">回复</a></span>
                                        </div>
                                        <div style="padding:10px;">
                                            <p>{{ $c->cont }}</p>
                                        </div>
                                        @foreach($rp as $r)
                                            @if ($c->id == $r->coid)
                                                <div style="border-top:1px solid #FEF1F5;">
                                                    <div style="float:left;margin:5px;">
                                                        <img src="/Admin/upload/{{ $r->pic }}" style="width:35px;height:35px;">
                                                    </div>
                                                    <div style="float:left;margin:10px;height:50px;">
                                                        <span style="color:#ED56C1;">{{ $r->name }}</span>:
                                                        <span>{{ $r->content}}</span>
                                                        <span style="padding:50px;">{{ date('Y-m-d H:i:s',$r->atime) }}</span>
                                                    </div>
                                                    <div style="clear:both;"></div>                                            
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div style="clear:both;height:10px;"></div>
                            @endforeach
                            <div>
                                {{ $cm->links() }}
                            </div>
                        </div>
                        <div id="replaybox" style="position:fixed;top:200px;left:350px;width:550px;height:350px;background:white;z-index:2;border:1px solid #ccc;display:none;">
                            <div style="height:40px;border-bottom:1px solid #ccc">
                                <span style="margin:10px;font-size:20px;color:#7C7979;line-height:35px;">回复内容</span>
                                <div id="cha" style="height:20px;width:30px;font-size:35px;color:#ccc;float:right;line-height:40px;cursor:pointer;">x</div>
                            </div>
                            <div style="padding-left:50px;padding-top:20px;clear:both;">                           
                                <form name="mineform" method="post" action="/home/replay">
                                    {{ csrf_field() }}
                                    <textarea name="content" style="width:420px;height:200px;resize:none;"></textarea><br>
                                    <input id="coid" type="hidden" name="coid">
                                    <input type="submit" value="确认回复" style="float:right;margin-top:20px;margin-right:80px;width:70px;height:40px;background:#3498DB;">
                                </form>
                            </div>
                        </div>
                        <script type="text/javascript">
                            var replaybox = document.getElementById('replaybox');
                            var cha = document.getElementById('cha');
                            var coid = document.getElementById('coid');
                            function click(id)
                            {
                                replaybox.style.display = "block";
                                coid.value = id;
                            }
                            cha.onclick = function()
                            {
                                replaybox.style.display = 'none';
                            }
                        </script>
                        <!--用户口碑 end-->
                        <!--聚美优势-->
                        <div id="jumeiAdvantage" class="jumei_advantage w_700">
                            <h2 class="detail_title"></h2>
                            <div class="selector ecope_tab product_promise_tabs mar_t20" id="product_promise_tabs">
                                <ul class="tab_menu">
                                    <li class="current">
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/goods_icon.jpg') }}" src="{{ asset('/Home/infor/picture/goods_icon.jpg') }}">
                                    </li>
                                    <li><img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/backtrack_icon.jpg') }}" src="{{ asset('/Home/infor/picture/backtrack_icon.jpg') }}"></li>

                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/storage_icon.jpg') }}" src="{{ asset('/Home/infor/picture/storage_icon.jpg') }}">
                                    </li>
                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/consignment_icon.jpg') }}" src="{{ asset('/Home/infor/picture/consignment_icon.jpg') }}">
                                    </li>
                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/packaging_icon.jpg') }}" src="{{ asset('/Home/infor/picture/packaging_icon.jpg') }}">
                                    </li>
                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/serving_icon.jpg') }}" src="{{ asset('/Home/infor/picture/serving_icon.jpg') }}">
                                    </li>
                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/star_icon.jpg') }}" src="{{ asset('/Home/infor/picture/star_icon.jpg') }}">
                                    </li>
                                    <li>
                                        <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/evaluate_icon.jpg') }}" src="{{ asset('/Home/infor/picture/evaluate_icon.jpg') }}">
                                    </li>
                                </ul>
                                <div class="tab_wrapper" style="padding-left:10px;">
                                    <div class="tab_content">
                                        <div id="goods" class="tab_box" style="display: block;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/goods_content.jpg') }}" usemap="#goodsMap" src="{{ asset('/Home/infor/picture/goods_content.jpg') }}">
                                            <map name="goodsMap" id="goodsMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="backtrack" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/backtrack_content.jpg') }}" usemap="#backtrackMap" src="{{ asset('/Home/infor/picture/backtrack_content.jpg') }}">
                                            <map name="backtrackMap" id="backtrackMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="storage" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/storage_content.jpg') }}" usemap="#storageMap" src="{{ asset('/Home/infor/picture/storage_content.jpg') }}">
                                            <map name="storageMap" id="storageMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="consignment" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/consignment_content.jpg') }}" usemap="#consignmentMap" src="{{ asset('/Home/infor/picture/consignment_content.jpg') }}">
                                            <map name="consignmentMap" id="consignmentMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="package" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/packaging_content.jpg') }}" usemap="#packagingMap" src="{{ asset('/Home/infor/picture/packaging_content.jpg') }}">
                                            <map name="packagingMap" id="packagingMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="serving" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/serving_content.jpg') }}" usemap="#servingMap" src="{{ asset('/Home/infor/picture/serving_content.jpg') }}">
                                            <map name="servingMap" id="servingMap">
                                                <area shape="rect" coords="7,709,652,769" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="358,566,632,611" id="serving_fav_tell" rel="nofollow" style="cursor: pointer;">
                                                <area shape="rect" coords="360,615,630,657" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="15,660,346,702" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="360,661,630,704" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="star" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/star_content.jpg') }}" usemap="#starMap" src="{{ asset('/Home/infor/picture/star_content.jpg') }}">
                                            <map name="starMap" id="starMap">
                                                <area shape="rect" coords="6,705,651,765" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="12,104,321,302" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="334,102,641,301" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="13,314,323,510" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="331,312,641,510" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                        <div id="evaluate" class="tab_box" style="display: none;">
                                            <img class="deal_lazy_img" data-lazysrc="{{ asset('/Home/infor/picture/evaluate_content.jpg') }}" usemap="#evaluateMap" src="{{ asset('/Home/infor/picture/evaluate_content.jpg') }}">
                                            <map name="evaluateMap" id="evaluateMap">
                                                <area shape="rect" coords="6,705,651,765" href="" target="_blank" rel="nofollow">
                                                <area shape="rect" coords="73,580,568,689" href="" target="_blank" rel="nofollow">
                                            </map>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--聚美优势 end-->
            @endforeach
            <!-- 子系统内容区域代码 end -->
            <div id="footer" class="footer">
                <div id="footer_textarea">

                    <div class="footer_top">
                        <div class="footer_con footer_credit" id="footer_credit">
                            <a  href="" class="foot_link mostmall" target="_blank" rel="nofollow">
                                <span class="first corn"></span><span class="con"><b>值得信赖美妆电商</b></span>四千万用户信赖
                            </a>
                            <a href="" class="foot_link quality" target="_blank"  rel="nofollow">
                                <span class="corn"></span><span class="con"><b>成功在美上市</b></span>股票代码NYSE:JMEI
                            </a>
                            <a href="" class="foot_link back" rel="nofollow" target="_blank">
                                <span class="corn"></span><span class="con"><b>品牌防伪码</b></span>支持品牌官网验真
                            </a>
                            <a href="" class="foot_link depot" target="_blank" rel="nofollow">
                                <span class="corn"></span><span class="con"><b>30天无理由退货</b></span>只要不满意无理由退货
                            </a>
                            <a href="" class="foot_link consignment" target="_blank" rel="nofollow">
                                <span class="corn"></span><span class="con"><b>百万用户口碑</b></span>帮你只选对的,不选贵的
                            </a>
                            <a href="" class="foot_link packaging" target="_blank" rel="nofollow">
                                <span class="corn"></span><span class="con"><b>订单闪电发货</b></span>1.5小时订单急速出库
                            </a>
                            <a href="" class="foot_link confide" target="_blank" rel="nofollow">
                                <span class="corn"></span><span class="con"><b>大牌明星热荐</b></span>打造精致明星脸
                            </a>
                        </div>
                    </div>
                    <div class="footer_top_sen">
                        <div class="footer_con footer_links" id="footer_links">
                            <ul class="linksa">
                                <li class="links">服务保障</li>
                                <li><a href="" target="_blank" rel="nofollow">品牌真品防伪码</a></li>
                                <li><a href="" target="_blank" rel="nofollow">正品保证</a></li>
                                <li><a href="" target="_blank" rel="nofollow">30天无条件退货</a></li>
                                <li><a href="" target="_blank" rel="nofollow">7×24小时客服服务</a></li>
                                <li><span class="footer_zcemail">总裁邮箱ceo@jumei.com</span></li>
                            </ul>
                            <ul class="linksb">
                                <li class="links">使用帮助</li>
                                <li><a href="" target="_blank" rel="nofollow">新手指南</a></li>
                                <li><a href="" target="_blank" rel="nofollow">常见问题</a></li>
                                <li><a href="" target="_blank" rel="nofollow">帮助中心</a></li>
                                <li><a href="" target="_blank" rel="nofollow">用户协议</a></li>
                            </ul>
                            <ul class="linksc">
                                <li class="links">支付方式</li>
                                <li><a href="" target="_blank" rel="nofollow">货到付款</a></li>
                                <li><a href="" target="_blank" rel="nofollow">在线支付</a></li>
                                <li><a href="" target="_blank" rel="nofollow">余额支付</a></li>
                                <li><a href="" target="_blank" rel="nofollow">现金券支付</a></li>
                            </ul>

                            <ul class="linksd">
                                <li class="links">配送方式</li>
                                <li><a href="" target="_blank" rel="nofollow">包邮政策</a></li>
                                <li><a href="" target="_blank" rel="nofollow">配送说明</a></li>
                                <li><a href="" target="_blank" rel="nofollow">运费说明</a></li>
                                <li><a href="" target="_blank" rel="nofollow">验货签收</a></li>
                            </ul>

                            <ul class="linkse">
                                <li class="links">售后服务</li>
                                <li><a href="" target="_blank" rel="nofollow">正品承诺</a></li>
                                <li><a href="" target="_blank" rel="nofollow">售后咨询</a></li>
                                <li><a href="" target="_blank" rel="nofollow">退货政策</a></li>
                                <li><a href="" target="_blank" rel="nofollow">退货办理</a></li>
                            </ul>
                            <div class="links_er_box">
                                <ul class="linksf">
                                    <li class="links">手机聚美</li>
                                    <li><span class="link_bottom_pic"></span></li>
                                    <li>下载移动客户端</li>
                                </ul>
                                <ul class="linksg">
                                    <li class="links">聚美微信</li>
                                    <li><span class="link_bottom_pic"></span></li>
                                    <li>聚美官方微信</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="footer_dy" id="footer_dy">
                        <div class="play_box"><span class="play"></span></div>
                    </div>
                    <div class="footer_center" >
                        <div class="footer_con" id="footer_link">
                            @foreach ( $ob as $a )
                                    <a href="{{ $a->url }}" target="_blank" rel="nofollow">{{ $a->name }}</a>|
                            @endforeach            
                        </div>
                    </div>
                    <div id="footer_copyright" class="footer">
                        <div class="footer_con">
                            <p class="footer_copy_con">
                                
                                客服热线：400-123-8888
                                <br/>
                                京公网安备 11010102001226 | <a href="" target="_blank" rel="nofollow">京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
                                | <a href="" target="_blank" rel="nofollow">营业执照</a>
                            </p>
                            <p>
                                <a href="" class="footer_copy_logo logo01" rel="nofollow"></a>
                                <a href="" target="_blank" class="footer_copy_logo logo02" rel="nofollow"></a>
                                <a href="" class="footer_copy_logo logo03" rel="nofollow"></a>
                                <a href="" class="footer_copy_logo logo04" rel="nofollow"></a>
                                <a href="" target="_blank" class="footer_copy_logo logo05" rel="nofollow"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
@endforeach