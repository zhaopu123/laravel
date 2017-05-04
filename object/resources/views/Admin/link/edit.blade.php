@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改链接</h3>
        <p>填空修改链接</p>
        <form action='/admin/link/{{ $ob->id }}' method='post'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                链接名：<input type="text" class="form-control m-b-10" placeholder="请输入链接名" name='name' value="{{ $ob->name }}">
                链接地址：<input type="text" class="form-control m-b-10" placeholder="请输入链接地址" name='url' value="{{ $ob->url }}">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
    </div>
@endsection