@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">商品管理</h3>
        <h2>请填写商品信息</h2>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <form action='/admin/demo5' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品名称" name='sname'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品单价" name='sprice'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品数量" name='snum'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品描述" name='stext'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品品牌" name='brand'>
                </div>
                <div class="col-lg-7">
                    <select class="form-control input-ms m-b-10" name='tid'>
                        <option>--请选择类别--</option>
                        @foreach($ob as $v)
                        <option value='{{ $v->id }}'>{{ $v->tname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control input-ms m-b-10" name='hot'>
                        <option>--是否热销--</option>
                        <option value='0'>是</option>
                        <option value='1'>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control input-ms m-b-10" name='discount'>
                        <option>--是否打折--</option>
                        <option value='0'>是</option>
                        <option value='1'>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control input-ms m-b-10" name='newinsert'>
                        <option>--是否新品--</option>
                        <option value='0'>是</option>
                        <option value='1'>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <select class="form-control input-ms m-b-10" name='newinsert'>
                        <option>--店长推荐--</option>
                        <option value='1'>是</option>
                        <option value='0'>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div> 
    </div>
@endsection