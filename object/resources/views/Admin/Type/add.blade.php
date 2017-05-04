@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">商品类别</h3>
        
        <p>添加商品类别</p>
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
            <form action='/admin/type' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品主类别" name='tname'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品path" name='tpath'>
                </div>
                <div class="col-lg-7">
                    <input type="text" class="form-control m-b-10" placeholder="请输入商品upid" name='upid'>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>     
    </div>
@endsection