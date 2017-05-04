@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改订单信息</h3>
        <p>填空修改订单</p>
        <div class="row">
            <form action='/admin/orderlist/{{ $list->did }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='did' value='{{ $list->did }}'>
                <div class="col-lg-7">
                   订单号： <input type="text" class="form-control m-b-10" name='ordername' value="{{ $list->ordername }}" disabled='none'> 
                </div>
                <div class="col-lg-7">
                   商品名称：<input type="text" class="form-control m-b-10" name='sname' value="{{ $list->sname }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   商品单价：<input type="text" class="form-control m-b-10" name='sprice' value="{{ $list->sprice }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   商品图片：<input type="file" name='spic' value="{{ $list->spic }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   收货地址： <input type="text" class="form-control m-b-10" name='site' value="{{ $list->site }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   订单状态
                    <select class="form-control input-ms m-b-10" name='orderstate'>
                        <option>--请选择类别--</option>
                        <option value='1' @if($list->orderstate==0)selected @endif>已付款</option>
                        <option value='2' @if($list->orderstate==0)selected @endif>待发货</option>
                        <option value='3' @if($list->orderstate==0)selected @endif>已发货</option>
                        <option value='4' @if($list->orderstate==0)selected @endif>已收货</option>
                    </select>
                </div>
                <div class="col-lg-7">
                   配送方式： <input type="text" class="form-control m-b-10" name='danme' value="{{ $list->dname }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   收货人电话： <input type="text" class="form-control m-b-10" name='ordertel' value="{{ $list->ordertel }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   订单用户： <input type="text" class="form-control m-b-10" name='uid' value="{{ $list->uid }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   收货人姓名： <input type="text" class="form-control m-b-10" name='sitename' value="{{ $list->sitename }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                   下单时间： <input type="text" class="form-control m-b-10" name='xdtime' value="{{ $list->xdtime }}" disabled='none'>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='修改'>
                </div>
            </form>
        </div>
        <p></p>
    </div>
@endsection