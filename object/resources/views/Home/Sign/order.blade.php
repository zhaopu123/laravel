@extends('Home.Sign.index')
@section('content')
    @if(session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @endif
    <style>
    .profile .nav .giftcard b {
         background-image: url({{ asset('Home/Sign/images/giftcard_menu_icon.png') }});
     }
    </style>
    <script src="{{ asset('Home/Sign/js/jquery.lightbox.min.js') }}"></script>
    <script src="{{ asset('Home/Sign/js/jumei.order.min.js') }}"></script>
    <link href="{{ asset('/Home/Sign/css/jumei_lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <script>
        function onImageLoadError() {
            this.src = '';
            this.onerror = null;
        }
    </script>
    <script type="text/javascript" src="{{ asset('Home/Sign/js/jumei.order.js') }}"></script>
    <script>
        $(function(){Jumei.Order.init()});
    </script>
    <h1>
        <a href="" target="_blank">手机客户端，随时随地查看物流详情</a>
        我的订单
    </h1>

    <link rel="stylesheet" href="{{ asset('/Home/Sign/css/jumei_onsale_layer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/Home/Sign/css/jumei_lightbox.min.css') }}">
    <style>
        .invoice_layer .invoice_type {position:relative;top:3px;}
        .invoice_layer .invoice_label {padding-left:10px;}
        .invoice_layer .invoice_company {margin-top:25px;width:360px;}
        .invoice_layer .onsale_layer_wrap {padding: 20px 0 0;}
        .invoice_layer .onsale_input_wrap {padding: 0 30px;}
        .invoice_layer .invoice_btn_wrap {padding:15px 0;margin-top:20px;background:#fafafa;text-align:center;}
        .invoice_layer .invoice_cancel {box-shadow:none;}
        .invoice_layer [type="text"][disabled],.invoice_layer [type="text"][readonly] { background: #f1f1f1; }
        .OnSale #cboxContent { background: none; box-shadow: none; }
        .package_info {padding-top: 0;}
        .package_info .p_logistic_name {padding-top: 8px;}
        .p_status_green_wraper {margin: 12px auto;}
        .safety_notice{position:relative;background:#feffe5;border:1px solid #efe68b;padding:6px 8px 6px 32px;margin-bottom:15px;font-family: '宋体'}
        .safety_notice img{width:14px; height:14px;position:absolute;left:14px;_left:-20px;top:8px}
    </style>

    <div class="content">
       <!--   <div class="banner" style="margin-bottom: 10px;">
            <a href="http://hd.jumei.com/act/6-478-3201-gift_20141210.html" target="_blank">
                <img src="{{ asset('Home/Sign/picture/comment_banner.jpg') }}" alt="">
            </a>
        </div>
       -->
        <div class="filter">
            <a href='/home/sign/order/0' class="curr">全部订单</a>
            <a href='/home/sign/order/1'>待付款</a>
            <a href='/home/sign/order/2'>待发货</a>
            <a href='/home/sign/order/3'>待收货</a>
            <a href='/home/sign/order/4'>待评价</a>
        </div>
        <form name='myform' method='post'>
            {{ csrf_field() }}
        </form> 
        <div class='mytable'>
            <table id="order-list" class="order_table">
                <!-- total 769px -->
                <tr class="order_list_title">
                    <th style="width:191px;">订单信息</th>
                    <th style="width:80px;">订购商品</th>
                    <th style="width:40px;">件数</th>
                    <th style="width:80px;">单价</th>
                    <th style="width:70px;">商品操作</th>
                    <th style="width:120px;">订单状态</th>
                    <th style="width:90px;">订单操作</th>
                </tr>
                @foreach ($person as $per)
                    <tr id='state'>
                        <td class="order_info_td">
                            <p class="orderList_global" data="5"></p>
                            <p>交易单号：{{ $per->oid }}</p>
                            <P>商品金额: ¥{{$per->total }}(免运费)</P>
                            <p> 由 聚美极速免税店 发货 </p>
                        </td>
                        <td class="item_title" >
                            <a href="/home/info/{{ $per->pid }}" target="_blank" title="{{ $per->pname }}">
                                <img src="/Admin/upload/{{ $per->pic }}" alt="{{ $per->pname }}">
                            </a>
                        </td>
                        <td>{{ $per->sum }}</td>
                        <td>¥{{ $per->money }}</td>
                        <td></td>
                        <td>
                            <span class="status_grey">
                                @if( $per->state == 0 )
                                    待付款
                                @elseif( $per->state == 1 )
                                    待发货  
                                @elseif( $per->state == 2 )
                                    待收货
                                @elseif( $per->state == 3 )
                                    待评价 
                                @endif
                            </span>      
                        </td>
                        <td>
                            @if( $per->state == 0 )
                                <p><a href="/home/pay">去付款</a></p>
                            @elseif( $per->state == 2 )
                                <p><a href="/home/confirm/{{ $per->oid }}">确认收货</a></p>     
                            @elseif( $per->state == 3 )
                                <p><a href="/home/comment/{{ $per->pid }}">去评价</a></p>
                                <p><a href="javascript:doDel({{ $per->oid }})">删除</a></p>
                            @else
                                <p><a href="/home/sign/order/0">查看详情</a></p>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div>
            {{ $person->links() }}
        </div>
    </div>
    <script type="text/javascript">
        var div_a = $('div.filter a:eq({{ $id }})');
        div_a.addClass("curr").siblings().removeClass("curr");
    </script>
    <script type="text/javascript">
        function doDel(oid)
        {
            if(confirm('确认删除?')){
                var form = document.myform;
                form.action = '/home/sign/order/0/'+oid;
                form.submit();
            }
        }
    </script>
@endsection