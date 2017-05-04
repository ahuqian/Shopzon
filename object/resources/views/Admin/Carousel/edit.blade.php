@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改用户</h3>
        
        <p>填空修改用户</p>
        
        <div class="row">
            <form action='/admin/demo4/{{ $ob->id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-7">
                   用户名： <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='username' value="{{ $ob->username }}">
                </div>
                <div class="col-lg-7">
                   密码： <input type="text" class="form-control m-b-10" placeholder="请输入密码" name='password' value="{{ $ob->password }}">
                </div>
                <div class="col-lg-7">
                    电话：<input type="text" class="form-control m-b-10" placeholder="请输入电话" name='tel' value="{{ $ob->tel }}">
                </div>
                <div class="col-lg-7">
                   email： <input type="text" class="form-control m-b-10" placeholder="请输入email" name='email' value="{{ $ob->email }}">
                </div>
                <div class="col-lg-10">
                    <p>头像：<img src='/admin/upload/{{ $ob->pic }}' width='40' height='40'><input type="file" name='pic' value="{{ $ob->pic }}"></p>
                </div>
                <div class="col-lg-7">
                权限：<select class="form-control m-b-10" name='qx'>
                        <option value='1' @if($ob->qx ==1)selected @endif>普通用户</option>
                        <option value='2' @if($ob->qx ==2)selected @endif>管理员</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection