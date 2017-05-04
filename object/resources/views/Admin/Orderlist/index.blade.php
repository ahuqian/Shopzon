@extends('Admin.base.parent')
@section('content')
    <div class="block-area" id="tableHover">
        <h3 class="block-title">订单信息列表</h3>
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
            <form action='/orderlist' method='post' name='myform'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
            </form>

            <form action='/orderlist' method='get'>
                <div class='medio-body'>
                    订单号：<input type='text' class='form-control input-sm m-b-10' name='ordername'>
                </div>
                <input type='submit' class='btn' value='搜索'>
            </form>
            <table class="table table-bordered table-hover tile">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>订单号</th>
                        <th>商品名称</th>
                        <th>商品单价</th>
                        <th>商品图片</th>
                        <th>收货地址</th>
                        <th>订单状态</th>
                        <th>配送方式</th>
                        <th>收货人电话</th>
                        <th>订单用户</th>
                        <th>收货人姓名</th>
                        <th>下单时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $v)
                        <tr>
                            <td>{{ $v->did }}</td>
                            <td>{{ $v->ordername }}</td>
                            <td>{{ $v->sname }}</td>
                            <td>{{ $v->sprice }}</td>
                            <td><img src='/admin/upload/commodityimg/{{ $v->spic }}' width='40' height='40'></td>
                            <td>{{ $v->site }}</td>
                            <td>@if($v->orderstate ==1) 已付款 @elseif($v->orderstate == 2) 待发货 @elseif($v->orderstate == 3) 已发货 @elseif($v->orderstate == 4) 已收货 @endif</td>
                            <td>{{ $v->dname }}</td>
                            <td>{{ $v->ordertel }}</td>
                            <td>{{ $v->uid }}</td>
                            <td>{{ $v->sitename }}</td>
                            <td>{{ $v->xdtime }}</td>
                            <td>
                                <a class="btn btn-sm btn-alt m-r-5" href='javascript:doDel({{ $v->did }})'>删除</a>
                                <a class="btn btn-sm btn-alt m-r-5" href='/admin/orderlist/{{ $v->did }}/edit'>修改</a>
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
                form.action = 'orderlist/'+id;
                form.submit();
            }
        }
    </script>
@endsection