﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="qc:admins" content="56207406376255516375" />
    <title>登录聚美</title>

<link rel="stylesheet" href="css/common.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/jumei_sign.css" type="text/css" media="screen" charset="utf-8" />
<script src="js/es5-shim.js"></script>
<script src="js/es5-sham.js"></script>
<script type="text/javascript">
with(window) {
    RM_SITE_MAIN_WEBBASEURL='http://www.jumei.com/';
RM_SITE_MAIN_TOPLEVELDOMAINNAME='jumei.com';
RM_CONTROL='Account';
RM_ACTION='login';
RM_IMGDIR='https://secure5.jmstatic.com/static_passport/dist/20170328/images';
    RM_CLIENT_TIME = parseInt((new Date()).getTime() / 1000);
            GA_ACCOUNT = "UA-10208510-1";
    }
var screen_wide = document.documentElement.clientWidth > 1200 ? true : false ;
function getCookie(name)
{
    var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
    if(arr=document.cookie.match(reg))
        return (arr[2]);
    else
        return null;
}
RM_UID = getCookie('uid');
RM_NICKNAME = null;
if ( getCookie('nickname') != null ){
    RM_NICKNAME = decodeURIComponent(getCookie('nickname'));
}
var is_semwinner = false;

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

// TODO 待替换 start
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
// 待替换 end
/*  请按下方原代码待替换
 window.jumeiSstatisticsAction = {if isset($_AD_input.enable)}'{$_AD_input.enable}'{else}''{/if};

 jumeiSstatistics.push(['log', {if isset($_AD_input.log)}'{$_AD_input.log}'{else}''{/if}]);
 jumeiSstatistics.push(['lo', {if isset($_AD_input.lo)}'{$_AD_input.lo}'{else}''{/if}]);
 jumeiSstatistics.push(['sid', {if isset($_AD_input.sid)}'{$_AD_input.sid}'{else}''{/if}]);
 jumeiSstatistics.push(['cl', {if isset($_AD_input.cl)}'{$_AD_input.cl}'{else}''{/if}]);
 jumeiSstatistics.push(['mat', {if isset($_AD_input.mat)}'{$_AD_input.mat}'{else}''{/if}]);
 jumeiSstatistics.push(['bs', {if isset($_AD_input.bs)}'[{$_AD_input.bs}]'{else}'[]'{/if}]);
 jumeiSstatistics.push(['ps', {if isset($_AD_input.ps)}'[{$_AD_input.ps}]'{else}'[]'{/if}]);
 jumeiSstatistics.push(['uid', {if isset($_AD_input.uid)}'{$_AD_input.uid}'{else}''{/if}]);
 jumeiSstatistics.push(['tm', {if isset($_AD_input.tm)}'{$_AD_input.tm}'{else}''{/if}]);
 jumeiSstatistics.push(['act', {if isset($_AD_input.act)}'{$_AD_input.act}'{else}''{/if}]);
 jumeiSstatistics.push(['aci', {if isset($_AD_input.aci)}'[{$_AD_input.aci}]'{else}'[]'{/if}]);
 jumeiSstatistics.push(['ip', {if isset($_AD_input.ip)}'{$_AD_input.ip}'{else}''{/if}]);
 */

</script>

<script src="js/website.min.js"></script>
<script src="js/boot.js"></script>
<script src="js/jquery.cookie.js"></script>
</head>

</head>
<!-- KEEP THIS!
<body>
-->
<body>

<style>
    .top_nav_hot{ position: absolute;left:81px;top:-4px;}

</style>
<div id="header_container">
    <!--新版的login页面没有头部 -->
    <div id="logo">
        <a href="/home/index" id="home" title="聚美优品" style="background:url(  images/logo_new_v1.jpg ) no-repeat top left;"> 化妆品品牌排行榜大全网站聚美优品 </a>
        <div class="header_logo_box">
            <a href="http://www.jumei.com/activity_guarantee.html?from=header#bold_consignment" rel="nofollow" class="top_link lightning" target="_blank"></a>
            <a href="http://www.jumei.com/help/two_for_freeshipping?from=header" rel="nofollow" class="top_link gild" target="_blank"></a>
            <a href="http://www.jumei.com/activity_aca.html?from=top" rel="nofollow" class="top_link credit" target="_blank"></a>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
$(".top_hot").hover(function () {
$(".top_nav_hot").css("display","none")
},
function () {
$(".top_nav_hot").css("display","block")
}
);
});
</script>


<link href="css/login.css" rel="stylesheet"/>

    <script type="text/javascript" src="js/tcapiframeapi.js"></script>
<style>
    .loginWrap .loginBord {
        width: 300px;
    }
    #username, #login_password, #dynamic_mobile {
        padding-left: 38px;
        width: 252px;
    }

    .dynamic_pass input {
        width: 88px;
        display: inline-block;
    }

    .phonecode {
        width:130px;
    }

    .gt_guide_tip {
        left: 40px!important;
    }
    .iconAccout a {
        margin-right: 10px;
    }
    .textBtnsWrap {
        background-color: #F4F6F4;
    }
    .t_v_txt_btn {
        width: 49px !important;
    }

</style>

<script>
    var REDIRECT = 'http://www.jumei.com/';
    var IS_OPEN_PASSPORT = 1;
    var SHOW_VERIFY_CODE = 'qcloud';
    var DYNAMIC_VERIFY_TYPE = '';
    window.isOpenDynamicLogin = true;
    window.dynamicSmsExpireTime = 15;
</script>

<div class="sign">
    <div class="loginWrap">
        <div class="loginBoardWrap">
            <div class="loginImage"></div>
            <div class="loginBord">
                <div class="loginTit">
                    <div class="tosignup">还没有聚美帐号？<a href="{{ asset('home/register') }}">30秒注册</a></div>
                    <h1><strong>登录聚美</strong></h1>
                </div>
                <form id="login-user-form" method="post" action="/home/dologin">
                    {{ csrf_field() }}
                    @if(session('msg'))
                        <script type="text/javascript">
                            alert("{{ session('msg') }}");
                        </script>  
                    @endif
                    <div class="textbox_ui user">
                        <input type="text" placeholder="已验证手机/邮箱/用户名" name="name" autofocus autocomplete="off" value="">
                        <div class="focus_text">请输入登录名，登录名可能是您的手机号、邮箱或用户名</div>
                        <div class="invalid">
                            <i></i>
                            <div class="msg"></div>
                        </div>
                    </div>
                    <div class="textbox_ui pass">
                        <input type="password" placeholder="密码" name="pw" autocomplete="off">
                        <div class="focus_text">请输入您的密码，您的密码可能为字母、数字或符号的组合</div>
                        <div class="invalid">
                            <i></i>
                            <div class="msg"></div>
                        </div>
                    </div>

                    <!-- <div class="captchaWrap textbox_ui">
                        <input type="hidden" id="captcha_ticket" name="captcha_ticket" value="">
                        <div class="invalid captcha_invalid">
                            <i></i>
                            <div class="msg"></div>
                        </div>
                        <div id="TCaptcha" style="width:300px;height:46px;" >
                            
                        </div>
                    </div> -->
                   <!--  <div class="gtVerifyWrap">
                        <div class="textbox_ui">
                            <p class="gtHeader">请拖动下方的滚动条，完成拼图验证</p>
                            <div class="clearfix">
                                <script async type="text/javascript" src="{{ asset('Home/login/js/get_1.php') }}"></script>
                            </div>
                            <div id="gt_verify"></div>
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="verityWrap">
                        <div class="textbox_ui">
                            <input type="text" placeholder="验证码" autocomplete="off" id="verify_code" maxlength="4">
                            <div class="focus_text">按右图填写，不区分大小写</div>
                            <div class="invalid">
                                <i></i>
                                <div class="msg"></div>
                            </div>
                        </div>
                        <span id="change_verify_code"><img src="">换一张</span>
                    </div> -->
                    <p>
                        <a href="/i/account/resetreq?=login" class="fr">忘记密码?</a>
                        <label for="auto_login">
                            <input type="checkbox" id="auto_login" checked>
                            &nbsp;自动登录
                        </label>
                    </p>
                    <input class="loginbtn submit_btn" type="submit" value="登 录" style=" display: block;width: 100%;">
                    <div id="errorMsg"></div>
                </form>
                <!-- 你也可以使用以下帐号登录 -->
                <div class="iconAccout" >
                    <div>你也可以使用以下帐号登录</div>
                    <p>
                        <a href="/i/extconnect/?site_name=cb_qq&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a1" title="QQ">QQ</a>
                        <a href="/i/extconnect/?site_name=alipay&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a2" title="支付宝">支付宝</a>
                        <a href="/i/extconnect/?site_name=sina_weibo&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a3" title="新浪微博">新浪微博</a>
                        <a href="/i/extconnect/?referer=360tuan_dh&amp;site_name=site_360&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a4" title="360">360</a>
                        <a href="/i/extconnect/?site_name=baidu&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a5" title="百度">百度</a>
                        <span>更多<i></i></span>
                    </p>
                    <p class="icon-p" style="display: none;">
                        <a href="/i/extconnect/?site_name=weixin&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a6" title="微信">微信</a>
                        <a href="/i/extconnect/?site_name=renren&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a7" title="人人">人人</a>
                        <a href="/i/extconnect/?site_name=mogujie&amp;redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a8" title="蘑菇街">蘑菇街</a>
                        <a href="/i/extconnect/?site_name=tuan800&redirect=http%3A%2F%2Fwww.jumei.com%2F" class="a9" title="团800">团800</a>
                    </p>
                </div>
                <div class="shadow_l"></div>
                <div class="shadow_r"></div>
            </div>
        </div>
    </div>
</div>

<script>
    // seajs.use('login/index', function(){
    // });
</script>

<div class="clear"></div>
<script type="text/javascript">
 /*301 www域名跳转
  *jiel
  */
 $(function () {
     var cur_location = $.cookie('default_site_25') || '';
     if (cur_location == '') {
         $.getJSON(RM_SITE_MAIN_WEBBASEURL + 'i/ajax/getsite?callback=?', function (data) {
             cur_location = data.site;
         })
     }
     var url_host = window.location.host.slice(0,2); //获取当前地址域名

     if(url_host =='bj' || url_host =='sh'|| url_host =='gz' || url_host =='cd'){
         if(url_host != cur_location) {
             $.cookie('default_site_25',url_host,{expires: 1,path: "/",domain: RM_SITE_MAIN_TOPLEVELDOMAINNAME});
             cur_location = url_host;
         }
     }
     $("body").delegate("a,area", "click", function () {
         if(cur_location == ''){ cur_location ='www'};
         var href = $(this).attr("href") || '';
         if(href.indexOf('/i/deal/mobile_subscribe')<0 && href !=''){
             var reg = new RegExp("^(http://)(hd(?=.jumei.com)|huodong(?=.jumei.com)|www(?=.jumei.com/i/deal))(.*)$","i");
             var href =href.replace(reg, "$1"+ cur_location +"$3");
             $(this).attr("href",href);
         }
     })
 })
</script>

<div id="footer_container" class="footer_white" style="padding-top:5px;background: none;border-top: none;">
    <div class="footer_con" id="footer_copyright">
        <p class="footer_copy_con">
            Copyright &copy; 2010-2015 北京创锐文化传媒有限公司 Jumei.com 保留一切权利。客服热线：400-123-8888 <br/>
            京公网安备 11010102001226 号 | <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">京ICP证111033号</a> | 食品流通许可证 SP1101051110165515（1-1）
            | <a href="http://p2.jmstatic.com/activity/2013_chuangrui.jpeg" target="_blank" rel="nofollow">营业执照</a>
        </p>
        <p>
            <a href="javascript:void(0)" class="footer_copy_logo logo01" rel="nofollow"></a>
            <a href="https://www.itrust.org.cn/yz/pjwx.asp?wm=1693268180" target="_blank" class="footer_copy_logo logo02" rel="nofollow"></a>
            <a href="javascript:void(0)" class="footer_copy_logo logo03" rel="nofollow"></a>
            <a href="javascript:void(0)" class="footer_copy_logo logo04" rel="nofollow"></a>
            <a href="https://ss.cnnic.cn/verifyseal.dll?sn=e12070911010031011307708&ct=df&pa=453163" target="_blank" class="footer_copy_logo logo05" rel="nofollow"></a>
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
<!--*连续登陆探测 -->

<!--点击流用-->
<script type="text/javascript" charset="utf-8" src="js/clk_jumei.js"></script>
<script type="text/javascript" charset="utf-8" src="js/jumei.clickmap.js"></script>



<script type="text/javascript">
 $(function() {
// adwq
(function() {

    var new_signup = getCookie('new_signup');
    if ( new_signup !== null ){
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
    adw.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://s') + '.emarbox.com/js/adw.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(adw, s);
})();

//ga
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = 'https://secure4.jmstatic.com/static_passport/dist/20170328/js/library/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();


//baidu tongji
(function() {
    var baidu_tongji = document.createElement('script'); baidu_tongji.type = 'text/javascript';
    baidu_tongji.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'hm.baidu.com/h.js?884477732c15fb2f2416fb892282394b';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(baidu_tongji, s);
})();

//<!--
    (function (d) {
        window.bd_cpro_rtid="rjfzrHc";
        var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
        var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
    })(document);
//-->
 });
</script>
</body>
</html>