@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加订单</h3>
        
        <p>填空添加订单</p>

            <!-- <div class="alert alert-danger">
                <ul>
                    
                </ul>
            </div> -->

        <div class="row">
            <form action='/admin/orderlist' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品ID" name='sid'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单ID" name='oid'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户ID" name='uid'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单号" name='order'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品数量" name='order'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单小计" name='spricesum'>
                </div>
                <div class="col-lg-7">
                    商品图片：<input type="file" style='margin-bottom:10px;' name='spic'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名称" name='sname'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单商品数量" name='ordernum'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入收货人姓名" name='sitename'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入收货人地址" name='site'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入邮编" name='code'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入收货人联系电话" name='ordertel'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品单价" name='sprice'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单总价" name='total'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入订单时间" name='xdtime'>
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='orderstate'>
                        <option>--订单状态--</option>
                        <option value='1'>未付款</option>
                        <option value='2'>未发货</option>
                        <option value='3'>已发货</option>
                        <option value='4'>已收货</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='payid'>
                        <option>--支付方式--</option>
                        <option value='1'>支付宝支付</option>
                        <option value='2'>微信支付</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='payid'>
                        <option>--配送方式--</option>
                        <option value=''>顺丰快递</option>
                        <option value='2'>申通快递</option>
                        <option value='3'>圆通快递</option>
                        <option value='4'>中通快递</option>
                        <option value='5'>韵达快递</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>
        
        
    </div>
@endsection