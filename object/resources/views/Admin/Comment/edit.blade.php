@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改评价</h3>
        <form action='{{ url("admin/comment")."/".$ob->id }}' method='post'>
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="col-lg-4">
                <input type="text" class="form-control m-b-10" placeholder="请输入评价内容" name='cont' value="{{ $ob->cont }}">
                <input type='submit' class="btn btn-block btn-alt" value='提交'>
            </div>
        </form>
    </div>
@endsection