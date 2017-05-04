@extends('Admin.base.parent')
@section('content')
    <!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">订单信息</h3>
            <form method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                    <input type="text" class="form-control m-b-10" placeholder="收货人姓名" name='uid' value="{{ $ob->uid }}">
                    <input type="text" class="form-control m-b-10" placeholder="收货人手机" name='uphone' value="{{ $ob->uphone }}">
                    <input type="text" class="form-control m-b-10" placeholder="收货人地址" name='uaddress' value="{{ $ob->uaddress }}">
                    <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $ob->oid }})'>确认发货</a>
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function doDel(oid){
                if(confirm('确定发货吗？')){
                    var form = document.myform;
                    form.action = '/admin/order/'+oid;
                    form.submit();
                }
            }
        </script>
    </div>
@endsection