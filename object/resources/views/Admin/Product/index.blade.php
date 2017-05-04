<!-- {{ date_default_timezone_set("PRC") }} -->
@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
		<h3 class="block-title">商品信息列表</h3>
		@if(session('info'))
		    <script type="text/javascript">
		        alert("{{ session('info') }}");
		    </script>
		@endif
		@if(session('error'))
		    <script type="text/javascript">
		        alert("{{ session('error') }}");
		    </script>
		@endif
		<div class="table-responsive overflow">
			<form name='myform' method='post'>
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
			</form>	
			<form action="{{ url('/admin/product') }}" method='get'>
        		<div class='col-md-4 form-group'>
    				商品名：
    				<input type='text' class='input-sm validate[required] form-control' name='pname'><br>	    	 
        			<input type='submit' class='btn btn-sm btn-alt m-r-5' value='搜索'>		
        		</div>  		
        	</form>
			<table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品名</th>
                        <th>商品内容</th>
                        <th>商品图片</th>
                        <th>商品价格</th>
                        <th>商品状态</th>
                        <th>上架时间</th> 
                        <th>商品分类ID</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
					@foreach($list as $v)
						<tr>
							<td>{{	$v->id	}}</td>
							<td>{{	$v->pname }}</td>
							<td>{{	$v->content	}}</td>
							<td><img src="/Admin/upload/{{ $v->pic }}" width='50' height='50'></td>
							<td>{{	$v->money }}</td>
							<td>{{ ($v->state == 1)?'展示':'下架' }}</td>
							<td>{{ date('Y-m-d H:i:s',$v->atime) }}</td>
							<td>{{ $v->name }}</td>
							<td>
								<a class="btn btn-sm btn-alt m-r-5"	href="javascript:doDel({{ $v->id }} )">删除</a>
								<a class="btn btn-sm btn-alt m-r-5"	href="/admin/product/{{ $v->id }}/edit">修改</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $list->appends($where)->links() }}
		</div>
	</div>
	<script type="text/javascript">
		function doDel(id)
		{
            if(confirm('确认删除?')){
                var form = document.myform;
                form.action = '/admin/product/'+id;
                form.submit();
            }
	    }
	</script>
@endsection