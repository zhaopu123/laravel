@foreach($list as $v)
    @if($v->kg == 2)
        {{ exit("<script>alert('网页维护中，请稍后！');</script>") }}
    @endif
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>
            	{{ $v->title }}
            </title>
            <link rel="stylesheet" href="/Home/lists/css/jumei.min.css" type="text/css" media="screen" charset="utf-8">
            <link rel="stylesheet" href="/Home/lists/css/jumei_search.min.css" type="text/css" media="screen" charset="utf-8">
            <script type="text/javascript">
                with(window) {
                    RM_SITE_MAIN_WEBBASEURL='http://www.jumei.com/';
                    RM_SITE_MAIN_TOPLEVELDOMAINNAME='jumei.com';
                    RM_CURRENT_SITE_MAIN_WEBBASEURL='http://bj.jumei.com/';
                    RM_CONTROL='Search';
                    RM_ACTION='view';
                    RM_SERVER_TIME=1492587979;
                    RM_SITE='bj';
                    RM_IMGDIR='http://p0.jmstatic.com/templates/jumei/images';
                    RM_STATIC_DOMINNAME='http://static.jumei.com/';
                    RM_SITE_PASSPORT_WEBBASEURL='http://passport.jumei.com/';
                    RM_SITE_SEARCH_WEBBASEURL='http://search.jumei.com/';
                    RM_DEBUG=false;
                    RM_CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
            	    GA_ACCOUNT = "UA-10208510-1";
                    JM_CRITEO_ID = ["ht170419p1304253t2","ht170419p1333259t2",null];
                }
                var screen_wide = document.documentElement.clientWidth > 1200 ? true : false ;
                var keyword = '';
                var orderby = '默认';

                (function(){
                    if(screen_wide)
                    {
                        var head = document.getElementsByTagName('HEAD')[0];
                        var style = document.createElement('link');
                        style.href ='http://s0.jmstatic.com/templates/jumei/css/v52.5/jumei_newmall_wide_new.min.css?V1';//added by ericzheng，原始jumei_newmall_wide  为防止影响其他地方，换成jumei_newmall_wide_new
                        style.rel = 'stylesheet';
                        style.type = 'text/css';
                        head.appendChild(style);
                    }
                })()


                function getCookie(name)
                {
                    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
                    if(arr=document.cookie.match(reg))
                        return (arr[2]);
                    else
                        return null;
                }
                RM_UID = getCookie('uid') || 0;
                RM_NICKNAME = null;
                if ( getCookie('nickname') != null ){
                    RM_NICKNAME = decodeURIComponent(getCookie('nickname'));
                }

                //定义 ga 用到的全局变量
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

            </script>
            <script type="text/javascript" charset="utf-8" src="/Home/lists/js/938b4280efdc4706bddc492cd99c7736.js"></script>

        </head>

        <body  class="J_body_301">
            <div class="new_header_ab"> 
                <div class="header header_wide_lv2">
                    <div class="header_top">
                        <div class="header_top_box" >
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
                            </ul>
                            <div class="default-city">
                                <span class="add-city-icons">
                                    送至<span class="add-default-city">&nbsp;</span>
                                    <s class="icon_arrow_down"></s>
                                    <i class="user-local-icon"></i>
                                </span>
                                <div class="header-city-list"></div>
                            </div>
                            <ul class="header_top_right" id="headerTopRight">
                                <li><a href="/home/sign/order/0"  rel="nofollow">订单查询</a></li>
                                <li><a href="" rel="nofollow"><s class="icon_favorite"></s>收藏的品牌</a></li>
                                <li class="item_ijumei">
                                    <a href="/home/sign/order/0" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a>
                                    <div class="sub_nav">
                                        <ul>
                                            <li><a href="/home/sign/order/0" rel="nofollow">我的订单</a></li>
                                            <li><a href="" rel="nofollow">我的现金券</a></li>
                                            <li><a href="" rel="nofollow">我的红包</a></li>
                                            <li><a href="" rel="nofollow">我的余额</a></li>
                                            <li><a href="" rel="nofollow">我的提现退款</a></li>
                                            <li><a href="" rel="nofollow">我的心愿单</a></li>
                                            <li><a href="/home/sign/person" rel="nofollow">会员中心</a></li>
                                            <li><a href="" rel="nofollow">兑换礼品卡</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item_mobile"><a href="" rel="nofollow"><span class="line"></span><s class="icon_mobile"></s>手机聚美</a></li>
                                <li class="item_koubei"><a href=""><s class="icon_koubei"></s>口碑中心</a></li>
                                <li>
                                    <span class="line"></span>
                                <!-- 查看分类 -->
                                    <div class="look_all_box" id="look_all_box">
                                        <a class="look_all"><span>查看分类</span>
                                            <b class="grid png"></b>
                                            <b class="close png"></b>
                                        </a>
                                        <div class="class_list_wrap clearfix">
                                            <div class="pop_list_wrap">
                                                <div class="header_searchbox">
                                                    <form action="http://search.jumei.com" method="get" pos="top" class="" onsubmit="return mall_search_validate(this)">
                                                        <input name="filter" type="hidden" value="0-11-1">
                                                        <input name="search" type="text" class="header_search_input" id="mall_search_input" default_val="" autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" lang="zh">
                                                        <input name="from" type="hidden">
                                                        <input name="cat" type="hidden">
                                                        <button type="submit" class="header_search_btn" >搜索</button>
                                                    </form>
                                                    <div class="search_result_pop_a" id="top_search_pop_div"></div>
                                                </div>  
                                            </div>                       
                                        </div>
                                    </div>
                                <!-- 查看分类 end-->
                                </li>
                                <li class="item_more">
                                    <a href="">更多<s class="icon_arrow icon_arrow_down"></s></a>
                                    <div class="sub_nav">
                                        <s class="icon_arrow_up"></s>
                                        <s class="icon_arrow_inner"></s>
                                        <ul>
                                            <li><a href="" target="_blank" rel="nofollow">邀请好友</a></li>
                                            <li><a href="" rel="nofollow" id="bookmark_us"><span class="bottomline">加入收藏</span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">新浪微博<span style="display: none;"><img src="/Home/lists/picture/sina_er.png"></span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow">聚美微信<span style="display: none;"><img src="/Home/lists/picture/jumei_weixin_header1.png"></span></a></li>
                                            <li><a href="" class="er_box" target="_blank">百度贴吧</a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">腾讯微博<span style="display: none;"><img src="/Home/lists/picture/qq_er.png"></span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">人人公众主页<span style="display: none;"><img src="/Home/lists/picture/renren_er.png"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>  
                    <div class="header_center clearfix">
                        <h1 class="logo">
                                <a href="/home/index"  id="home"  title="聚美优品" style="background:url({{ asset('/Admin/upload/'.$v->pic) }}) no-repeat top left;">
                                化妆品品牌排行榜大全网站
                                聚美优品
                            </a>
                        </h1>
                        
                        <div class="header_searchbox header_mall_searchbox">
                            <form action="/home/list/{{ $cate->id }}" method="get" pos="top">
                                <input name="search" type="text" class="header_search_input" id="mall_search_input1" default_val=""  autocomplete="off" x-webkit-speech="" x-webkit-grammar="builtin:search" lang="zh">
                                <button type="submit" class="header_search_btn" >搜索</button>
                            </form>
                            <div class="search_result_pop_a" id="top_search_pop_div1"></div>
                        </div>
                        <div class="header_icon_wrap">
                            <div id="cart_box" class="cart_box">
                                <a id="cart" class="cart_link" href="/home/shopcart" rel="nofollow">
                                    <img src="/Home/lists/picture/cart.gif" width="28" height="28" class="cart_gif">
                                    <span class="text">去购物车结算</span>
                                    <s class="icon_arrow_right"></s>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="header_bottom">
                        <div class="channel_nav_box">
                            <div class="channel_nav_list_wrap clearfix">
                            <ul class="channel_nav_list">
                                <li>
                                    <a href="/home/index" class="home" target="_blank" >首页</a>
                                </li>
                                @foreach($cat as $ca)
                                    <li class="haitao_li"><a href="/home/list/{{ $ca->id }}">{{ $ca->name }}</a></li>
                                @endforeach
                            </ul>
                            <div class="header_pop_subAtc box-shadow" id="header_pop_subAct">
                            </div>
                                <!-- 加判断 -->
                                <ul id="icon_wrap" class="icon_Wrap">
                                    <li>
                                        <div class="divlist divlist01">
                                            <a target="_blank" href=""><span></span> <b>品牌防伪码</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="divlist divlist02">
                                            <a target="_blank" href=""><span class="th"></span> <b>30天无条件退货</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="divlist divlist03">
                                            <a target="_blank" href=""><span class="by"></span> <b>美妆满2件或299包邮</b></a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- 加判断 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div id="container"  >               
                    <div id="bread_container">
                        <a id="bread_prev" href="javascript:void(0);"></a>
                        <div class="bread_container_con">
                            <div class="search_crumb clearfix" style="width:1090px">
                                <ul class="clearfix fl bread_ul">
                                    <li class="bread_first_item"><a href="/home/index">聚美首页</a></li>
                                    <li><span>&gt;</span></li>
                                    <li><span>{{ $cate->name }}</span></li>
                                </ul>
                                <!--右侧搜索框 start -->
                                <!--<div class="right_search" id="J_bread_search">
                                    <form action="/" method="get" target="_self">
                                        <span class="bread_search_title" id="J_bread_search_title">在当前条件下搜索</span>
                                        <input type="text" class="bread_search_input" name="search" id="J_bread_search_input" value=""/>
                                        <input type="submit" value="" class="bread_search_img" id="J_right_search_submit"/>
                                    </form>
                                </div>-->
                                <!--右侧搜索框 end--> 
                            </div>
                        </div>
                        <a id="bread_next" href="javascript:void(0);"></a>
                    </div>
                        
                    <div id="body">
                    <div id="search_result_wrap">
                        <div class="search_info" id="J_search_info"></div>
                        <!--存在搜索结果显示的 页面内容 start-->       
                        <!--<div class="search_filter_title">
                            <div class="search_filter_top">
                                <strong>在<span></span>中筛选 <label>（多选模式，每个属性最多可同时选5个选项）</label></strong>
                            </div>
                        </div> -->
                        <!--<div class="search_filter">
                            <div class="filter_con">
                                <div class="filter_tit">关键字:</div>
                                <div class="filter_attrs" id="filter_brand">
                                    <ul>
                                        <li rel="Y" title="雅漾" pinyin="yayang" class="">
                                            <a name="382"  id="item_0_382" href="http://search.jumei.com/?filter=0-11-1&search=&brand=382&cat=10">
                                                雅漾
                                            </a>
                                        </li>
                                        <li rel="E" title="伊诗露" pinyin="esthedew" class="">
                                            <a name="3049"  id="item_0_3049"href="http://search.jumei.com/?filter=0-11-1&search=&brand=3049&cat=10">
                                                伊诗露
                                            </a>
                                        </li>
                                         <li rel="D" title="城野医生" pinyin="drcilabo" class="">
                                            <a name="6083"  id="item_0_6083" href="http://search.jumei.com/?filter=0-11-1&search=&brand=6083&cat=10">
                                                城野医生
                                            </a>
                                        </li>
                                        <li rel="K" title="科颜氏" pinyin="keyanshi" class="">
                                            <a name="51"  id="item_0_51" href="http://search.jumei.com/?filter=0-11-1&search=&brand=51&cat=10">
                                                科颜氏
                                            </a>
                                        </li>
                                            <li rel="N" title="naturie" pinyin="naturie" class="">
                                            <a name="798"  id="item_0_798"  href="http://search.jumei.com/?filter=0-11-1&search=&brand=798&cat=10">
                                                naturie
                                            </a>
                                        </li>                          
                                    </ul>
                                    <div class="placeholder_line"></div>
                                    <div class="bottom_multi_selecteds">
                                        <label class="filter_tit_wide">已选品牌:</label>
                                        <div class="bms_container">
                                            <span style="display: none;" class="search_current_item">0</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" class="btn_fliter_expan" title="展开">展开</a>
                                <a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
                                <div class="multi_buttons clearfix">
                                    <p class="btn_multi_hint">提示:最多可同时选5个选项</p> 
                                    <div class="multi_area">
                                        <a href="javascript:;" class="btn_multi_submit" title="确定" id="btn_multi_submit" name="0"></a>
                                        <a href="/Home/lists/#container" title="重选" class="btn_multi_reset J_btn_multi_reset" id="btn_multi_reset"></a>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="filter_con">
                                <div class="filter_tit">价格:</div>
                                <div class="filter_attrs" id="filter_price">
                                    <ul>
                                        <li title="">
                                            <a name="0-109" id="item_3_0-109" href="http://search.jumei.com/?filter=0-11-1&search=&cat=10&price=0-109">
                                                0-109元
                                            </a>
                                        </li>
                                        <li title="">
                                            <a name="110-219" id="item_3_110-219" href="http://search.jumei.com/?filter=0-11-1&search=&cat=10&price=110-219">
                                                110-219元
                                            </a>
                                        </li>
                                        <li title="">
                                            <a name="220-429" id="item_3_220-429" href="http://search.jumei.com/?filter=0-11-1&search=&cat=10&price=220-429">
                                                220-429元
                                            </a>
                                        </li>
                                        <li title="">
                                            <a name="430-699" id="item_3_430-699" href="http://search.jumei.com/?filter=0-11-1&search=&cat=10&price=430-699">
                                                430-699元
                                            </a>
                                        </li>
                                        <li title="">
                                            <a name="700" id="item_3_700" href="http://search.jumei.com/?filter=0-11-1&search=&cat=10&price=700">
                                                700元以上
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="placeholder_line"></div>
                                    <div class="bottom_multi_selecteds">
                                        <label class="filter_tit_wide">已选价格:</label>
                                        <div class="bms_container">
                                            <span style="display: none;" class="search_current_item">3</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" class="btn_fliter_expan" title="展开">展开</a>
                                <a href="javascript:;" class="btn_fliter_multi J_btn_fliter_multi" id="search_filter_brand" title="开启多选"></a>
                                <div class="multi_buttons clearfix">
                                    <div class="multi_area">
                                        <a href="javascript:;" class="btn_multi_submit" title="确定" id="btn_multi_submit" name="3"></a>
                                        <a href="/Home/lists/#container" title="重选" class="btn_multi_reset J_btn_multi_reset" id="btn_multi_reset"></a>
                                    </div>
                                </div>
                            </div>
                        </div>  -->     
                        <div id="search_list_wrap">
                            <div style="display:none" id="s_r_t" name="搜索点击流用">1</div>
                            <div class="search_list_head_fiex">
                                <div class="search_list_head">
                                    <div class="slh_label">排序:</div>
                                    <ul>
                                        <li class="selected">
                                            <a class="down">默认</a>
                                        </li>
                                        <li class="">
                                            <a href="http://search.jumei.com/?filter=0-20-1&search=&cat=10#search_list_wrap" class="price_sort up">价格</a>
                                        </li>
                                        <li >
                                            <a class="add_time" href="http://search.jumei.com/?filter=0-31-1&search=&cat=10#search_list_wrap">上架时间</a>
                                        </li>
                                    </ul>
                                    <!--头部分页-->
                                    <div class="head_pagecount">
                                        共<span>{{ count($total) }}</span>个商品
                                    </div>
                                </div>
                            </div>
                            <div class="products_wrap">
                                @foreach($pro as $p)
                                    <ul>
                                        <!--deal start-->
                                        <li class="hai item" pid="1304253" price="99" bid="382" cid="10" search_product_type="global_deal" h_p_m_id="ht170419p1304253t2" product_type="global_deal">
                                            <div class="item_wrap clearfix  ">
                                                <!--商品的hover展示-->
                                                <div class="item_wrap_right">
                                                    <div class="s_l_pic">
                                                        <div class="icon_wrap clearfix">
                                                            <div class="haiwai  haiwai_new "></div>
                                                        </div>
                                                        <a href="/home/info/{{ $p->id }}" target="_blank">
                                                            <img original="picture/1304253_350_350.jpg" width="255" height="255" src="/Admin/upload/{{ $p->pic }}" style="display:inline;">
                                                        </a>
                                                    </div>

                                                    <div class="s_l_name">
                                                    </div>
                                                    <div class="s_l_view_bg">
                                                        <div class="search_deal_buttom_bg clearfi">
                                                            {{ $p->pname }}
                                                        </div>
                                                        <div class="search_list_price">
                                                            <label>¥</label>
                                                            <span>{{ $p->money }}</span>
                                                            <del>&yen;{{ ($p->money)*2 }}</del>                                                                                                                                                                                   
                                                        </div>
                                                    </div>
                                                    <div class="search_deal_buttom_bg clearfix">
                                                    </div>
                                                    <div class="search_list_button">                                                                                                                          
                                                    </div>
                                                    <!--功效-->
                                                    <p class="search_list_tags">
                                                        <span>保湿</span>
                                                        <span>补水</span>
                                                        <span>滋润</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </li> 
                                        <!--global deal end-->
                                        <!--mall start-->
                                    </ul>
                                @endforeach
                                <div class="clear"></div>
                            </div>

                            <div style="display:none;">
                                <i id="brand_id"></i>
                                <i id="search_keywords"></i>
                            </div>
                            <div class="page-nav-wrapper">
                                <ul class="page-nav">
                                    <li>
                                        {{ $pro->appends($where)->links() }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--存在搜索结果显示的 页面内容 end-->
                        
                        <!--可能喜欢-->
                            
                        <!--最终购买 异步ajax-->
                        <div class="search_last_buy" search=""></div>

                        <script>
                            $(function(){
                                var screen_wide = document.documentElement.clientWidth > 1200 ? true : false ;
                                if(screen_wide){
                                    $('#browse_history').addClass('browse_history_wide');
                                }
                            });
                        </script>      
                    </div>
                </div>
            </div>
            <script>
                var _search_word = '';
                var url_brand = '0';
                var url_category ='10';
                var url_function ='0';
                var url_price ='';
            </script>
            <script type="text/javascript" src="/Home/lists/js/carousel.basic.js"></script>

            <script type="text/javascript">
                $(function(){
                    var small_length;

                    if(_search_word !=''){
                        $("#mall_search_input").val(_search_word);
                    }
                    $("#search_footer_input").JumeiSearch('foot_search_pop_div');
                    $(".filter_con:last").css("border-bottom", "none");
                     /*鼠标移上显示浮动框*/
                    $("#search_result_wrap ul li.item").hover(function(){
                        if($(this).parents().hasClass("section")){
                            return;
                        }
                        var self = this,
                            hideTimer = $( self ).data( 'hideTimer' ),
                            showTimer,
                            offset_left = $(self).offset().left;
                            if(offset_left>$(window).width()-offset_left){
                                $(self).addClass("left");
                            }

                        clearTimeout( hideTimer );
                        var isIe6=false;
                        if($.browser.msie && parseInt($.browser.version)==6){
                            isIe6=true;
                        }

                        showTimer = setTimeout(function(){
                           small_length=$(self).find(".cs_list").children().length;
                           if(small_length<=2){
                               if(screen_wide){
                                   if(isIe6){
                                       $(self).addClass("hover_sm").find(".item_wrap").css("left","0px");
                                   }else{
                                       $(self).addClass("hover_sm").find(".item_wrap").css("left","-16px");
                                   }
                               }else{
                                   $(self).addClass("hover_sm");
                               }
                           }else{

                                if($(self).hasClass("left")){
                                    if(screen_wide){
                                        $(self).addClass("hover").find(".item_wrap").css("left","-121px");
                                    }else{
                                        $(self).addClass("hover");
                                    }
                                    $(self).find(".item_wrap_left").show();
                                }else{
                                    if(screen_wide){
                                        $(self).addClass("hover").find(".item_wrap").css("left","-14px");//1090 宽屏情况
                                    }else{
                                        $(self).addClass("hover").find(".item_wrap").css("left","-10px");//960 情况
                                    }
                                    $(self).find(".item_wrap_left").css("float","right").show();
                                    $(self).find(".item_wrap_right").css("float","left");
                                }
                                var carousel = new $.ui.Carousel($(self).find(".item_wrap_left"), {
                                    indexSwitch : false,
                                    vertical : true,
                                    singleSlide : true
                                });
                                $(self).data('carousel',carousel);
                                $(self).find(".cs_prev").click(function(){
                                    $(this).next().next().removeClass("disabled");
                                    var top_distance=Math.abs(parseInt($(this).next(".cs_wrapper").find(".cs_list").css("top")));
                                    if(top_distance<=0){
                                        $(this).addClass("disabled");
                                        
                                    }
                                });

                                $(self).find(".cs_next").click(function(){
                                    $(this).prev().prev().removeClass("disabled");
                                    var top_distance=Math.abs(parseInt($(this).prev(".cs_wrapper").find(".cs_list").css("top")));
                                    var small_length=$(this).prev(".cs_wrapper").find(".cs_list").children().length;

                                    if((small_length-3)*69==top_distance){
                                        $(this).addClass("disabled");
                                    };
                                });               
                            }
                         } , 50 );

                        $( self ).data( 'showTimer', showTimer );
                    },function(){
                        var self = this,
                            $elem = $( self ),
                            showTimer = $elem.data( 'showTimer' );

                        clearTimeout( showTimer );

                        hideTimer = setTimeout(function(){
                            if(small_length<=2){
                                $elem.removeClass("hover_sm");
                            }
                            else{
                                $elem.removeClass("hover");
                                $elem.find(".item_wrap_left").hide();
                                var carousel= $elem.data('carousel');
                                if( carousel ){
                                    carousel.destroy();  
                                }
                            }
                        }, 50 );

                        $elem.data( 'hideTimer', hideTimer );
                    });

                     /*缩略图切换*/
                    $("#search_result_wrap .item_wrap_left li").hover(function(){

                        $(this).siblings().removeClass("active");
                        $(this).siblings().find("span").hide();
                        $(this).addClass("active");
                        $(this).find("span").show();
                        $(this).parents(".item_wrap_left").siblings(".item_wrap_right").find("img").attr("src",$(this).find("img").attr('big'));
                    
                    },function(){

                        $(this).siblings().removeClass("active");
                        $(this).siblings().find("span").hide();

                    });

                    /*
                    var $content = $("<div id='back-to-top' style='display: none;'><a class='button_feedback' href='http://www.jumei.com/i/feedback?feedback_from={$controllerName}' target='_blank'></a> <a class='button_back-to-top' href='#'></a> </div>");
                    $('body').append($content);
                    $(window).scroll(function(){
                        var window_height = $(window).height();
                        var position = $('#back-to-top').position();
                        if( $.browser.msie && $.browser.version == '6.0' ){
                            var top = $(window).scrollTop()+window_height-$('#back-to-top').height()-10;
                            if(position.top > window_height ){
                                $('#back-to-top').hide().css( {'position':'absolute', 'top':top} ).fadeIn('fast');
                            }else{
                                $('#back-to-top').fadeOut('fast');
                            }
                        }else{
                            if(position.top > window_height ){
                                $('#back-to-top').fadeIn('fast');
                            }else{
                                $('#back-to-top').fadeOut('fast');
                            }
                        }
                    });*/
                });
            </script>
            <div class="clear"></div>

            <div id="footer_container" >
                <div id="footer_textarea">
                    <div style="display:none"><a href="http://www.jumei.com/deals/new.html">每日更新</a></div>
                    <textarea style="display: none">                            
                        <div class="footer_top">
                            <div class="footer_con" id="footer_credit">
                                <a  href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" class="foot_link mostmall" target="_blank" rel="nofollow">
                                    <span class="first corn"></span><span class="con"><b>值得信赖美妆商城</b></span>四千万用户信赖
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#jumei_ipo" class="foot_link quality" target="_blank"  rel="nofollow">
                                    <span class="corn"></span><span class="con"><b>成功在美上市</b></span>股票代码NYSE:JMEI
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#brand_con" class="foot_link back" rel="nofollow" target="_blank">
                                    <span class="corn"></span><span class="con"><b>品牌防伪码</b></span>支持品牌官网验真
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#unconditionally_backtrack" class="foot_link depot" target="_blank" rel="nofollow">
                                    <span class="corn"></span><span class="con"><b>30天无理由退货</b></span>只要不满意无理由退货
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#user_confide" class="foot_link consignment" target="_blank" rel="nofollow">
                                    <span class="corn"></span><span class="con"><b>百万用户口碑</b></span>帮你只选对的,不选贵的
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#bold_consignment" class="foot_link packaging" target="_blank" rel="nofollow">
                                    <span class="corn"></span><span class="con"><b>订单闪电发货</b></span>1.5小时订单急速出库
                                </a>
                                <a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#star_commend" class="foot_link confide" target="_blank" rel="nofollow">
                                    <span class="corn"></span><span class="con"><b>大牌明星热荐</b></span>打造精致明星脸
                                </a>
                            </div>
                        </div>
                        <div class="footer_top_sen">
                            <div class="footer_con" id="footer_links">
                                <ul class="linksa png">
                                    <li class="links">服务保障</li>
                                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer&site=bj#brand_con" target="_blank" rel="nofollow">品牌真品防伪码</a></li>
                                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" target="_blank" rel="nofollow">100%正品保证</a></li>
                                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer#unconditionally_backtrack" target="_blank" rel="nofollow">30天无条件退货</a></li>
                                    <li><a href="http://www.jumei.com/help/faq?from=footer" target="_blank" rel="nofollow">7×24小时客服服务</a></li>
                                    <li><span class="footer_zcemail">总裁邮箱ceo@jumei.com</span></li>
                                </ul>

                                <ul class="linksb png">
                                    <li class="links">使用帮助</li>
                                    <li><a href="http://www.jumei.com/help/guidebook?from=footer" target="_blank" rel="nofollow">新手指南</a></li>
                                    <li><a href="http://www.jumei.com/help/faq?from=footer" target="_blank" rel="nofollow">常见问题</a></li>
                                    <li><a href="http://www.jumei.com/help/main?from=footer" target="_blank" rel="nofollow">帮助中心</a></li>
                                    <li><a href="http://www.jumei.com/i/help/user_terms?from=footer" target="_blank" rel="nofollow">用户协议</a></li>
                                    <!--
                                    <li><a href="http://www.jumei.com/activity_qiye_tuangou.html?from=footer" target="_blank" rel="nofollow">企业用户团购</a></li>
                                    -->
                                </ul>

                                <ul class="linksc png">
                                    <li class="links">支付方式</li>
                                    <li><a href="http://www.jumei.com/help/pay_cod?from=footer" target="_blank" rel="nofollow">货到付款</a></li>
                                    <li><a href="http://www.jumei.com/help/pay_online?from=footer" target="_blank" rel="nofollow">在线支付</a></li>
                                    <li><a href="http://www.jumei.com/help/pay_balance?from=footer" target="_blank" rel="nofollow">余额支付</a></li>
                                    <li><a href="http://www.jumei.com/help/pay_promocards?from=footer" target="_blank" rel="nofollow">现金券支付</a></li>
                                </ul>

                                <ul class="linksd png">
                                    <li class="links">配送方式</li>
                                    <li><a href="http://www.jumei.com/help/two_for_freeshipping?from=footer" target="_blank" rel="nofollow">包邮政策</a></li>
                                    <li><a href="http://www.jumei.com/help/delivery_state?from=footer" target="_blank" rel="nofollow">配送说明</a></li>
                                    <li><a href="http://www.jumei.com/help/delivery_fee?from=footer" target="_blank" rel="nofollow">运费说明</a></li>
                                    <li><a href="http://www.jumei.com/help/check_goods?from=footer" target="_blank" rel="nofollow">验货签收</a></li>
                                </ul>

                                <ul class="linkse png">
                                    <li class="links">售后服务</li>
                                    <li><a href="http://hd.jumei.com/act/6-478-2232-guarantee.html?from=footer" target="_blank" rel="nofollow">正品承诺</a></li>
                                    <li><a href="http://www.jumei.com/help/faq?from=footer" target="_blank" rel="nofollow">售后咨询</a></li>
                                    <li><a href="http://www.jumei.com/help/refund_policies?from=footer" target="_blank" rel="nofollow">退货政策</a></li>
                                    <li><a href="http://www.jumei.com/help/refund_handle?from=footer" target="_blank" rel="nofollow">退货办理</a></li>
                                </ul>

                                <span class="links_er_box">
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
                                </span>
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
                        
                        <div id="footer_copyright">
                            <div class="footer_con">
                                <p class="footer_copy_con">
                                    {{ $v->copy }}
                                    客服热线：400-123-8888
                                    <br>
                                    京公网安备 11010102001226 | <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="nofollow">京ICP备10046944号</a> | 食品流通许可证 SP1101051110165515（1-1）
                                    | <a href="http://p2.jmstatic.com/activity/2013_chuangrui.jpeg" target="_blank" rel="nofollow">营业执照</a>
                                </p>
                                <p>
                                    <a href="javascript:void(0)" class="footer_copy_logo logo01" rel="nofollow"></a>
                                    <a href="/Home/lists/https://www.itrust.org.cn/yz/pjwx.asp?wm=1693268180" target="_blank" class="footer_copy_logo logo02" rel="nofollow"></a>
                                    <a href="javascript:void(0)" class="footer_copy_logo logo03" rel="nofollow"></a>
                                    <a href="javascript:void(0)" class="footer_copy_logo logo04" rel="nofollow"></a>
                                    <a href="/Home/lists/https://ss.knet.cn/verifyseal.dll?sn=e12070911010031011307708&ct=df&pa=453163" target="_blank" class="footer_copy_logo logo05" rel="nofollow"></a>
                                </p>
                                <script>function change_urlknet(eleId){var str= document.getElementById(eleId).href;var str1 =str.substring(0,(str.length-6));str1+=RndNum(6);document.getElementById(eleId).href=str1;}function RndNum(k){var rnd="";for (var i=0;i<k;i++){rnd+=Math.floor(Math.random()*10);}return rnd;}</script> 
                            </div>
                        </div>
                    </textarea>
                </div>
            </div>

            <!-- 第三方 亿玛-->
            <script type="text/javascript"> 
                var _adwq = _adwq || []; 
                _adwq.push(['_setAccount', '1ng4e']); 
                _adwq.push(['_setDomainName', '.jumei.com']);  //如果网站有多个域名请根据实际填写
                _adwq.push(['_trackPageview']); 

                (function() { 
                var adw = document.createElement('script'); 
                adw.type = 'text/javascript'; 
                adw.async = true; 
                adw.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://s') + '.emarbox.com/js/adw.js'; 
                var s = document.getElementsByTagName('script')[0]; 
                s.parentNode.insertBefore(adw, s); 
                })(); 
            </script> 
            <!--第三方 亿玛 end -->
            <!-- 第三方  金源互动（百度推广相关）-->
            <script type='text/javascript'>
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
            </script>
            <!-- 第三方  金源互动（百度推广相关） end-->
            <!-- 第三方 CRITEO 标签(TAG)跟踪器 代码-->
            <script type="text/javascript" src="/Home/lists/js/ld.js" async="true"></script>
            <!-- 第三方 CRITEO 标签(TAG)跟踪器 代码 end-->
            <!-- 第三方 品友-->
            <script>
                var _py = _py || [];
                _py.push(['a', '_d..wY1itoZJBOFwMNeSVmLboP']);
                _py.push(['domain','stats.ipinyou.com']);
                _py.push(['e','']);
                -function(d) {
                    var s = d.createElement('script'),
                        e = d.body.getElementsByTagName('script')[0]; e.parentNode.insertBefore(s, e),
                        f = 'https:' == location.protocol;
                    s.src = (f ? 'https' : 'http') + '://'+(f?'fm.ipinyou.com':'fm.p0y.cn')+'/j/adv.js';
                }(document);

            </script>
            <!-- 第三方 品友 end-->
            <!-- MediaV -->
            <script type="text/javascript">
                var _mvq = _mvq || [];
                _mvq.push(['$setAccount', 'm-183-0']);
                _mvq.push(['$logConversion']);
                (function() {
                    var mvl = document.createElement('script');
                    mvl.type = 'text/javascript'; mvl.async = true;
                    mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(mvl, s);
                })();
            </script> 
            <!-- MediaV end-->
            <!-- 晶赞 -->
            <script type="text/javascript">
                if( JM_CRITEO_ID != null ) {
                   //晶赞代码 
                    window.__zp_tags_params = {
                        pagetype:"searchPage",
                        productId_list:window.JM_CRITEO_ID,
                        keyword:  window.keyword,
                        orderby: window.orderby
                    };
                    (function(param){
                        var c = {query:[], args:param||{}};
                        c.query.push(["_setAccount","428"]);
                        c.query.push(["_setSiteID","1"]);
                        (window.__zpSMConfig = window.__zpSMConfig||[]).push(c);
                        var zp = document.createElement("script"); zp.type = "text/javascript"; zp.async = true;
                        zp.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//cdn.zampda.net/s.js";
                        var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(zp, s);
                    })(window.__zp_tags_params);
                }
            </script>
            <!-- 晶赞 end-->
                <script type="text/javascript" charset="utf-8" src="/Home/lists/js/sea.js"></script>
                <script type="text/javascript" charset="utf-8" src="/Home/lists/js/ibar.min.js"></script>    
                <script type="text/javascript" charset="utf-8" src="/Home/lists/js/jumei.search.min.js"></script>                
            <script type="text/javascript">
                $(document).ready(function ()
                {
                    Jumei.Core.init();
                            Jumei.Search.init();
                        for(var i in Jumei.Core.afterInitFunctions)
                        Jumei.Core.afterInitFunctions[i].call();
                });

            	//ga
            	(function() {
            	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            	    ga.src = 'http://s0.jmstatic.com/templates/jumei/js/jquery/dc.js';
            	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            	})();
            	
            	//baidu tongji
            	(function() {
            	    var baidu_tongji = document.createElement('script'); baidu_tongji.type = 'text/javascript';
            	    baidu_tongji.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'hm.baidu.com/h.js?884477732c15fb2f2416fb892282394b';
            	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(baidu_tongji, s);
            	})();
            	
            	<!-- 
                	(function (d) {
                	window.bd_cpro_rtid="rjfzrHc";
                	var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
                	var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
                	})(document);
            	//-->        	
            </script>
            <script type="text/javascript" charset="utf-8" src="/Home/lists/js/jumei.clickmap.min.js"></script>
        </body>
    </html>
@endforeach