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
        <form action='{{ url("admin/set") }}' method='post' enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="col-lg-4">
                <input type="text" class="form-control m-b-10" placeholder="请输入网站名称" name='title'>
                <input type="text" class="form-control m-b-10" placeholder="请输入网站关键字" name='keywords'>
                <input type="text" class="form-control m-b-10" placeholder="请输入版权" name='copy'>
                <select class="form-control m-b-10" name='kg'>
                    <option>--请选择--</option>
                    <option value='1'>开</option>
                    <option value='2'>关</option>
                </select>
                <span class="btn btn-file btn-alt btn-sm">               
                    <span class="fileupload-new">上传图片</span>
                    <input type="file" name='pic'>
                </span><br><br>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
    </div>
@endsection