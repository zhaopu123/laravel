@extends('Home.Sign.index')
@section('content')
    <style>
        .profile .nav .giftcard b {
            background-image: url(images/giftcard_menu_icon_1.png)
        }
        select {
            height:30px;
            width:130px;
            margin-right:5px;
        }
    </style>
    <script type="text/javascript">
        var a = $("div.nav>a.addr");
        a.addClass('selected').siblings().removeClass('selected');
    </script>
    <h1>管理收货地址</h1>
    @if(session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @endif
    <div class="content sector">
        <h2><span class="addAddress">新增</span><span class="modifyAddress" style="display:none;">修改</span>收货地址</h2>
        <form name='myform' method='post'>
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
        </form>
        @if($info) 
            <form class="shipping_address" action="/home/sign/addr/{{ $info->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type="hidden" name="uid" class="edit" id="uid" value="{{ $info->uid }}">
                <div class="input_container">
                    <label for="recipient_name"><span class="spark">*</span>收件人姓名：</label>
                    <input type="text" size="20" class="t_input recipient_name" id="recipient_name" name="aname" value="{{ $info->aname }}">
                    <a class="real_name_cert " href="" title="选择身份验证已通过的收货人"><span class="real_name_cert_icon"></span></a>
                </div>     
                <div class="input_container">
                    <label for="recipient_street"><span class="spark">*</span>详细地址：</label>
                    <textarea rows="3" cols="60" class="t_input recipient_street" style="height:auto;resize:none;" id="recipient_street" name="uaddress">{{ $info->uaddress }}</textarea>
                </div>
                <div class="input_container">
                    <label for="recipient_hp"><span class="spark">*</span>手机号码：</label>
                    <input type="tel" size="20" class="t_input recipient_hp" id="recipient_hp" name="uphone" value="{{ ($info->uphone)?($info->uphone):'' }}" maxlength="11">
                </div>
                <div class="act">
                    <input type="submit" value="保存收货地址" class="formbutton">&nbsp;
                    <a href="#" id="edit_cancel">取消</a>
                </div>
            </form>
        @else
            <form class="shipping_address" action="/home/sign/addr" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="uid" class="edit" id="uid" value="{{ session('adminuser.id') }}">
                <div class="input_container">
                    <label for="recipient_name"><span class="spark">*</span>收件人姓名：</label>
                    <input type="text" size="20" class="t_input recipient_name" id="recipient_name" name="aname">
                    <a class="real_name_cert " href="" title="选择身份验证已通过的收货人"><span class="real_name_cert_icon"></span></a>
                </div>     
                <div class="input_container">
                    <label for="recipient_street"><span class="spark">*</span>详细地址：</label>
                    <select name='city[]'>
                        <option>--请选择--</option>
                        @foreach($total as $t)
                            <option value="{{ $t->id }}">{{ $t->name }}</option>    
                        @endforeach
                    </select>
                </div>
                <div class="input_container">
                    <label for="recipient_hp"><span class="spark">*</span>手机号码：</label>
                    <input type="tel" size="20" class="t_input recipient_hp" id="recipient_hp" name="uphone" maxlength="11">
                </div>
                <div class="act">
                    <input type="submit" value="保存收货地址" class="formbutton">&nbsp;
                    <a href="#" id="edit_cancel">取消</a>
                </div>
            </form>            
        @endif
        <script type="text/javascript" src="/Home/Sign/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript">
            $('select').live("change",function(){
                $(this).nextAll('select').remove();
                if($(this).val() != '--请选择--'){
                    var ob = $(this);
                    $.ajax({
                        url:'/home/sign/addrs/'+ob.val(),
                        type:'get',
                        async:true,
                        dataType:'json',
                        success:function(data)
                        {
                            if(data.length>0){
                                var select = $("<select name='city1[]'><option>--请选择--</option></select>");
                                for (var i = 0; i < data.length; i++) {
                                    $(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
                                };
                                ob.after(select);
                            }
                        },
                        error:function()
                        {
                            alert('ajax请求失败');
                        }
                    });
                }
            });
        </script>
        <h2>已保存的地址</h2>
        <div class="notice_content">最多保存10个有效地址。每月只能新增或修改10次。您本月已新增或修改
            <span id="modify_count" class="status_red">1</span> 次
            <a href="" target="_blank" class="view_id_cert_info">查看您的身份验证信息</a>
        </div>
        <div id="shipping_address_list">
            <table id="order-list" class="order_table">
                <!-- total 769px -->
                <tr class="order_list_title">
                    <th style="width:155px;">收件人姓名</th>
                    <th style="width:300px;">详细地址</th>
                    <th style="width:155px;">手机号码</th>
                    <th style="width:155px;" colspan="2">操作</th>
                </tr>
                @foreach ($addr as $add)
                    <tr>
                        <td>
                            {{ $add->aname }}
                        </td>
                        <td>
                            {{ $add->uaddress }}
                        </td>
                        <td>{{ $add->uphone }}</td>
                        <td>
                            <a href="/home/sign/addr/{{ $add->id }}/edit">修改</a>
                        </td>
                        <td>
                            <a href="javascript:doDel({{ $add->id }})">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id)
        {
            if(confirm('确认删除?')){
                var form = document.myform;
                form.action = '/home/sign/addr/'+id;
                form.submit();
            }
        }
    </script>
@endsection