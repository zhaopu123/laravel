@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">链接列表</h3>
        @if(session('info'))
            <script type="text/javascript">
                alert("{{ session('info') }}");
            </script>
        @endif
        <div class="table-responsive overflow">
        	<form action='/admin/link' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='/admin/link' method='get'>
        		<div class='medio-body'>
    				链接名称：<input type='text' class='form-control input-sm m-b-10' name='name'>
    			</div>
    			<div class='medio-body'>
    				链接地址：<input type='text' class='form-control input-sm m-b-10' name='url'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>链接名称</th>
                        <th>链接地址</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->name }}</td>
	                        <td>{{ $v->url }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/link/{{ $v->id }}/edit'>修改</a>
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
        		form.action = '/admin/link/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection