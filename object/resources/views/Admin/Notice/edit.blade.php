@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改公告</h3>
        <form action="{{ url('admin/notice').'/'.$ob->id }}" method='post' enctype='multipart/form-data'>
            <input type="hidden" name='oldpic' value="{{ $ob->pic }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                公告：<input type="text" class="form-control m-b-10" placeholder="请输入公告" name='name' value="{{ $ob->name }}">
                <div>
                    <img src="/Admin/upload/{{ $ob->pic }}" width='100' height='100'>
                </div>
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传图片</span>
                    <input type="file" name='pic'>
                </span><br><br>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
    </div>
@endsection