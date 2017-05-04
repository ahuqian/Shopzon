@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加前台用户</h3>
        
        <p>填空添加前台用户</p>
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
            <form action='/admin/home_user' method='post' enctype='multpart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='home_name'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入密码" name='home_pass'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入email" name='home_email'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入电话" name='home_tel'>
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>
        
        
    </div>
@endsection