@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="text-input">
        <h3 class="block-title">修改分类</h3>       
		<form action="/admin/type/{{ $ob->id }}" method='post'>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
            <div class="col-lg-4">
                类名：<input type="text" class="form-control m-b-10"  name='name' value="{{ $ob->name }}">
                <input type='submit' class="btn btn-block btn-alt" value='修改'>
            </div>    
		</form>
    </div>
@endsection