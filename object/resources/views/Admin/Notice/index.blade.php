@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">公告信息列表</h3>
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
            <form action='/notice' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/admin/notice' method='get' name='name'>
                <div class='medio-body'>
                    姓名：<input type='text' class='form-control input-sm m-b-10' name='name'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>姓名</th>
                        <th>头像</th>
                        <th>简介</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ob as $v)
                        <tr>
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->name }}</td>
                            <td><img src="{{ asset('/Admin/upload/notice').'/'.$v->pic }}" width='30' height='30'></td>
                            <td>{{ $v->intro }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->id }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/notice/{{ $v->id }}/edit'>修改</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ob->appends($where)->links() }}
        </div>
    </div>
    <script type="text/javascript">
        function doDel(id){
            if(confirm('确定删除吗？')){
                var form = document.myform;
                form.action = '/admin/notice/'+id;
                form.submit();
            }
        }
    </script>
@endsection