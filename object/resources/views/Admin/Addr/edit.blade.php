@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改地址</h3>
        <p>填空修改地址</p>
        <form action='/admin/addr/{{ $ob->id }}' method='post'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                收件人姓名：<input type="text" class="form-control m-b-10" placeholder="请输入收件人姓名" name='aname' value="{{ $ob->aname }}">
                详细地址：<input type="text" class="form-control m-b-10" placeholder="请输入详细地址" name='uaddress' value="{{ $ob->uaddress }}">
                手机号码：<input type="text" class="form-control m-b-10" placeholder="请输入手机号码" name='uphone' value="{{ $ob->uphone }}">
                <input type="hidden"  name='uid' value="{{ $ob->uid }}">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
    </div>
@endsection