@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加子类</h3>       
        <form action='/admin/type/typeson' method='post'>
        	{{ csrf_field() }}
        	<div class="col-lg-4">
                父类名：<input type="text" class="form-control m-b-10"  disabled='' value="{{ $list->name }}">
                子类名：<input type="text" class="form-control m-b-10"  placeholder="请输入子类名" name='name'>
                <input type="hidden" class="form-control m-b-10"  name='ord' value="{{ $list->id }}">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
		</form>
    </div>	
@endsection