@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改公告</h3>
        <form action="{{ url('admin/set').'/'.$ob->id }}" method='post' enctype='multipart/form-data'>
            <input type="hidden" name='oldpic' value="{{ $ob->pic }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                <input type="text" class="form-control m-b-10" placeholder="请输入网站名称" name='title' value="{{ $ob->title }}">
                <input type="text" class="form-control m-b-10" placeholder="请输入网站关键字" name='keywords' value="{{ $ob->keywords }}">
                <input type="text" class="form-control m-b-10" placeholder="请输入网站版权" name='copy' value="{{ $ob->copy }}">
                <select class="form-control m-b-10" name='kg'>
                    <option>--请选择--</option>
                    <option value='1' {{ ($ob->kg == 1)?'selected':'' }}>开</option>
                    <option value='2' {{ ($ob->kg == 2)?'selected':'' }}>关</option>
                </select>
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