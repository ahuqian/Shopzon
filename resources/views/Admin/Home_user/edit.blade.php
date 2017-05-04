@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/admin/home_user/{{ $ob->home_id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='oldpic' value='{{ $ob->home_pic }}'>
                <div class="col-lg-4">
                   用户名： <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='home_name' value="{{ $ob->home_name }}">
                </div>
                <div class="col-lg-4">
                   密码： <input type="text" class="form-control m-b-10" placeholder="请输入密码" name='home_pass' value="{{ $ob->home_pass }}">
                </div>
                <div class="col-lg-4">
                    电话：<input type="text" class="form-control m-b-10" placeholder="请输入电话" name='home_tel' value="{{ $ob->home_tel }}">
                </div>
                <div class="col-lg-4">
                   email： <input type="text" class="form-control m-b-10" placeholder="请输入email" name='home_email' value="{{ $ob->home_email }}">
                </div>
                <div class="col-lg-4">
                    头像：<input type="file" class="form-control m-b-10" placeholder="头像" name='home_pic' value="{{ $ob->home_pic }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection