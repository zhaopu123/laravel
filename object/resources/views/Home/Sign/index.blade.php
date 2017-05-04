@foreach($list as $v)
    @if($v->kg == 2)
        {{ exit("<script>alert('网页维护中，请稍后！');</script>") }}
    @endif
    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta property="qc:admins" content="56207406376255516375">
            <title>{{ $v->title }}</title>
            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/ty_rum.js') }}"></script>
            <link rel="stylesheet" href="{{ asset('/Home/Sign/css/jumei.min.css') }}" type="text/css" media="screen" charset="utf-8">
            <link rel="stylesheet" type="text/css" href="{{ asset('/Home/Sign/css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('/Home/Sign/css/jumei_usercenter.min.css') }}" type="text/css" media="screen" charset="utf-8">
                
            <script type="text/javascript">
                with(window) {
                    RM_SITE_MAIN_WEBBASEURL='';
                    RM_SITE_MAIN_WEBBASEURL_BACK='';
                    RM_SITE_PASSPORT_WEBBASEURL='';
                    RM_SITE_MAIN_TOPLEVELDOMAINNAME='';
                    RM_CONTROL='Order';
                    RM_ACTION='list';
                    RM_IMGDIR='';
                    RM_CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
                    GA_ACCOUNT = "UA-10208510-1";
                }
                var screen_wide = document.documentElement.clientWidth > 1200 ? true : false ;
                // var SiteSwitch = '{$SiteSwitch}';

                function getCookie(name)
                {
                    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
                    if (arr=document.cookie.match(reg)) {
                        return (arr[2]);
                    } else {
                        return null;
                    }
                }
                RM_UID = getCookie('uid') || 0;
                RM_NICKNAME = null;
                if ( getCookie('nickname') != null ){
                    RM_NICKNAME = decodeURIComponent(getCookie('nickname'));
                }
                var is_semwinner = false;
                if(getCookie('etc_n') == 'true'){
                    is_semwinner = true;
                }

                window._adwq = window._adwq || [];
                _adwq.push(['_setAccount', '1ng4e']);
                _adwq.push(['_setDomainName', '.jumei.com']);
                _adwq.push(['_trackPageview']);

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

            </script>

            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/website.min.js') }}"></script>
            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/jquery.all_plugins_v1.min.js') }}"></script>
            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/jumei.account.js') }}"></script>
            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/jumei.core.min.js') }}"></script>

        </head>
        <!-- KEEP THIS!
        <body>
        -->
        <body>

             <!--当前控制器和方法开始-->

            <script language="javascript" type="text/javascript">
                var new_user_control_24 = 'order',
                    new_user_action_24 = 'list',
                    new_user_registerType_24 = '',
                    new_user_redirct_24 = '';
            </script>

            <!--当前控制器和方法结束-->
            <div class="new_header_ab">
                <div class="header header_wide_lv1 w960">
                    <div class="header_top">
                        <div class="header_top_box" >
                            <ul class="header_top_left" id="headerTopLeft">
                                <li>欢迎您，</li>
                                <li><a href="/home/sign/person" rel="nofollow">{{ session('adminuser')['name'] }}</a></li>
                                <li><a href="{{ asset('home/over') }}" rel="nofollow">退出</a></li>
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
                                <li><a href="/home/sign/order/0" rel="nofollow">订单查询</a></li>
                                <li><a href="" rel="nofollow" ><s class="icon_favorite"></s>收藏的品牌</a></li>
                                <li class="item_ijumei">
                                    <a href="/home/sign/order/0" rel="nofollow">我的聚美<s class="icon_arrow_down"></s></a>
                                    <div class="sub_nav">
                                        <ul>
                                            <li><a href="/home/sign/order/0" rel="nofollow">我的订单</a></li>
                                            <li><a href="" rel="nofollow">我的现金券</a></li>
                                            <li><a href="" rel="nofollow">我的红包</a></li>
                                            <li><a href="" rel="nofollow">我的余额</a></li>
                                            <li><a href="" rel="nofollow">我的收藏</a></li>
                                            <li><a href="" rel="nofollow">我的心愿单</a></li>
                                            <li><a href="/home/sign/person" rel="nofollow">会员中心</a></li>
                                            <li><a href="" rel="nofollow">兑换礼品卡</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="item_mobile">
                                    <a href="/home/index" rel="nofollow"><span class="line"></span><s class="icon_mobile"></s>手机聚美</a>
                                </li>
                                <li>
                                    <span class="line"></span>
                                </li>
                                <li class="item_more">
                                    <a href="javascript:void(0)">更多<s class="icon_arrow icon_arrow_down"></s></a>
                                    <div class="sub_nav">
                                        <s class="icon_arrow_up"></s>
                                        <s class="icon_arrow_inner"></s>
                                        <ul>
                                            <li><a href="" target="_blank" rel="nofollow">邀请好友</a></li>
                                            <li><a href="" rel="nofollow" id="bookmark_us"><span class="bottomline">加入收藏</span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">新浪微博<span style="display: none;"><img src="{{ asset('Home/Sign/picture/sina_er.png') }}"></span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow">聚美微信<span style="display: none;"><img src="{{ asset('Home/Sign/picture/jumei_weixin_header1.png') }}"></span></a></li>
                                            <li><a href="" class="er_box" target="_blank">百度贴吧</a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">腾讯微博<span style="display: none;"><img src="{{ asset('Home/Sign/picture/qq_er.png') }}"></span></a></li>
                                            <li><a href="" class="er_box" rel="nofollow" target="_blank">人人公众主页<span style="display: none;"><img src="{{ asset('Home/Sign/picture/renren_er.png') }}"></span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="header_center clearfix" style="float:left;margin-left:160px;">
                	    <h1 class="logo">
                            <a href="/home/index" id="home" title="聚美优品" style="background:url({{ asset('/Admin/upload/'.$v->pic) }}) no-repeat top left;">
                                化妆品品牌排行榜大全网站
                                聚美优品
                            </a>
                        </h1>
                        <div class="header_icon_wrap">
                	        <div id="cart_box" class="cart_box">
                	            <a id="cart" class="cart_link" href="/home/shopcart" rel="nofollow">
                	                <img src="{{ asset('Home/Sign/picture/cart.gif') }}" width="28" height="28" class="cart_gif">
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
                                    <li><a href="/home/index" class="home">首页</a></li>
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
                                            <a target="_blank" href=""><span></span><b>品牌防伪码</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="divlist divlist02">
                                            <a target="_blank" href=""><span class="th"></span><b>美妆30天无理由退货</b></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="divlist divlist03">
                                            <a target="_blank" href=""><span class="by"></span><b>美妆满2件或299包邮</b></a>
                                        </div>
                                    </li>
                                </ul>
                                <!-- 加判断 -->
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="profile">
                <script src="{{ asset('Home/Sign/js/jquery.selectui.min.js') }}"></script>
                <!--[if lte IE 8]>
                    <script src="{{ asset('Home/Sign/js/jumei.usercenter.ie.min.js') }}"></script>
                <![endif]-->
                <div class="nav">
                    <div class="notice">
                        <a href="/home/sign/person" target="_blank" style="border-bottom:0;padding:0;">
                            <img src="/Admin/upload/{{ session('adminuser.pic') }}">
                        </a>
                        <p class="nickname"><a style="padding-left:0;line-height:1.8;color:#ed145b;" href="/home/sign/person" target="_blank">{{ session('adminuser.name') }}</a></p>
                        <p><a style="padding-left:0;line-height:normal;" href="/i/membership" target="_blank">普通会员</a></p>
                        <p class="uid">用户ID: {{ session('adminuser.id') }}</p>

                        <!--<p>可提现余额：{$balance}元</p>
                        <p>不可提现余额：{$balance_no_withdraw}元</p>-->
                    </div>
                    <h2><b></b>我的聚美优品</h2>
                    <a href="/home/sign/order/0" class="list selected"><b></b>我的订单</a>
                    <a href="" class="wish"><b></b>我的心愿单</a>
                    <a href="" class="fav"><b></b>我的收藏</a>
                    <a href="" class="member"><b></b>我的会员等级</a>
                    <a href="" class="cards"><b></b>我的现金券</a>
                    <a href="" class="envelope"><b></b>我的红包</a>
                    <a href="" class="credit"><b></b>我的金币</a>
                    <!-- <a href="/i/activity/mycode" class="code new"><b></b>我的邀请码</a> -->
                    <!-- <a href="/i/account/trial_apply" class="trial"><b></b>我的Free派</a>  -->
                    <a href="" class="code new"><b></b>我的尺码</a>
                    <a href="" class="subscribe"><b></b>订阅邮件短信</a>
                    <h2><b></b>管理个人账户</h2>
                    <a href="" class="balance"><b></b>我的余额</a>
                    <a href="" class="balance"><b></b>我的提现退款</a>
                    <!-- <a href="/i/giftcard/list" class="giftcard"><b></b>我的礼品卡</a> -->
                    <a href="" class="gift"><b></b>礼品卡兑换</a>
                    <a href="/home/sign/person" class="settings"><b></b>设置账户信息</a>
                    <a href="/home/sign/pass" class="password"><b></b>修改密码</a>
                    <a href="" class="bind"><b></b>绑定手机</a>
                    <a href="/home/sign/addr" class="addr"><b></b>管理收货地址</a>
                    <a href="" class="share"><b></b>绑定站外分享</a>
                    <h2><b></b>售后服务</h2>
                    <a href="" class="rmapre"><b></b>我的售后服务</a>
                    <a href="" class="rmalist"><b></b>我的退货</a>
                    <h2><b></b>聚美惊喜</h2>
                    <a href="" class="lucky"><b></b>我的喜从盒来</a>
                    <!-- <a href="/i/membership/gift_card" class="gift"><b></b>兑换VIP卡</a>-->
                </div>
                <div id='content'>
                    @yield('content')
                </div>
                <div class="dc_fix"><a href="" target="_blank"></a></div>

                <style>
                    .profile td a.sp_icon {
                        display: inline-block;
                    }
                    .order_package span {
                        padding-right: 0;
                    }
                    .profile .filter+table th {
                        border: 1px solid rgb(219, 214, 208);
                        border-top: 0;
                    }
                </style>

                <style type="text/css">
                    #dialog2{display: block;height:207px;width: 394px;position: relative;padding-top:30px;overflow:hidden;}
                    #cboxContent{border:none;background:url("{{ asset('/Home/Sign/images/corn_line.jpg') }}") repeat-x bottom center;background-color:#767676;}
                    #cboxLoadedContent{margin-top:28px;}
                    #cboxTitle{font-size:14px;color:#FFF;top:0px;}
                    #cboxClose{top:0;text-indent:9999px;height:28px;overflow:hidden;}
                    .dia_pic{width:120px;height:120px;float:left;background:url( "{{ asset('Home/Sign/images/corn_00.jpg') }}") no-repeat 20px;}
                    .dia_con{width:250px;margin-left:20px;float:left;color:#333;}
                    .dia_con p{font-size:12px;line-height:22px;}
                    .dia_con p.dia_title{font-size:20px;line-height:36px;font-weight:bold;}
                    .return{width:74px;height:27px;text-align:center;line-height:27px;background:url("{{ asset('images/btn_mid_pink.jpg') }}") no-repeat top center;display:inline-block;color:#FFF;font-size:14px;letter-spacing: 2px;margin:20px 0 0 140px;}
                    .return:hover{text-decoration:none;}
                </style>

                <script>
                    $(function(){
                        var uidd = $.cookie("uid") || "";

                        if ( uidd .length > 0 ){
                            $('#links').show();
                            $('#links_v2').hide();
                        }else{
                            $('#links').hide();
                            $('#links_v2').show();
                            return false;
                        }

                        $(".cuidan_now").click(function(){
                            $.colorbox({html:'<div id="dialog2"><div class="dia_pic"></div><div class="dia_con"><p class="dia_title">请求已发送</p><p>我们已通知快递公司  中通总部</p><p>您的订单：**********</p><p>快递单号：***********</p><p>需要加急发货，请您耐心等待！</p></div><a class="return" id="fanhui" href="javascript:;">关闭</a></div>',
                                title:'快递催单'});
                        });
                        $("#fanhui").live("click",function(){
                            $("#cboxClose").click();
                        });
                    });
                </script>
                <style>
                #table-header-fixed {
                   width: 769.5px;
                   position: fixed;
                   top: 0px; display:none;
                   z-index: 2;
                }
                 #table-header-fixed th {
                   font-weight: normal;
                   background: none;
                   color: #afafaf;
                }
                </style>
                <style>
                    .profile td.insert_td_empty {
                       border-top: solid 1px white;
                       border-bottom: solid 1px white;
                    }
                    .sp_icon_pos_inner {
                       display: none;
                    }
                    .sp_icon_pos_wrapper {
                       position: absolute;
                       z-index: 2;
                       border: 1px solid #DBD6D0;
                       /* width: 300px; */
                       max-width: 220px;
                       _width: 220px;
                       line-height: 18px;
                       padding: 5px 12px;
                       background: #FCFCFC;
                       color: #676767;
                       display: none;
                    }
                </style>

                <style>
                    .cancel_success_input_tip{display:inline-block;text-decoration:none;background:#ec195c;background:-webkit-gradient(linear, left top, left bottom, from(#f4769d), to(#ec195c));background:-webkit-linear-gradient(top, #f4769d, #ec195c);background:-moz-linear-gradient(top, #f4769d, #ec195c);background:-o-linear-gradient(top, #f4769d, #ec195c);background:linear-gradient(to bottom, #f4769d, #ec195c);-webkit-box-shadow: 0 1px 2px 0 #bbb;text-decoration:none;box-shadow: 0 1px 2px 0 #bbb;text-shadow:1px 1px 3px #b9154a;vertical-align:middle;display:inline-block;font-family:inherit;word-break:keep-all;white-space:nowrap;font-weight:normal;text-align:center;line-height:32px;font-size:14px;cursor:pointer;height:32px;width:114px;color:#fff;border:0;filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#ffee1658, endColorStr=#ffee2467), progid:DXImageTransform.Microsoft.DropShadow(color=#ffb2b2b2, offX=0, offY=1, positives=true);}
                    .cancel_success_input_tip:hover{text-decoration:none;}
                    .cancel_success_layer_wrap {padding: 60px 20px 40px; text-align: center;}
                    .cancel_success_input_wrap p {line-height: 50px;}
                    .img_ok {
                       background: url("{{ asset('Home/Sign/images/ok.gif') }}") no-repeat;
                       padding-left: 36px;
                       line-height: 36px;
                       display: inline-block;
                       font-size: 18px;
                    }
                    .order_info_td {
                       width: 191px;
                    }
                    table {
                       table-layout: fixed;
                       width: 769px;
                    }
                </style>
                <script src="{{ asset('Home/Sign/js/boot.js') }}"></script>
                <link rel="stylesheet" href="{{ asset('/Home/Sign/css/sweet-alert.css') }}">
                <script>
                    window.STATIC_FOLDER = "";
                    $(function() {
                        seajs.use('order/list');
                        seajs.use('pcviews/yiqituan');

                        //回到顶部跟随 footer
                        $(window).bind('scroll resize', function(){
                            var bottomPx = $(window).scrollTop()-$('#footer_container').position().top + $(window).height();

                            if (bottomPx > 90) {
                                bottomPx = bottomPx + 20 + 'px';
                                $('.backtotop').css('bottom', bottomPx);
                            } else {
                                $('.backtotop').css('bottom', '100px');
                            }
                        });

                    });
                </script>
            </div>
            <div class="clear"></div>
            <script type="text/javascript">
            /*301 www域名跳转
             *jiel
             */
                $(function () {
                    var cur_location = $.cookie('default_site_25') || '';
                    if (cur_location == '') {
                        $.getJSON(RM_SITE_MAIN_WEBBASEURL_BACK + 'i/ajax/getsite?callback=?', function (data) {
                            cur_location = data.site;
                        });
                    }
                    var url_host = window.location.host.slice(0,2); //获取当前地址域名

                    if (url_host =='bj' || url_host =='sh'|| url_host =='gz' || url_host =='cd') {
                        if (url_host != cur_location) {
                            $.cookie('default_site_25',url_host,{expires: 1,path: "/",domain: RM_SITE_MAIN_TOPLEVELDOMAINNAME});
                            cur_location = url_host;
                        }
                    }
                    $(".profile").delegate("a,area", "click", function () {
                        if (cur_location == '') { cur_location ='www'};
                        var href = $(this).attr("href") || '';
                        if(href.indexOf('/i/deal/mobile_subscribe')<0 && href !=''){
                            var href = href.replace(reg, "$1"+ cur_location +"$3");
                            $(this).attr("href",href);
                        }
                    });
                });
            </script>
            <style>
                #footer_credit a.foot_link .corn_trusty {background:url("{{ asset('Home/Sign/images/footer_0901.jpg') }}") no-repeat;}
                #footer_container {min-width: 960px;}
            </style>

            <div id="footer_container" >
                <div id="footer_textarea">
                    <textarea style="display: none">
                        <div class="footer_top">
                            <div class="footer_con" id="footer_credit">
                                <a  href="" class="foot_link mostmall" target="_blank" rel="nofollow">
                                    <span class="corn corn_trusty"></span><span class="con"><b>值得信赖美妆电商</b></span>四千万用户信赖
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
                        
                        <div class="footer_top">
                            <div class="footer_con" id="footer_links">
                                <ul class="linksa png">
                                    <li class="links">服务保障</li>
                                    <li><a href="#" target="_blank" rel="nofollow">品牌真品防伪码</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">100%正品保证</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">30天无条件退货</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">7×24小时客服服务</a></li>
                                    <li><span class="footer_zcemail">总裁邮箱ceo@jumei.com</span></li>
                                </ul>

                                <ul class="linksb png">
                                    <li class="links">使用帮助</li>
                                    <li><a href="#" target="_blank" rel="nofollow">新手指南</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">常见问题</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">帮助中心</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">用户协议</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">企业用户团购</a></li>
                                </ul>

                                <ul class="linksc png">
                                    <li class="links">支付方式</li>
                                    <li><a href="#" target="_blank" rel="nofollow">货到付款</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">在线支付</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">余额支付</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">现金券支付</a></li>
                                </ul>

                                <ul class="linksd png">
                                    <li class="links">配送方式</li>
                                    <li><a href="#" target="_blank" rel="nofollow">包邮政策</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">配送说明</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">运费说明</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">验货签收</a></li>
                                </ul>

                                <ul class="linkse png">
                                    <li class="links">售后服务</li>
                                    <li><a href="#" target="_blank" rel="nofollow">正品承诺</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">售后服务</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">退货政策</a></li>
                                    <li><a href="#" target="_blank" rel="nofollow">退货办理</a></li>
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
                            
                        <div class="footer_dy" id="footer_dy"></div>
                        <div class="footer_center">
                            <div class="footer_con" id="footer_link">
                                @foreach ( $ob as $a )
                                    <a href="{{ $a->url }}" target="_blank" rel="nofollow">{{ $a->name }}</a>|
                                @endforeach    
                            </div>
                        </div>

                        <div id="footer_copyright">
                            <div class="footer_con">
                                <p class="footer_copy_con">
                                    {{ $v->copy }}客服热线：400-123-8888 <br/>
                                    京公网安备 11010102001226 号 | <a href="" target="_blank" rel="nofollow">京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
                                    | <a href="" target="_blank" rel="nofollow">营业执照</a>
                                </p>
                                <p>
                                    <a href="" class="footer_copy_logo logo01" rel="nofollow"></a>
                                    <a href="" target="_blank" class="footer_copy_logo logo02" rel="nofollow"></a>
                                    <a href="" class="footer_copy_logo logo03" rel="nofollow"></a>
                                    <a href="" class="footer_copy_logo logo04" rel="nofollow"></a>
                                    <a href="" target="_blank" class="footer_copy_logo logo05" rel="nofollow"></a>
                                </p>
                                <script>
                                    function change_urlknet(eleId){
                                        var str=document.getElementById(eleId).href;
                                        var str1=str.substring(0,(str.length-6));
                                        str1+=RndNum(6);
                                        document.getElementById(eleId).href=str1;
                                    }
                                    function RndNum(k){
                                        var rnd="";
                                        for (var i=0;i<k;i++) {
                                            rnd+=Math.floor(Math.random()*10);
                                        }
                                        return rnd;
                                    }
                                </script>
                            </div>
                        </div>
                    </textarea>
                </div>
            </div>
            <!--*连续登陆探测 -->

            <script type="text/javascript">
                $(document).ready(function () {
                    Jumei.Core.init();
                    for(var i in Jumei.Core.afterInitFunctions) {
                        if (Jumei.Core.afterInitFunctions.hasOwnProperty(i)) {
                            Jumei.Core.afterInitFunctions[i].call();
                        }
                    }
                });
            </script>
            <!--点击流用-->
            <script type="text/javascript" charset="utf-8" src="{{ asset('Home/Sign/js/jumei.clickmap.js') }}"></script>

            <script type="text/javascript">
                // adwq
                (function() {
                    var new_signup = getCookie('new_signup');
                    if ( new_signup !== null ) {
                        _adwq.push(['_setAction',
                            '20rf07',
                            RM_UID,       // 扩展参数, 可填 用户名 或 用户ID(可选)
                            'new_signup' // 事件价值 (可选)
                        ]);

                        $.cookie('new_signup',null,{path:'/',domain:RM_SITE_MAIN_TOPLEVELDOMAINNAME});
                    }

                    var adw = document.createElement('script');
                    adw.type = 'text/javascript';
                    adw.async = true;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(adw, s);
                })();

                //ga
                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

                })();


                //baidu tongji
                (function() {
                    var baidu_tongji = document.createElement('script'); baidu_tongji.type = 'text/javascript';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(baidu_tongji, s);
                })();

                //<!--
                    (function (d) {
                        window.bd_cpro_rtid="rjfzrHc";
                        var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js') }}";
                        var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
                    })(document);
                //-->
            </script>
        </body>
    </html>
@endforeach