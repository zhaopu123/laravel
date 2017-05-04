@extends('Home.Sign.index')
@section('content')
    <style>
        .profile .nav .giftcard b {
            background-image: url(images/giftcard_menu_icon_1.png)
        }
    </style>
    <script type="text/javascript">
        var a = $("div.nav>a.addr");
        a.addClass('selected').siblings().removeClass('selected');
    </script>
    <h1>发表评论</h1>
    <div class="content sector">
        <h2><span class="addAddress"></span><span class="modifyAddress" style="display:none;">评论</span></h2>
        <form class="shipping_address" action="/home/comment" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="uid" class="edit" id="uid" value="{{ session('adminuser.id') }}">
            <input type="hidden" name="pid" class="edit" id="pid" value="{{ $id }}">    
            <div class="input_container">
                <label for="recipient_street"><span class="spark"></span>评论内容：</label>
                <textarea rows="3" cols="60" class="t_input recipient_street" style="height:auto;resize:none;" id="recipient_street" name="cont"></textarea>
            </div>
            <div class="act">
                <input type="submit" value="保存评论" class="formbutton">&nbsp;
                <a href="/home/sign/order/0" id="edit_cancel">取消</a>
            </div>
        </form>
    </div>
@endsection