@foreach($set as $b)
    @if($b->kg == 2)
        {{ exit("<script>alert('网页维护中，请稍后！');</script>") }}
    @endif  
    <!DOCTYPE html>
        <!--[if lt IE 7 ]><html class="ie6" lang="zh-cn"><![endif]-->
        <!--[if IE 7 ]><html class="ie7" lang="zh-cn"><![endif]-->
        <!--[if IE 8 ]><html class="ie8" lang="zh-cn"><![endif]-->
        <!--[if IE 9 ]><html class="ie9" lang="zh-cn"><![endif]-->
        <!--[if (gt IE 9)|!(IE)]><!--><html lang="zh-cn"><!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta name="renderer" content="webkit">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta property="qc:admins" content="56207406376255516375">

            <link rel="stylesheet" type="text/css" href="{{ asset('Home/index1/css/common.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('Home/index1/css/app.css') }}">

            <script type="text/javascript" src='{{ url("Home/index1/js/jquery-1.8.3.min.js") }}'></script>
            <script type="text/javascript">
            document.domain = 'jumei.com';

            var JM = JM || {};
            JM.SITE_MAIN_TOPLEVELDOMAINNAME = 'jumei.com';
            JM.SITE = 'bj';
            JM.CONTROL = 'Home';
            JM.ACTION = 'Home';
            JM.JMC_DEBUG = false;
            JM.DEBUG = false;
            JM.ASYNCAD = false;
            JM.SERVER_TIME = 1491294160;
            JM.CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
            JM.DEGRADATION = false;
            JM.DEGRADATIONUSER = 1488556799;
            JM.HIDEDISCOUNT = true;
            JM.$HIDEMARKETPRICE= false;
            JM.REFUND_WINDOW= 0;
            // 兼容在jquery加载之前就开始使用$的代码
            window.__domReadyCallbacks__ = [];
            window.jQuery = window.$ = function( callback ){
                if( typeof callback === 'function' ){
                    window.__domReadyCallbacks__.push( callback );
                }
            };
            </script><!-- 子系统的样式 start -->
            <!-- main -->
            <link rel="stylesheet" type="text/css" href="{{ asset('Home/index1/css/main.css') }}">
            <meta name="keywords" content="{{ $b->keywords }}">
            <title>{{ $b->title }}</title>
            <!-- 子系统的样式 end -->

        </head>
        <body>
            <div class="header header_wide_lv2">
            <!--header top-->
                <div class="header_top">
                    <div class="header_top_box">
                         <!--login-->
                        @if(session('adminuser')['name']) 
                            <ul class="header_top_left" id="headerTopLeft">
                                <li>欢迎您</li>
                                <li><a href="/home/sign/person" rel="nofollow">{{ session('adminuser')['name'] }}</a></li>
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
                            <li class="item_ijumei"><a href="/home/sign/order/0" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a><i class="icon_arrow_back"></i>
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
                            <!-- <li class="item_koubei"><a href="--><!--/?from=--><!--_top_nav_fresh_koubei_tab_new"><s class="icon_koubei"></s>口碑中心</a></li>-->
                            <li id="see_more">
                                <span class="line"></span>
                                <!--查看更多 (广告位) star-->
                                <!-- 查看分类(广告位) end  -->
                            </li>
                            <li class="item_more">
                                <a href="">更多<s class="icon_arrow icon_arrow_down"></s></a>
                                <i class="icon_arrow_back"></i>
                                <div class="sub_nav">
                                    <ul>
                                        <li><a href="" target="_blank" rel="nofollow">邀请好友</a></li>
                                        <li><a href="" rel="nofollow" id="bookmark_us"><span class="bottomline">加入收藏</span></a></li>
                                        <li><a href="" class="er_box" rel="nofollow" target="_blank">新浪微博<span style="display: none;"><img src="{{ asset('Home/index1/picture/sina_er.png') }}"></span></a></li>
                                        <li><a href="" class="er_box" rel="nofollow">聚美微信<span style="display: none;"><img src="{{ asset('Home/index1/picture/jumei_weixin_header1.png') }}"></span></a></li>
                                        <li><a href="" class="er_box" target="_blank">百度贴吧</a></li>
                                        <li><a href="" class="er_box" rel="nofollow" target="_blank">腾讯微博<span style="display: none;"><img src="{{ asset('Home/index1/picture/qq_er.png') }}">    </span></a></li>
                                        <li><a href="" class="er_box" rel="nofollow" target="_blank">人人公众主页<span style="display: none;"><img src="{{ asset('Home/index1/picture/renren_er.png') }}"></span></a></li>
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
                    <h1 class="logo"><a href="/home/index" id="home" title="聚美优品" style="background:url({{ asset('/Admin/upload/'.$b->pic) }}) no-repeat top left;">化妆品品牌排行榜大全网站聚美优品</a></h1>
                    <!--商城页面加 --><!-- <h2 class="sub_mall_logo"><a href="http://mall.jumeihmy.com"      title="聚美优品美妆商城">聚美优品美妆商城</a></h2>-->
                    <div class="header_searchbox header_out_searchbox">
                        <form action="/home/search" method="get" pos="top">
                            <input name="search" type="text" class="header_search_input" id="header_search_input" default_val="" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" lang="zh">
                            <button type="submit" class="header_search_btn" >搜索</button>
                        </form>
                        <div class="search_result_pop_a" id="top_out_search_pop_div">
                        </div>
                    </div>
            
                    <div id="cart_box" class="cart_box">
                        <a id="cart" class="cart_link" href="/home/shopcart" rel="nofollow">
                            <img src="{{ asset('Home/index1/picture/cart.gif') }}" width="28" height="28" class="cart_gif" />
                            <span class="text">去购物车结算</span>
                            <span class="num" style='display:none;'></span>
                            <s class="icon_arrow_right"></s>
                        </a>
                    </div>
                </div>
                <!--header middle end-->
                <!--header bottom-->
                <div class="header_bottom">
                    <div class="channel_nav_box">
                        <div class="channel_nav_list_wrap clearfix">
                            <ul class="channel_nav_list">
                                <li ><a href="/home/index" class="home">首页</a></li>
                                @foreach($ob as $o)
                                    <li class="haitao_li"><a href="/home/list/{{ $o->id }}">{{ $o->name }}</a></li>
                                @endforeach
                            </ul>
                            <div class="header_pop_subAtc box-shadow" id="header_pop_subAct"></div>
                            <!--导航icon 动画-->
                            <ul id="icon_wrap" class="icon_Wrap">
                                <li><div class="divlist divlist01">
                                    <a target="_blank" href=""><span class=""></span> <b>品牌防伪码</b></a></div></li>
                                <li><div class="divlist divlist02">
                                    <a href=""><span class="th"></span> <b>美妆30天无理由退货</b></a></div></li>
                                <li><div class="divlist divlist03">
                                    <a href=""><span class="by"></span> <b>美妆满2件或299包邮</b></a></div></li>
                            </ul>
                            <!--导航icon 动画 end-->
                        </div>
                    </div>
                </div>
                <!--header bottom end-->
            </div>

            <!-- 子系统内容区域代码 start -->
           <!--  <div class='site_body'> -->
                <div id='site_switch' class='ecope_switchable site_switch'>
                    <div class='sc_container'>
                    <!-- 显示框 -->
                      <!--  <div id="show" style="float:left; position:absolute;width:580px;height:300px; background:rgb(243,243,243);display:none;margin-left:250px;margin-top:4px;">
                            <a id='1' href="/home/makeup/index"><img src="{{ asset('Home/index1/picture/a.jpg') }}"style=" width:180px;height:100px;50% no-repeat;margin-top:24px;margin-left:10px;float:left;" >
                            </a> -->
                            <!-- <a id='2' href="/home/makeup/index1"><img src="{{ asset('Home/index1/picture/nv.png') }}"style=" width:180px;height:100px;50% no-repeat;margin-top:24px;margin-left:10px;float:left;" >
                            </a>
                            <a id='3' href="/home/makeup/index"><img src="{{ asset('Home/index1/picture/124338_535_250_001-web.jpg') }}"style=" width:180px;height:100px;50% no-repeat;margin-top:24px;margin-left:10px;float:left;" >
                            </a>
                            <a id='4' href="/home/makeup/index"><img src="{{ asset('Home/index1/picture/ps.png') }}"style=" width:180px;height:100px;50% no-repeat;margin-top:24px;margin-left:10px;float:left;" >
                            </a>
                            <a id='5' href="javascript:void(0)"><img src="{{ asset('Home/index1/picture/nz.png') }}"style=" width:180px;height:100px;50% no-repeat;margin-top:24px;margin-left:10px;float:left;" >
                            </a> -->
                       <!-- </div> -->
                        <!-- 背景图片 -->
                        @foreach($pic as $v)
                            <div id='playbox' >
            					<img src="/Admin/upload/{{ $v->pic }}" style="width:1379px;height:350px;50% 0px no-repeat;margin:auto;display:table";>
                            </div>
        				@endforeach
                    </div>
                </div>
                <!-- 轮播图的js -->
                <script type="text/javascript" src='{{ url("Home/index1/js/jquery-1.8.3.min.js") }}'></script>
        		<script type="text/javascript">
        			// var img = document.images;
        			var img = $('#playbox img');
        			var playbox = $('#playbox');
        			// var playbox = document.getElementById("playbox");
        			// 初始化需要显示的图片的索引
        			 var m = 1;
        			 var a = img.length-1;
        			 var mytime = setInterval(run,2000);
        			// 开始轮播
        			function run()
        			{
        				if( m > a){
        					m = 0;
        				}
        				controImg(m);
        				m++;
        			}

        			// 显示图片
        			function controImg(n)
        			{
        				for (var i = 0; i < img.length; i++) {
        					img[i].style.display = 'none';
        				}
        				img[n].style.display = 'block';
        			}
                    $('#makeup').mouseover(function(){
                        clearInterval(mytime);
                        $('#show').mouseleave(function(){
                            mytime = setInterval(run,2000);
                        })
                    });
                    
        		</script>

                <!--显示框的js  -->
                <script>
                    // alert(1);
                    $('#makeup').mouseover(function(){
                        $("#show").css('display','block');
                        $("#show").mouseleave(function(){
                            $(this).css('display','none');
                        });
                    });
                </script>
                <script type="text/javascript">
                        // $('#4').click(function(){
                        //      window.location.href="/home/makeup/index";
                        // });
                </script>
            <!-- 每日必看\今明日爆款\今日推荐品牌团-->
        	<div class="layout_1090 today_later_main">
        		<h2 class="floor_item_title floor_must_see" id="mustsee"></h2>
        		<!-- 今明日爆款上方广告位 -->
        		<div class="ecope_tab today_later_content" id="today_later_tab">
        	        <div class="tab_wrapper">    
        		        <div class="tab_content today_tab_wrapper" id="today_tab_wrapper">
        			         <!--今日爆款-->
        			        <div class="tab_box" id="today_deal_end">
                            @foreach($dd as $v)
        				        <div class="today_tab_content" data-hashid="ht170404p2197890t2">
        					        <a href="" target="_blank" class="today_tab_link">
        						        <img original="" border="0" class="all_cart_img" src="/Admin/upload/{{ $v->pic }}">
        						        <span class="today_rank_top_1"></span>
        					        </a>
        					        <a href="" target="_blank" class="global_tip">
        						        <span>海外直采</span><span>海外价格</span><span>闪电发货</span>
        					        </a>
        					        <div class="deals_tags">
        						       <span class="tags_list tags_haitao">海淘</span>
        					        </div>
        				            <div class="products_detail" style="margin-top:-15px;">
        						        <div class="products_have_time">
        							        <span class="today_end_time" ><span class="icon">距特卖结束 </span><span class="today_time" end_time="1491357599">{{ $v->atime}}</span></span>
        						        </div>
        						        <a href="" target="_blank" class="product_short_title">{{ $v->content }}</a>
        						        <div class="product_price">
                                            <div class="goto_cart_wrap all_cart_wrap"><a class="goto_btn goto_cart all_cart" href="javascript:;">加入购物车</a>
                                            </div>
        																								
        							        <span class="now_price"><em>¥</em>{{ $v->money }}</span>
        							        <div class="price_wrap">
        								        <div class="icon_wrap">
                                                </div>
                                            </div>
        						        </div>
        						        <div class="global_sure_tag">
        							        <span class="g_tag"><img src="{{ asset('Home/index1/picture/029_big.jpg') }}"></span><span class="wish_like yahei fr">{{$v->money -8}}人已经购买</span>
                                        </div>
        				            </div>
        				        </div>
                            @endforeach
        			        </div>
        			        <div class="tab_box" id="tommrow_deal_start">
        					</div>
        			     <!--明日爆款 end-->
        		        </div>
                        
        	        </div>
                </div>	
            </div>
            <div style="height:80px;width:100%;background:#fff url({{ asset('Home/index1/images/54101_1920_80_001-web.jpg') }}) no-repeat top center;">    
            </div>
            <!-- 品牌团-->
            <!-- 遍历的父名字 -->
            @foreach($ob as $v)
                <div class="layout_1090" id="brands_head" >
                        <!--美妆品牌团-->
                    <div class="floor-head">
                        <div class="products_have_time" >
                            <span class="today_end_time" style="height:28px;margin-right:1700px;"><span class="icon" style="font-size:17px;">{{ $v->name }}<b>品牌团</b> </span>
                        </div> 
                    </div>
                    <div class="cosmetics-floor brands-floor" id="cosmetics-floor">
                        <div class="bf-content clearfix">
                            <div class="fl" >
                                <a href="/home/list/{{ $v->id }}" target="_blank"><img src="{{ asset('Home/index1/picture/mz.jpg')}}" style="width:258px; height:425px;"></a>
                            </div>
                            <!-- 子图片 -->
                            <div class="fr" style="">
                                <div class="bf-ul-content">
                                @foreach($v->path as $k => $son)
                                    <li style="overflow:hidden;"><a href="/home/info/{{ $son->id }}" target="_blank">
                                        <img src="/Admin/upload/{{ $son->pic }}" width="380" height="240">
                                        <div class="bf-item-info" style="margin-top:-60px;margin-right:-30px;">
                                            <p class="tit">{{ $son->pname }}</p>
                                            <p class="subtit" style="width:110px;height:40px;margin-left:20px;">{{ $son->content }}</p>
                                            <p class="sale">满<em>{{ $son->money }}</em>减<em>{{ floor($son->money*0.1) }}</em></p>
                                            <!-- <p class="time_left home_timer" end_time="1491357599">结束时间</p> -->
                                        </div></a>
                                    </li>
                                @endforeach
                                </div>
                            </div>                  
                        </div>
                    </div>
                    <!--美妆品牌团 end-->
                </div>
            @endforeach
            <!-- footer -->
            <div id="footer" class="footer" style="margin-top:10px;">
                <div id="footer_textarea">
                    <div class="footer_top">
                        <div class="footer_con footer_credit" id="footer_credit">
                            <a  href="" target="_blank" rel="nofollow">
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
                            @foreach ( $link as $a )
                                <a href="{{ $a->url }}" target="_blank" rel="nofollow">{{ $a->name }}</a>|
                            @endforeach 
                        </div>
                    </div>
                    <div id="footer_copyright" class="footer_copyright">
                        <div class="footer_con">
                            <p class="footer_copy_con">
                                {{ $b->copy }}
                                客服热线：400-123-8888
                                <br>
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
                            <script>function change_urlknet(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=RndNum(6);document.getElementById(eleId).href=str1;}function RndNum(k){var rnd="";for (var i=0;i<k;i++){rnd+=Math.floor(Math.random()*10);}return rnd;}</script>
                        </div>
                    </div>
                </div>
            </div>



            <script src="{{ asset('Home/index1/js/lib.js') }}"></script>
            <script src="{{ asset('Home/index1/js/monitor.js') }}"></script>
            <script src="{{ asset('Home/index1/js/ui.js') }}"></script>
            <script src="{{ asset('Home/index1/js/app.js') }}"></script>


            <!-- 子系统的页脚脚本 start -->
            <script src="{{ asset('Home/index1/js/main.js') }}"></script>
            <script src="{{ asset('Home/index1/js/arrive.htm') }}" language="JavaScript"></script>
            <input id="is_ipad" type="hidden" value="home">
            <script type="text/javascript">
            	JM.actGlobalDMHideKey = "jmdl14";
            </script>
            <!-- 子系统的页脚脚本 end -->
            <!-- 公共JS start -->
            <!-- 第三方脚本 -->
            <script type="text/javascript">
                // 兼容在jquery加载之前就开始使用$的代码
                $(function(){
                    var callbacks = window.__domReadyCallbacks__,
                        len = callbacks.length,
                        i = 0;

                    for( ; i < len; i++ ){
                        callbacks[i]();
                    }
                });

                window._adwq = window._adwq || [];
                _adwq.push(['_setAccount', '1ng4e']);
                _adwq.push(['_setDomainName', '.jumei.com']);
                _adwq.push(['_trackPageview']);

                GA_ACCOUNT = 'UA-10208510-1';

                window._gaq = window._gaq || [];
                _gaq.push(['_setAccount', GA_ACCOUNT]);
                _gaq.push(['_addOrganic', 'baidu', 'wd']);
                _gaq.push(['_addOrganic', 'baidu', 'word']);
                _gaq.push(['_addOrganic', 'm.baidu', 'word']);
                _gaq.push(['_addOrganic', 'wap.baidu', 'word']);
                _gaq.push(['_addOrganic', 'baidu', 'kw']);
                _gaq.push(['_addOrganic', 'baidu', 'q1']);
                _gaq.push(['_addOrganic', 'baidu', 'q2']);
                _gaq.push(['_addOrganic', 'baidu', 'q3']);
                _gaq.push(['_addOrganic', 'baidu', 'q4']);
                _gaq.push(['_addOrganic', 'baidu', 'q5']);
                _gaq.push(['_addOrganic', 'baidu', 'q6']);
                _gaq.push(['_addOrganic', 'so.com', 'q']);
                _gaq.push(['_addOrganic', 'image.baidu', 'word']);
                _gaq.push(['_addOrganic', 'soso', 'w']);
                _gaq.push(['_addOrganic', 'vnet', 'kw']);
                _gaq.push(['_addOrganic', 'sogou', 'query']);
                _gaq.push(['_addOrganic', 'youdao', 'q']);
                _gaq.push(['_addIgnoredOrganic', 'jumei.com']);
                _gaq.push(['_addIgnoredOrganic', 'www.jumei.com']);
                _gaq.push(['_addIgnoredOrganic', 'jumei']);
                _gaq.push(['_addIgnoredOrganic', '聚美']);
                _gaq.push(['_addIgnoredOrganic', '聚美优品']);
                _gaq.push(['_addIgnoredOrganic', 'tuanmei.net']);
                _gaq.push(['_addIgnoredOrganic', 'www.tuanmei.net']);
                _gaq.push(['_addIgnoredOrganic', 'tuanmei']);
                _gaq.push(['_addIgnoredOrganic', '团美']);
                _gaq.push(['_addIgnoredRef', 'jumei']);
                _gaq.push(['_addIgnoredRef', 'tuanmei']);
                _gaq.push(['_setDomainName', '.jumei.com']);
                _gaq.push(['_setAllowHash', false]);
                _gaq.push(['_trackPageview']);


                window.jumeiSstatistics = window.jumeiSstatistics || [];
                window.jumeiSstatisticsAction = '';

                jumeiSstatistics.push(['log', '']);
                jumeiSstatistics.push(['lo', '']);
                jumeiSstatistics.push(['sid', '']);
                jumeiSstatistics.push(['cl', '']);
                jumeiSstatistics.push(['mat', '']);
                jumeiSstatistics.push(['bs', '[]']);
                jumeiSstatistics.push(['ps', '[]']);
                jumeiSstatistics.push(['uid', '']);
                jumeiSstatistics.push(['tm', '']);
                jumeiSstatistics.push(['act', '']);
                jumeiSstatistics.push(['aci', '[]']);
                jumeiSstatistics.push(['ip', '']);
                if(!JM.JMC_DEBUG ){ 
                    // adwq
                    (function() {
                        var getCookie = function(name){
                                var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
                                if(arr=document.cookie.match(reg))
                                    return (arr[2]);
                                else
                                    return null;
                            },
                            uid = getCookie('uid') || 0,
                            new_signup = getCookie('new_signup');

                        if ( new_signup !== null ){
                            _adwq.push(['_setAction',
                                '20rf07',
                                uid,         // 扩展参数, 可填 用户名 或 用户ID(可选)
                                'new_signup' // 事件价值 (可选)
                            ]);

                            document.cookie = 'new_signup=null; path=/; domain=' + JM.SITE_MAIN_TOPLEVELDOMAINNAME;
                        }

                        var adw = document.createElement('script');
                        adw.type = 'text/javascript';
                        adw.async = true;
                        adw.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://s') + '.emarbox.com/js/adw.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(adw, s);
                    })();

                    //ga
                    (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = 'http://s0.jmstatic.com/templates/jumei/js/jquery/dc.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                    })();

                    //baidu tongji
                    (function() {
                        var baidu_tongji = document.createElement('script'); baidu_tongji.type = 'text/javascript'; baidu_tongji.async = true;
                        baidu_tongji.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'hm.baidu.com/h.js?884477732c15fb2f2416fb892282394b';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(baidu_tongji, s);
                    })();

                    (function (d) {
                        window.bd_cpro_rtid="rjfzrHc";
                        var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
                        var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
                    })(document);

                    (function() {
                        if ( jumeiSstatisticsAction == 1 ){
                            //调用方式，调用必须在参数设置之后
                            var jm_tj = document.createElement('script');
                            jm_tj.type = 'text/javascript';
                            jm_tj.async = true;
                            jm_tj.src = 'http://p0.jmstatic.com/templates/jumei/images/jquery/Jumei.AdStatistics.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(jm_tj, s);
                        }
                    })();
                    //第三方 CRITEO 标签(TAG)跟踪器 代码
                    (function(){
                        var criteo=document.createElement('script'); criteo.type='text/javascript'; criteo.async=true; criteo.src='//static.criteo.net/js/ld/ld.js';
                        var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(criteo, s);
                        var isDetail = JM.ACTION === 'Detail', //详情页
                            isHome= JM.CONTROL ==='Home',  //首页
                            isHd = JM.ACTION === 'View',  //act专场页面
                            item_id='',
                            eventName;
                        window.criteo_q = window.criteo_q || [];

                        if(isHome || isHd){
                            eventName = 'viewHome';
                        }else if(isDetail){

                            item_id=window.JM_CRITEO_ID || "";
                            eventName = 'viewItem';

                        }
                        window.criteo_q.push(
                            { event: "setAccount", account: 16779 },
                            { event: "setHashedEmail", email: "" },
                            { event: "setSiteType", type: "d" },
                            { event: eventName, item: item_id, user_segment: "" }
                        );

                    })();
                    //第三方 金源互动（百度推广相关）代码
                    var _agt=_agt||[];
                    _agt.push(['_atscu','AG_774222_DMOV']);
                    _agt.push(['_atsdomain','jumei.com']);
                    (function(){
                        var ag=document.createElement('script');
                        ag.type='text/javascript';
                        ag.async = true;
                        ag.src=(document.location.protocol=='https:'?'https':'http')+'://'+'t.agrantsem.com/js/ag.js';
                        var s=document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(ag,s);
                    })();
                }
            </script>

            <!-- 晶赞 -->
            <script type="text/javascript">
                (function(){
                    var isMall = JM.CONTROL=='Mall' && JM.ACTION=='Mall',
                        chanelName;
                    var isAct = JM.CONTROL=='Special' && JM.ACTION=='View';
                    var isDetail = JM.ACTION === 'Detail';
                    //pop and baby
                    if(isMall){
                        chanelName='美妆商城';
                        window.__zp_tags_params = {
                              chanelName:chanelName
                        };
                    }else if(isDetail){
                        var _datas = window.PingY;
                         window.__zp_tags_params = {
                             pagetype:'detail',
                             productId:_datas['id'],
                             stock:_datas['soldOut'],
                             p_zp_prodstype:'53e29afa958a394f21589229dc6613ed',
                             p_zp_prods:{
                                "outerid": _datas['id'],//商品id
                                "name": _datas['name'],//商品名称
                                "brand": _datas['brand'],//品牌 如: 蝶翠诗 (DHC)
                                "category": _datas['category'],//一级分类 如: 化妆品
                                "subCategory": " ",//二级分类 如: 彩妆
                                "thirdCategory": " ",//三级分类 如: 卸妆
                                "price": _datas['price'], //商品现价,如 890 , 不包含币种
                                "value": _datas['origPrice'], //商品原价，若无则同原价
                                "image":_datas['imgUrl'],
                        //商品图片示例：http: //p0.jmstatic.com/product/000/000/3_std/3_350_350.jpg?_ut=1432795445",
                                "loc":window.location.href, //商品点击地址 "http://item.jumei.com/3.html?utm_source=jz"
                                "stock":_datas['soldOut']//是否在售 1:在售 、0:下线
                             }     
                        };
                    }else if(isAct){
                        window.__zp_tags_params = {
                        pagetype:"actPage"
                        }
                    }
                })();
                (function(param){
                    var c = {query:[], args:param||{}};
                    c.query.push(["_setAccount","428"]);
                    c.query.push(["_setSiteID","1"]);
                    (window.__zpSMConfig = window.__zpSMConfig||[]).push(c);
                    var zp = document.createElement("script"); zp.type = "text/javascript"; zp.async = true;
                    zp.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//cdn.zampda.net/s.js";
                    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(zp, s);
                })(window.__zp_tags_params);
                </script>
                <!-- 晶赞 -->
                <!-- 第三方 品友-->
                <script type="text/javascript">
                var getCookie = function(n){
                    var m = document.cookie.match(new RegExp( "(^| )"+n+"=([^;]*)(;|$)"));
                    return !m ? "":unescape(m[2]);
                };
                window.user_id = getCookie("last_reg");
                var isDetail = JM.ACTION === 'Detail';
                   _py = _py || [];
                if(isDetail){
                    var _goodsData =window.PingY;
                    var _py = _py || [];
                    _py.push(['a', '_d..wY1itoZJBOFwMNeSVmLboP']);
                    _py.push(['domain','stats.ipinyou.com']);
                    _py.push(['pi',_goodsData]);
                    _py.push(['e','']);
                    -function(d) {
                        var s = d.createElement('script'),
                            e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
                            f = 'https:' == location.protocol;
                        s.src = (f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/adv.js';
                    }(document);
                }else{
                    _py.push(['a', '_d..wY1itoZJBOFwMNeSVmLboP']);
                    _py.push(['domain','stats.ipinyou.com']);
                    _py.push(['e','']);
                    -function(d) {
                        if(window.user_id && window.user_id!=""){
                            (new Image()).src="{{ asset('Home/index1/http://openapi.ipinyou.com/openapi/dmp/v1/pushprofile?advid=5174a9e9e4c637af4a518a9d9a1338ed&u=') }}"+window.user_id;
                        }
                        var s = d.createElement('script'),
                            e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
                            f = 'https:' == location.protocol;
                        s.src = (f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/adv.js';
                    }(document);

                }
            </script>
            <noscript><img src="{{ asset('Home/index1/picture/adv.gif') }}" style="display:none;"/></noscript>
            <!-- 公共JS end -->
        </body>
    </html> 
@endforeach