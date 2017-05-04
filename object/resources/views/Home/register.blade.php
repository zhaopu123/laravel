<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="qc:admins" content="56207406376255516375" />
    <title>注册 - 聚美账户</title>

<link rel="stylesheet" href="{{ asset('Home/register1/css/common.css') }}" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="{{ asset('Home/register1/css/jumei_sign.css') }}" type="text/css" media="screen" charset="utf-8" />
<script src="{{ asset('Home/register1/js/es5-shim.js') }}"></script>
<script src="{{ asset('Home/register1/js/es5-sham.js') }}"></script>
<script type="text/javascript">
with(window) {
    RM_SITE_MAIN_WEBBASEURL='http://www.jumei.com/';
RM_SITE_MAIN_TOPLEVELDOMAINNAME='jumei.com';
RM_CONTROL='Account';
RM_ACTION='signup';
RM_IMGDIR='https://secure3.jmstatic.com/static_passport/dist/20170328/images';
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

<script src="{{ asset('Home/register1/js/website.min.js') }}"></script>
<script src="{{ asset('Home/register1/js/boot.js') }}"></script>
<script src="{{ asset('Home/register1/js/jquery.cookie.js') }}"></script>
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
        <a href="/home/index" id="home" title="聚美优品" style="background:url( {{ asset('Home/register1/images/logo_new_v1.jpg') }}) no-repeat top left;"> 化妆品品牌排行榜大全网站聚美优品 </a>
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

<link href="{{ asset('Home/register1/css/signup.css') }}" rel="stylesheet"/>
<script>
 var REDIRECT = 'http://www.jumeiglobal.com///global';
 var IS_OPEN_PASSPORT = true;
</script>
 <script>
    seajs.use('signup/index', function() {});
 </script>

 <script type="text/javascript" src="{{ asset('Home/register1/js/jquery-1.8.3.min.js') }}"></script>
<div class="sign">
    <div class="loginWrap">
        <div class="loginPic ">
                        <a href="http://hd.jumei.com/act/10-478-2257-newuserswelfare.html" target="_blank" class="signup_link"></a>
                        <span class="signup_link"></span>
            <div class="loginBord">
                <div class="loginTit">
                    <div class="tosignup">已有帐号<a href="{{ asset('home/login/index') }}">在此登录</a></div>
                    <h1><strong>用户注册</strong></h1>
                </div>
        <form id="phone" method="post" action="/home/doregister">
            {{ csrf_field() }}
            <!-- @if(session('msg'))
                    <h2 class="m-t-0 m-b-15">{{ session('msg') }}</h2>
                @else
                    <h2 class="m-t-0 m-b-15">登录</h2>
                @endif -->
            <div class="line">
                <div class="textbox_ui">
                    <input type="text" id="mobile" placeholder="用户名" autofocus autocomplete="off" name="name" value="">
                    {{ session('fff') }}
                    <div class="focus_text">请输入8-12位用户名</div>
                    <div class="invalid">
                        <i></i>
                        <div class="msg"></div>
                    </div>
                    <i class="valid"></i>
                    <i class="loading"></i>
                </div>
            </div>
          
            <div class="line">
                <div class="textbox_ui">
                    <input type="password" placeholder="密码" autocomplete="off" name="pw">
                    {{ session('ddd')}}
                    <div class="focus_text">
                        <p class="default">8-12个字符，建议使用字母加数字或符号组合</p>
                        <div class="safe">
                            <div class="pw_isstrong clearfix">
                                <div class="pw_level pw_success" data-class="pw_weak" data-strength="weak">弱</div>
                                <div class="pw_level pw_success" data-class="pw_normal" data-strength="normal">中</div>
                                <div class="pw_level pw_success" data-class="pw_strong" data-strength="strong" style="border-right:0">强</div>
                            </div>
                        </div>
                    </div>
                    <i class="valid"></i>
                    <div class="invalid">
                        <i></i>
                        <div class="msg"></div>
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="textbox_ui">
                    <input type="password" placeholder="重复密码" autocomplete="off" name="pw2">
                    <div class="focus_text">请再次输入密码</div>
                    <i class="valid"></i>
                    <div class="pass invalid">
                        <i></i>
                        <div class=""></div>
                    </div>
                </div>
            </div>
            
            <script type="text/javascript">
               var a = $("input[name='pw']");
               // alert(a);
               var b = $("input[name='pw2']");
               b.blur(function(){
                $('.pass').removeClass('invalid');
                // alert(a.val());
                // alert(b.val());
                if(b.val() != a.val()){
                    // alert(1);
                    $('.pass i').text('两次密码不一致');
                    $('.submit_btn').addClass('disabled');
                    return false;
                }else{
                    $('.pass i').text('√');
                }
               });
            </script>
            <!-- 验证码 -->
            <div class='row'>
                <div class="textbox_ui">
                    <input type="text" placeholder=" 验证码" autocomplete="off" name="mycode">
                    {{ session('msg') }}
                    <div class='col-xs-4'>
                        <img src="{{ url('/admin/captcha/'.time()) }}" onclick="this.src='{{ url('/admin/captcha') }}/'+Math.random()"  style="margin-top:15px;">
                    </div>
                </div>
            </div>
            <div class="act" style="margin-left: 0px;">
                <p>
                    <input type="submit" class="submit_btn" value="同意协议并注册"  name="mobileCommit" style="width: 100%;">
                </p>
                <p>
                    <a href="http://www.jumei.com/help/user_terms" rel="nofollow" target="_blank" style="color:#ed145b;">《聚美优品用户协议》</a>
                </p>
            </div>
            <br />
        </form>
        <script type="text/javascript">
               var a = $("input[name='pw']");
               // alert(a);
               var b = $("input[name='pw2']");
               b.blur(function(){
                $('.pass').removeClass('invalid');
                // alert(a.val());
                // alert(b.val());
                if(b.val() != a.val()){
                    // alert(1);
                    $('.pass i').text('两次密码不一致');
                    $('.submit_btn').attr('disabled','disabled');
                    return false;
                }else{
                    $('.pass i').text('√');
                    $('.submit_btn').removeAttr('disabled');
                }
               });
            </script>
                <div class="shadow_l"></div>
                <div class="shadow_r"></div>
            </div>
        </div>
    </div>
</div>
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
    ga.src = 'https://secure5.jmstatic.com/static_passport/dist/20170328/js/library/dc.js';
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
