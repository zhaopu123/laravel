@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif		
        <form action='/admin/user' method='post' enctype='multipart/form-data'>
        	{{ csrf_field() }}
        	<div class="col-lg-4">
                用户名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name'>
                密码：<input type="password" class="form-control m-b-10" placeholder="请输入密码" name='pw'>
                年龄：<input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='age'>
                性别：<select class="form-control m-b-10" name='sex'>
                    <option value='1'>男</option>
                    <option value='2'>女</option>
                </select>
                email：<input type="text" class="form-control m-b-10" placeholder="请输入邮箱" name='email'>
                手机：<input type="text" class="form-control m-b-10" placeholder="请输入手机号(11位)" name='phone'>
                头像:
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传头像</span>
                    <input type="file" name='pic'>
                </span><br>
                美丽宣言：<textarea class="form-control overflow" name="sign" placeholder="请输入内容"></textarea><br>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
		</form>
    </div>	
@endsection