@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加用户</h3>
        
        <p>填空添加用户</p>
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
            <form action='/admin/demo4' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='username'>
                </div>
                <div class="col-lg-7">
                    <input type="password" class="form-control m-b-10" placeholder="请输入密码" name='password'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入email" name='email'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入电话" name='tel'>
                </div>
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='qx'>
                        <option>--请选择权限--</option>
                        <option value='1'>普通用户</option>
                        <option value='2'>管理员</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>
        
        
    </div>
@endsection