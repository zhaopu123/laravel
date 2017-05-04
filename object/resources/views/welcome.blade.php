<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <!-- <form action='/foo' method='get'>
                    <input type='submit' value='get提交'>
                </form>
                <form action='/foo' method='post'>
                    {{csrf_field()}}
                    <input type='submit' value='post提交'>
                </form>
                <form action='/foo' method='post'>
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <input type='submit' value='put方式提交'>
                </form>
                 <form action='/foo' method='post'>
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type='submit' value='delete方式提交'>
                </form>
                <form action='/hello' method='get'>
                    <input type='submit' value='match方式提交'>
                </form>
                <form action='/hello1' method='post'>
                    {{csrf_field()}}
                    <input type='submit' value='any方式提交'>
                </form>
                <form action='/test' method='get'>
                    <input type='submit' value='带参数的路由'>
                </form>
                <form action='/hh' method='get'>
                    <input type='submit' value='可省参数的路由'>
                </form>
                <form action='/aa' method='get'>
                    <input type='submit' value='可省参数的路由2'>
                </form>
                <form action='/hhh' method='get'>
                    <input type='submit' value='类型约束参数的路由'>
                </form> -->
                <ul>
                    <li><a href="/stu">1.学生信息管理</a></li>
                    <li><a href="/demo1?name=zhang3&age=18&sex=2&num[]=10&num[]=20">2.laravel中的请求</a></li>
                    <li><a href="/demo2">3.laravel中的响应</a></li>
                    <li><a href="/demo3">4.laravel中的模板继承</a></li>
                    <li><a href="/demo4">5.laravel中的用户管理(模板继承)</a></li>
                    <li><a href="/upload">6.laravel中的文件上传</a></li>
                    <li><a href="/admin/login">7.laravel中的登录</a></li>
                </ul>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
