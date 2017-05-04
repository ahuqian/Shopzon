@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">收藏信息列表</h3>
        @if(session('msg'))
        	<div class="alert alert-success alert-icon">
			{{ session('msg') }}
			<i class="icon"></i>
			</div>
        @endif
        @if(session('error'))
        	<div class="alert alert-warning alert-icon">
			{{ session('error') }}
			<i class="icon"></i>
			</div>
		@endif
        <div class="table-responsive overflow">
        	<form action='{{ url("admin/cllect") }}' method='post' name='myform'>
        		{{ csrf_field() }}
        		{{ method_field('DELETE') }}
        	</form>

        	<form action='{{ url("admin/cllect") }}' method='get'>
        		<div class='medio-body'>
    				收藏者：<input type='text' class='form-control input-sm m-b-10' name='cname'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品id</th>
                        <th>用户id</th>
                        <th>收藏者</th>
                        <th>收藏时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->sid }}</td>
	                        <td>{{ $v->uid }}</td>
                            <td>{{ $v->cname }}</td>
                            <td>{{ $v->celtime }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
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
        		form.action = '/admin/cllect/'+id;
        		form.submit();
        	}
        }
    </script>
@endsection