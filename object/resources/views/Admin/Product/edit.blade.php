@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="text-input">
        <h3 class="block-title">修改商品信息</h3>       
		<form action="/admin/product/{{ $ob->id }}" method='post' enctype='multipart/form-data'>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
            <div class="col-lg-4">
                <input type="hidden" name="oldpic" value="{{ $ob->pic }}">
                商品名：<input type="text" class="form-control m-b-10" placeholder="请输入商品名" name='pname' value="{{ $ob->pname }}">
                商品内容：<input type="text" class="form-control m-b-10" placeholder="请输入内容" name='content' value="{{ $ob->content }}">
                商品图片:
                <div><img src="/Admin/upload/{{ $ob->pic }}" width='100' height='100'></div>
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传图片</span>
                    <input type="file" name='pic'>
                </span><br>
                价格：<input type="text" class="form-control m-b-10" placeholder="请输入商品价格" name='money' value="{{ $ob->money }}">
                商品状态：
                <select class="form-control m-b-10" name='state'>
                    <option value='1' {{ ($ob->state == 1)?'selected':''}}>展示</option>
                    <option value='2' {{ ($ob->state == 2)?'selected':''}}>下架</option>
                </select>
                分类： 
                <select class="form-control m-b-10" name='cid'>
                    @foreach($list as $v)
                        <option value='{{ $v->id }}' {{ ($ob->cid == $v->id)?'selected':''}}>{{ $v->name }}</option>
                    @endforeach
                </select>
                <input type='submit' class="btn btn-block btn-alt" value='修改'>
            </div>    
		</form>
    </div>
@endsection