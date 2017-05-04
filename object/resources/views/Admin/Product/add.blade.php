@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加商品</h3>        
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif		
        <form action='/admin/product' method='post' enctype='multipart/form-data'>
        	{{ csrf_field() }}
        	<div class="col-lg-4">
                商品名：<input type="text" class="form-control m-b-10" placeholder="请输入商品名" name='pname'>
                商品内容：<input type="text" class="form-control m-b-10" placeholder="请输入内容" name='content'>
                商品图片：
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">上传图片</span>
                    <input type="file" name='pic'>
                </span><br>
                价格：<input type="text" class="form-control m-b-10" placeholder="请输入商品价格" name='money'>
                商品状态：
                <select class="form-control m-b-10" name='state'>
                    <option value='1'>展示</option>
                    <option value='2'>下架</option>
                </select>
                分类：
                <select class="form-control m-b-10" name='cid'>
                    @foreach($list as $v)
                        <option value='{{ $v->id }}'>{{ $v->name }}</option>
                    @endforeach
                </select>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
		</form>
    </div>	
@endsection