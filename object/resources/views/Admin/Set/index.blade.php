@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">网站配置列表</h3>
        @if(session('msg'))
        	<div class="alert alert-success alert-icon">
			{{ session('msg') }}
			<i class="icon"></i>
			</div>
        @endif
        @if(session('error'))
        	<div class="alert alert-warning alert-icon">
			{{ session('error') }}
			<i class="icon"></i>
			</div>
		@endif
        <div class="table-responsive overflow">
        	<form action='{{ url("admin/set") }}' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='{{ url("admin/set") }}' method='get'>
        		<div class='medio-body'>
    				网站名称：<input type='text' class='form-control input-sm m-b-10' name='title'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile" enctype='multipart/form-data'>
                <thead>
                    <tr>
                        <th>网站配置编号</th>
                        <th>网站名称</th>
                        <th>网站关键字</th>
                        <th width='250'>网站版权</th>
                        <th>网站开关</th>
                        <th>网站LOGO</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->title }}</td>
                            <td>{{ $v->keywords }}</td>
                            <td width='250'>{{ $v->copy }}</td>
                            <td>{{ ($v->kg == 1)?'开':'关' }}</td>
	                        <td><img src="/Admin/upload/{{ $v->pic }}" width='50' height='50'></td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href="{{ url('admin/set')."/".$v->id }}/edit">修改</a>
	                        </td>
	                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
        	if(confirm('确定删除吗？')){
        		var form = document.myform;
        		form.action = '/admin/set/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection