@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加公告</h3>  
         @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif   
            <form action='{{ url("admin/notice") }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    公告：<input type="text" class="form-control m-b-10" placeholder="请输入公告" name='name'>
                    <span class="btn btn-file btn-alt btn-sm">
                        <span class="fileupload-new">上传图片</span>
                        <input type="file" name='pic'>
                    </span><br><br>
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
    </div>
@endsection