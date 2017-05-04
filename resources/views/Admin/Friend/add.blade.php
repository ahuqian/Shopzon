@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">友情链接管理</h3>
        
        <p>添加友情链接</p>
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
            <form action="{{ url('admin/friend') }}" method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    链接名称：<input type="text" class="form-control m-b-10" placeholder="请输入链接名称" name='fname'>
                </div>
                <div class="col-lg-4">
                    链接地址：<input type="text" class="form-control m-b-10" placeholder="请输入链接地址" name='furl'>
                </div>
                
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection