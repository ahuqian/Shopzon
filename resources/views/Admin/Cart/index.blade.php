@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">购物车信息列表</h3>
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
        	<form action='{{ url("admin/cart") }}' method='post' name='myform'>
        	      {{ csrf_field() }}	
                  {{ method_field('DELETE') }}
        	</form>

        	<form action='{{ url("admin/cart") }}' method='get'>
        		<div class='medio-body'>
    				商品名称：<input type='text' class='form-control input-sm m-b-10' name='sname'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>商品id</th>
                        <th>用户id</th>
                        <th>商品数量</th>
                        <th>商品图片</th>
                        <th>商品单价</th>
                        <th>商品名称</th>
                        <th>商品小计</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->sid }}</td>
                            <td>{{ $v->uid }}</td>
                            <td>{{ $v->snum }}</td>
                            <td><img src='/admin/upload/commodityimg/{{ $v->spic }}' width='50' height='50'></td>
                            <td>{{ $v->sprice }}</td>
                            <td>{{ $v->sname }}</td>
                            <td>{{ $v->spricesum }}</td>
	                        <td>
	                        	<a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>             </td>
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
                form.action = '/admin/cart/'+id;
                form.submit();
            }
         }
    </script>
@endsection