<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Super Admin Responsive Template</title>
            
        <!-- CSS -->
        <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/form.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/calendar.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('Admin/css/generics.css') }}" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">

        <header id="header" class="media">
            <a href="" id="menu-toggle"></a> 
            <a class="logo pull-left">后台管理</a>
            
            <div class="media-body">
                <div class="media" id="top-menu">
                    <div class="pull-left tm-icon">
                        <a data-drawer="messages" class="drawer-toggle" href="">
                            <i class="sa-top-message"></i>
                            <i class="n-count animated">5</i>
                            <span>Messages</span>
                        </a>
                    </div>
                    <div class="pull-left tm-icon">
                        <a data-drawer="notifications" class="drawer-toggle" href="">
                            <i class="sa-top-updates"></i>
                            <i class="n-count animated">9</i>
                            <span>Updates</span>
                        </a>
                    </div>

                    

                    <div id="time" class="pull-right">
                        <span id="hours"></span>
                        :
                        <span id="min"></span>
                        :
                        <span id="sec"></span>
                    </div>
                    
                    <div class="media-body">
                        <input type="text" class="main-search">
                    </div>
                </div>
            </div>
        </header>
        
        <div class="clearfix"></div>
        
        <section id="main" class="p-relative" role="main">
            
            <!-- Sidebar -->
            <aside id="sidebar">
                
                
                <!-- Sidbar Widgets -->
                <div class="side-widgets overflow">
                    <!-- Profile Menu -->
                    <div class="text-center s-widget m-b-25 dropdown" id="profile-menu">
                        <a href="" data-toggle="dropdown">
                            
                           <img class="profile-pic animated" src="/Admin/upload/{{ session('adminusers.pic') }}" alt="">
                        </a>
                        <ul class="dropdown-menu profile-menu">
                            <li><a href="{{ url('admin/adm')}}">我的档案</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                            <li><a href="{{ url('admin/over') }}">退出</a> <i class="icon left">&#61903;</i><i class="icon right">&#61815;</i></li>
                        </ul>
                        <h4 class="m-0">{{ session('adminusers.name') }}</h4>
                        <br>
                        ~ ~ @ ~ ~
                    </div>
                    
                    <!-- Calendar -->
                    <div class="s-widget m-b-25">
                        <div id="sidebar-calendar"></div>
                    </div>
                   
                </div>
                
                <!-- Side Menu -->
                <ul class="list-unstyled side-menu">
                    <li class="active">
                        <a class="sa-side-home" href="/admin/index">
                            <span class="menu-item">首页</span>
                        </a>
                    </li>
                    
                    <li class="dropdown">
                        <a class="sa-side-form" href="/admin/adm">
                            <span class="menu-item">管理员</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/adm/create">&nbsp; &nbsp; &nbsp; &nbsp; 添加管理员</a></li>
                            <li><a href="/admin/adm">&nbsp; &nbsp; &nbsp; &nbsp; 管理员列表</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-page" href="/admin/user">
                            <span class="menu-item">普通用户</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/user/create">&nbsp; &nbsp; &nbsp; &nbsp; 添加用户</a></li>
                            <li><a href="/admin/user">&nbsp; &nbsp; &nbsp; &nbsp; 用户列表</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-ui" href="/admin/type">
                            <span class="menu-item">商品分类</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/type/create">添加商品分类</a></li>
                            <li><a href="/admin/type">显示分类信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-ui" href="/admin/product">
                            <span class="menu-item">商品管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/product/create">添加商品</a></li>
                            <li><a href="/admin/product">商品列表</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-form" href="/admin/order">
                            <span class="menu-item">订单管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/order">显示订单信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-form" href="/admin/comment">
                            <span class="menu-item">评价管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/comment">显示评价信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-page" href="/admin/notice">
                            <span class="menu-item">公告管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/notice/create">添加公告</a></li>
                            <li><a href="/admin/notice">公告信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-page" href="/Admin/link">
                            <span class="menu-item">友情链接</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/link/create">&nbsp; &nbsp; &nbsp; &nbsp; 添加链接</a></li>
                            <li><a href="/admin/link">&nbsp; &nbsp; &nbsp; &nbsp; 链接列表</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-typography" href="/Admin/set">
                            <span class="menu-item">网站配置</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/set/create">&nbsp; &nbsp; &nbsp; &nbsp; 添加网站配置</a></li>
                            <li><a href="/admin/set">&nbsp; &nbsp; &nbsp; &nbsp; 网站配置信息</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="sa-side-form" href="/admin/addr">
                            <span class="menu-item">地址管理</span>
                        </a>
                        <ul class="list-unstyled menu-item">
                            <li><a href="/admin/addr">显示地址信息</a></li>
                        </ul>
                    </li>
                </ul>

            </aside>
        
            <!-- Content -->
            <section id="content" class="container">
                @yield('content')
            </section>

            <!-- Older IE Message -->
            <!--[if lt IE 9]>
                <div class="ie-block">
                    <h1 class="Ops">Ooops!</h1>
                    <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser in order to access the maximum functionality of this website. </p>
                    <ul class="browsers">
                        <li>
                            <a href="https://www.google.com/intl/en/chrome/browser/">
                                <img src="{{ asset('Admin/img/browsers/chrome.png') }}" alt="">
                                <div>Google Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.mozilla.org/en-US/firefox/new/">
                                <img src="{{ asset('Admin/img/browsers/firefox.png') }}" alt="">
                                <div>Mozilla Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com/computer/windows">
                                <img src="{{ asset('Admin/img/browsers/opera.png') }}" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://safari.en.softonic.com/">
                                <img src="{{ asset('Admin/img/browsers/safari.png') }}" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/downloads/ie-10/worldwide-languages">
                                <img src="{{ asset('Admin/img/browsers/ie.png') }}" alt="">
                                <div>Internet Explorer(New)</div>
                            </a>
                        </li>
                    </ul>
                    <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
                </div>   
            <![endif]-->
        </section>
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="{{ asset('Admin/js/jquery.min.js') }}"></script> <!-- jQuery Library -->
        <script src="{{ asset('Admin/js/jquery-ui.min.js') }}"></script> <!-- jQuery UI -->
        <script src="{{ asset('Admin/js/jquery.easing.1.3.js') }}"></script> <!-- jQuery Easing - Requirred for Lightbox + Pie Charts-->

        <!-- Bootstrap -->
        <script src="{{ asset('Admin/js/bootstrap.min.js') }}"></script>

        <!-- Charts -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.js') }}"></script> <!-- Flot Main -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.time.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.animator.min.js') }}"></script> <!-- Flot sub -->
        <script src="{{ asset('Admin/js/charts/jquery.flot.resize.min.js') }}"></script> <!-- Flot sub - for repaint when resizing the screen -->

        <script src="{{ asset('Admin/js/sparkline.min.js') }}"></script> <!-- Sparkline - Tiny charts -->
        <script src="{{ asset('Admin/js/easypiechart.js') }}"></script> <!-- EasyPieChart - Animated Pie Charts -->
        <script src="{{ asset('Admin/js/charts.js') }}"></script> <!-- All the above chart related functions -->

        <!-- Map -->
        <script src="{{ asset('Admin/js/maps/jvectormap.min.js') }}"></script> <!-- jVectorMap main library -->
        <script src="{{ asset('Admin/js/maps/usa.js') }}"></script> <!-- USA Map for jVectorMap -->

        <!--  Form Related -->
        <script src="{{ asset('Admin/js/icheck.js') }}"></script> <!-- Custom Checkbox + Radio -->

        <!-- UX -->
        <script src="{{ asset('Admin/js/scroll.min.js') }}"></script> <!-- Custom Scrollbar -->

        <!-- Other -->
        <script src="{{ asset('Admin/js/calendar.min.js') }}"></script> <!-- Calendar -->
        <script src="{{ asset('Admin/js/feeds.min.js') }}"></script> <!-- News Feeds -->
        

        <!-- All JS functions -->
        <script src="{{ asset('Admin/js/functions.js') }}"></script>
    </body>
</html>
