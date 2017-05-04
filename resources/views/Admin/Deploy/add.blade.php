@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">网站配置管理</h3>
        
        <p>添加网站配置</p>
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
            <form action="{{ url('admin/deploy') }}" method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    网站标题：<input type="text" class="form-control m-b-10" placeholder="请输入网站标题" name='title'>
                </div>
                <div class="col-lg-7">
                    网站logo：<input type="file" name='logo'>
                </div>
                <div class="col-lg-7" style='margin-top:10px;'>
                    网站描述：<input type="text" class="form-control m-b-10" placeholder="请输入网站描述" name='text'>
                </div>
                <div class="col-lg-7">
                    网站关键字：<input type="text" class="form-control m-b-10" placeholder="请输入网站关键字" name='key'>
                </div>
                <div class="col-lg-12">
                  <p class="m-t-20">是否开启网站开关</p>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kg" value='0'>
                            开启
                        </label>
                    </div>
                                        
                    <div class="radio">
                        <label>
                            <input type="radio" name="kg" value='1'>
                            不开启
                        </label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection