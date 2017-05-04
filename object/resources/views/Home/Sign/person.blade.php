@extends('Home.Sign.index')
@section('content')
    <style>
     .profile .nav .giftcard b {
         background-image: url(images/giftcard_menu_icon.png)
     }
    </style>
    <script type="text/javascript">
        var a = $("div.nav>a.settings");
        a.addClass('selected').siblings().removeClass('selected');
    </script>
    <h1>设置账户信息</h1>
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
        @foreach ($sign as $p)
            <form id="settings-form" method="post" action="/home/sign/person/{{ $p->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="oldpic" value="{{ $p->pic }}">
                <div class="avatar_change">
                    @if ($p->pic == null)
                        <img src="{{ asset('/Home/Sign/picture/200_200.png') }}" alt="大头像">
                    @else
                        <img src="/Admin/upload/{{ $p->pic }}">
                    @endif
                </div>
                <div class="input_container">
                    <label for="settings-username"><span class="spark">*</span>用户名</label>
                    <input required type="text" size="30" name="name" id="settings-username" class="t_input" value="{{ $p->name }}" >
                    <span class="valueMissing">请填写您的用户名</span>
                    <span class="patternMismatch">应为8-12个中英文字符，不能以数字开头</span>
                    <span class="customError">应为8-12个中英文字符，不能以数字开头</span>
                </div>

                <dl class="formlist">
                    <dt>Email</dt>
                    <dd>
                        <input type='text' name='email' placeholder='请输入邮箱' value='{{ $p->email }}'>
                    </dd>
                </dl>

                <dl class="formlist">
                    <dt>手机号</dt>
                    <dd>
                        <input type='text' name='phone' placeholder='请输入手机号' value='{{ $p->phone }}'>
                    </dd>
                </dl>

                <div class="input_container">
                    <label>性别</label>
                    <label class="radio">
                        <span class="radio_ui">
                            <input name="sex" type="radio" id="gender_f" autocomplete="off" value="1" {{ ($p->sex == 1)?'checked':''}}>
                            <b></b>
                        </span>
                        男
                    </label>
                    <label class="radio">
                        <span class="radio_ui">
                            <input name="sex" type="radio" id="gender_m" autocomplete="off" value="2" {{ ($p->sex == 2)?'checked':''}}>
                            <b></b>
                        </span>
                        女
                    </label>
                </div>
                <div class="input_container">
                    <label>年龄</label>
                    <input type='text' name='age' placeholder='请输入年龄' value='{{ $p->age }}'>
                </div>
                <div class="input_container">
                    <label>修改头像</label>
                    <input type='file' name='pic'>
                </div>

                <div class="input_container">
                    <label for="comment">美丽宣言</label>
                    <textarea rows="8" cols="50" id="comment" name="sign">{{ $p->sign }}</textarea>
                    <div style="margin-left: 130px;margin-top: 8px;color: #ed145b;">美丽宣言为个人设置信息,小美不会为您自动填写哦!</div>
                </div>
                
                <div class="act">
                    <input type="submit" value="保存修改">
                </div>
            </form>
        @endforeach
    </div>
@endsection