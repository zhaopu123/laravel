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
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">
        <section id="login">
            <header>
                <h1>SUPER ADMIN</h1>
                <p>聚美优品后台管理员登录界面</p>
            </header>
        
            <div class="clearfix"></div>
            
            <!-- Login -->
            <form class="box tile animated active" id="box-login" action='/admin/dologin' method='post'>
                {{ csrf_field() }}
                @if(session('msg'))
                    <h2 class="m-t-0 m-b-15">{{ session('msg') }}</h2>
                @else
                    <h2 class="m-t-0 m-b-15">登录</h2>
                @endif
                
                账号：<input type="text" class="login-control m-b-10" placeholder="账户名" name='name'>
                密码：<input type="password" class="login-control" placeholder="密码" name='pw'>
                请输入验证码：
                <div class='row'>
                    <div class='col-xs-4'>
                        <input type='text' class='login-control m-b-10' name='mycode'>
                    </div>
                    <div class='col-xs-4'>
                        <img src="{{ url('/admin/captcha/'.time()) }}" onclick="this.src='{{ url('/admin/captcha') }}/'+Math.random()">
                    </div>
                </div>

                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        记住我
                    </label>
                </div>
                <button class="btn btn-sm m-r-5">确认登录</button>
                
                <small>
                    <a class="box-switcher" data-switch="box-register" href="">还没有账号?</a> 
                    <a class="box-switcher" data-switch="box-reset" href="">忘记密码?</a>
                </small>
            </form>
            
            <!-- Register -->
            <form class="box animated tile" id="box-register">
                <h2 class="m-t-0 m-b-15">注册</h2>
                <input type="text" class="login-control m-b-10" placeholder="账户">    
                <input type="password" class="login-control m-b-10" placeholder="密码">
                <input type="password" class="login-control m-b-20" placeholder="确认密码">

                <button class="btn btn-sm m-r-5">注册</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已有账号?</a></small>
            </form>
            
            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset">
                <h2 class="m-t-0 m-b-15">重置密码</h2>
                <p>请填写下面邮箱，您会收到一封重置密码邮件，请认真填写</p>
                <input type="email" class="login-control m-b-20" placeholder="Email Address">    

                <button class="btn btn-sm m-r-5">发送</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已存在账户？</a></small>
            </form>
        </section>                      
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>
</html>
