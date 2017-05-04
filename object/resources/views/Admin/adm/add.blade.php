@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加管理员</h3>
        
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif      
        <form action='/admin/adm' method='post' enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="col-lg-4">
                用户名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name'>
                密码：<input type="password" class="form-control m-b-10" placeholder="请输入密码" name='pw'>
                头像:
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传头像</span>
                    <input type="file" name='pic'>
                </span><br>
                权限：<select class="form-control m-b-10" name='level'>
                    <option value='1'>一般管理员</option>
                    <option value='2'>超级管理员</option>
                </select>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
        
    </div>
@endsection