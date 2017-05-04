@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改公告信息</h3>
        
        <p>填空修改公告</p>
        
        <div class="row">
            <form action='/admin/notice/{{ $ob->id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='oldpic' value="{{ $ob->pic }}">
                <div class="col-lg-7">
                   姓名： <input type="text" class="form-control m-b-10" placeholder="请输入用户名" name='name' value="{{ $ob->name }}">
                </div>
                <div class="col-lg-10">
                    <p>头像：<img src='/admin/upload/notice/{{ $ob->pic }}' width='40' height='40'><input type="file" name='pic' value="{{ $ob->pic }}"></p>
                </div>
                <div class="col-lg-7">
                    简介：<textarea class="form-control overflow" rows="3" name='intro' value="">{{ $ob->intro }}</textarea>
                </div>
                <div class="col-lg-7" style='margin-top:10px;'>
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection