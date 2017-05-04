@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">用户信息列表</h3>
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
            <form action='{{ url("admin/home_user") }}' method='post' name='myform'  enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/admin/home_user' method='get'>
                <div class='medio-body'>
                    姓名：<input type='text' class='form-control input-sm m-b-10' name='home_name'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>密码</th>
                        <th>头像</th>
                        <th>email</th>
                        <th>电话</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->home_id }}</td>
                            <td>{{ $v->home_name }}</td>
                            <td>{{ $v->home_pass }}</td>
                            <td><img src='/admin/upload/home_userimg/{{ $v->home_pic }}' width='50' height='50'></td>
                            <td>{{ $v->home_email }}</td>
                            <td>{{ $v->home_tel }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->home_id }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/home_user/{{ $v->home_id }}/edit'>修改</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(home_id){
            if(confirm('确定删除吗？')){
                var form = document.myform;
                form.action = 'home_user/'+home_id;
                form.submit();
            }
        }
    </script>
@endsection