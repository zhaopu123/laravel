@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改管理员信息</h3>       
        <form action="/admin/adm/{{ $ob->id }}" method='post' enctype='multipart/form-data'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                <input type="hidden" name="oldpic" value="{{ $ob->pic }}">
                用户名：<input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                头像:<div><img src="/Admin/upload/{{ $ob->pic }}" width='100' height='100'></div>
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传头像</span>
                    <input type="file" name='pic'>
                </span><br>
                权限：
                <select class="form-control m-b-10" name='level'>
                    <option value='1' {{ ($ob->level == 1)?'selected':''}}>一般管理员</option>
                    <option value='2' {{ ($ob->level == 2)?'selected':''}}>超级管理员</option>
                </select>
                <input type='submit' class="btn btn-block btn-alt" value='修改'>
            </div>    
        </form>
    </div>
@endsection