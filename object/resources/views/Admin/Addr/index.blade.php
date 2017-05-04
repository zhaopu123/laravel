@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">地址列表</h3>
        @if(session('info'))
            <script type="text/javascript">
                alert("{{ session('info') }}");
            </script>
        @endif
        <div class="table-responsive overflow">
        	<form action='/admin/addr' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='/admin/addr' method='get'>
        		<div class='medio-body'>
    				收件人姓名：<input type='text' class='form-control input-sm m-b-10' name='aname'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>收件人姓名</th>
                        <th>详细地址</th>
                        <th>手机号码</th>
                        <th>所属人</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->aname }}</td>
	                        <td>{{ $v->uaddress }}</td>
                            <td>{{ $v->uphone }}</td>
                            <td>{{ $v->name }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='/admin/addr/{{ $v->id }}/edit'>修改</a>
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
        		form.action = '/admin/addr/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection