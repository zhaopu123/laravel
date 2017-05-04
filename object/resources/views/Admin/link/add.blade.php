@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加链接</h3>   
        <p>填空添加链接</p>
        <form action='/admin/link' method='post'>
            {{ csrf_field() }}
            <div class="col-lg-4">
                链接名：<input type="text" class="form-control m-b-10" placeholder="请输入用连接名" name='name'><br>
                链接地址：<input type="text" class="form-control m-b-10" placeholder="请输入链接地址" name='url'><br>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>   
    </div>
@endsection