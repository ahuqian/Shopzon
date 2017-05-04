@extends('Admin.base.parent')
@section('content')
	<div class="block-area" id="tableHover">
        <h3 class="block-title">地址信息列表</h3>
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
        	<form action='{{ url("admin/sitelist") }}' method='post' name='myform'>
        	      {{ csrf_field() }}	
                  {{ method_field('DELETE') }}
        	</form>

        	<form action='{{ url("admin/sitelist") }}' method='get'>
        		<div class='medio-body'>
    				收货人：<input type='text' class='form-control input-sm m-b-10' name='sitename'>
    			</div>
        		<input type='submit' class='btn' value='搜索'>
        	</form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>用户id</th>
                        <th>省</th>
                        <th>市</th>
                        <th>县</th>
                        <th>收货人</th>
                        <th>收货人电话</th>
                        <th>默认地址</th>
                        <th>详细地址</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                    	<tr>
	                        <td>{{ $v->id }}</td>
	                        <td>{{ $v->uid }}</td>
                            <td>{{ $v->sitepro }}</td>
                            <td>{{ $v->sitecounty }}</td>
	                        <td>{{ $v->sitecon }}</td>
                            <td>{{ $v->sitename }}</td>
                            <td>{{ $v->sitetel }}</td>
                            <td>{{ $v->sitedefault }}</td>
                            <td>{{ $v->sitedetail }}</td>
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
                form.action = '/admin/sitelist/'+id;
                form.submit();
            }
         }
    </script>
@endsection