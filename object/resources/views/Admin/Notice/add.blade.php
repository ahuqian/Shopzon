@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加公告</h3>
        
        <p>填空添加公告</p>
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
            <form action='/admin/notice' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    姓名：<input type="text" class="form-control m-b-10" name='name'>
                </div>
                <div class="col-lg-7">
                    头像：<input type="file" name='pic'>
                </div>
                <div class="col-lg-7">
                    简介：<textarea class="form-control overflow" rows="3" name='intro'></textarea>
                </div>
                <div class="col-lg-7" style='margin-top:10px;'>
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>
        
        
    </div>
@endsection