@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加分类</h3>       
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif	
        <form action='/admin/type' method='post'>
        	{{ csrf_field() }}
        	<div class="col-lg-4">
                类名：<input type="text" class="form-control m-b-10" placeholder="请输入类名" name='name'>
                <input type="hidden" class="form-control m-b-10"  name='path' value='0'>
                <input type="hidden" class="form-control m-b-10"  name='ord' value='0'>
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
		</form>
    </div>	
@endsection