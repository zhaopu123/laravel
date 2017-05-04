@extends('Home.Sign.index')
@section('content')
    <style>
     .profile .nav .giftcard b {
         background-image: url(images/giftcard_menu_icon.png)
     }
    </style>
    <script type="text/javascript">
        var a = $("div.nav>a.password");
        a.addClass('selected').siblings().removeClass('selected');
    </script>
    <h1>修改密码</h1>
    @if(session('info'))
        <script type="text/javascript">
            alert("{{ session('info') }}");
        </script>
    @endif
    @if(session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif
    <div class="content">
        <form id="settings-form" method="post" action="/home/sign/pass/{{ session('adminuser.id') }}">
            {{ csrf_field() }}
            <div class="input_container">
                <label for="settings-username">用户名</label>
                <span style="line-height:30px;">{{ session('adminuser.name') }}</span>
            </div>

            <dl class="formlist">
                <dt>原密码</dt>
                <dd>
                    <input type='password' name='oldpass' placeholder='请输入原密码'>
                </dd>
            </dl>

            <dl class="formlist">
                <dt>新密码</dt>
                <dd>
                    <input type='password' name='pass' placeholder='请输入新密码'>
                </dd>
            </dl>

            <div class="input_container">
                <label>重复密码</label>
                <input type='password' name='repass' placeholder='请重复密码'>
            </div>

            <div class="act">
                <input type="submit" value="保存修改">
            </div>
        </form>
    </div>
@endsection