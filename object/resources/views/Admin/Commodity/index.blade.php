@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">商品信息列表</h3>
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
            <form action='/admin/demo5' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/admin/demo5' method='get'>
                <div class='medio-body'>
                    商品名称：<input type='text' class='form-control input-sm m-b-10' name='sname'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>商品ID</th>
                        <th>名称</th>
                        <th>描述</th>
                        <th>单价</th>
                        <th>数量</th>
                        <th>图片</th>
                        <th>品牌</th>
                        <th>类别</th>
                        <th>是否热销</th>
                        <th>是否打折</th>
                        <th>是否新增</th>
                        <th>店长推荐</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->sid }}</td>
                            <td>{{ $v->sname }}</td>
                            <td>{{ $v->stext }}</td>
                            <td>{{ $v->sprice }}</td>
                            <td>{{ $v->snum }}</td>
                            <td><img src="/Admin/upload/commodityimg/{{ $v->spic }}" width='30' height='30'></td>
                            <td>{{ $v->brand }}</td>
                            <td>{{ $v->tname }}</td>
                            <td>{{ ($v->hot == 0 ) ?'是': '不是' }}</td>
                            <td>{{ ($v->discount == 0 ) ?'是': '不是' }}</td>
                            <td>{{ ($v->newinsert == 0 )? '是': '不是' }}</td>
                            <td>{{ ($v->redhot == 1)? '是': '不是'}}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->sid }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/demo5/{{ $v->sid }}/edit'>修改</a>
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
                form.action = '/admin/demo5/'+id;
                form.submit();
            }
        }
    </script>
@endsection