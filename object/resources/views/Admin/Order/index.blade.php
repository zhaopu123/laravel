<!-- {{ date_default_timezone_set('PRC') }} -->
@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">订单信息</h3>
        @if(session('msg'))
            <div class="alert alert-success alert-icon">
            {{ session('msg') }}
            <i class="icon"></i>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-warning alert-icon">
            {{ session('error') }}
            <i class="icon"></i>
            </div>
        @endif
        <div class="table-responsive overflow">
            <form action='{{ url("admin/order") }}' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='{{ url("admin/order") }}' method='get'>
                <div class='medio-body'>
                    订单编号：<input type='text' class='form-control input-sm m-b-10' name='oid'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>订单编号</th>
                        <th>商品名称</th>
                        <th>商品数量</th>                       
                        <th>订单单价</th>
                        <th>商品总额</th>
                        <th>订单状态</th>
                        <th>下单时间</th>
                        <th>收货人姓名</th>
                        <th>收货人手机</th>
                        <th>收货人地址</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->oid }}</td>
                            <td>{{ $v->pname }}</td>
                            <td>{{ $v->sum }}</td>
                            <td>{{ $v->money }}</td>
                            <td>{{ $v->total }}</td>
                            <td>@if($v->state == 1)待发货@elseif($v->state == 2)已发货@elseif($v->state == 0)待付款@elseif($v->state == 3)已收货@endif</td>
                            <td>{{ date('Y-m-d H:i:s',$v->atime) }}</td>
                            <td>{{ $v->aname }}</td>
                            <td>{{ $v->uphone }}</td>
                            <td>{{ $v->uaddress }}</td>
                            <td>
                                @if($v->state == 0)
                                <a class="btn btn-sm btn-alt m-r-5" href="">提醒付款</a>
                                @endif
                                @if($v->state == 1)                              
                                <a class="btn btn-sm btn-alt m-r-5" href="{{ url('admin/order')."/".$v->oid }}/edit">发货</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
    //     function doDel(id){
    //      if(confirm('确定删除吗？')){
    //          var form = document.myform;
    //          form.action = '/admin/order/'+id;
    //          form.submit();
    //      }
    //     }

    </script>
@endsection