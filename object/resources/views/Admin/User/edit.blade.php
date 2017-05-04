@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>       
		<form action="/admin/user/{{ $ob->id }}" method='post' enctype='multipart/form-data'>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
            <div class="col-lg-4">
                <input type="hidden" name="oldpic" value="{{ $ob->pic }}">
                用户名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                年龄：<input type="text" class="form-control m-b-10" placeholder="请输入年龄" name='age' value="{{ $ob->age }}">
                性别：<select class="form-control m-b-10" name='sex'>
                    <option value='1' {{ ($ob->sex == 1)?'selected':''}}>男</option>
                    <option value='2' {{ ($ob->sex == 2)?'selected':''}}>女</option>
                </select>
                email：<input type="text" class="form-control m-b-10" placeholder="请输入邮箱" name='email' value="{{ $ob->email }}">
                手机：<input type="text" class="form-control m-b-10" placeholder="请输入手机号(11位)" name='phone' value="{{ $ob->phone }}">
                头像:<div><img src="/Admin/upload/{{ $ob->pic }}" width='100' height='100'></div>
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传头像</span>
                    <input type="file" name='pic'>
                </span><br>
                美丽宣言：<textarea class="form-control overflow" name="sign" placeholder="请输入内容">{{ $ob->sign }}</textarea><br>
                <input type='submit' class="btn btn-block btn-alt" value='修改'>
            </div>    
		</form>
    </div>
@endsection