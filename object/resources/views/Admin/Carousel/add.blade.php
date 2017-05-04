@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加轮播图片</h3>
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
            <form action='/admin/carousel' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="col-lg-12" >
                    <input type='file' name='imgname' style='margin-bottom:10px;'>
                </div>
                <div class="col-lg-2">
                    <input type='submit' class="btn btn-block btn-alt" value='添加'>
                </div>
            </form>
        </div>
        
        
    </div>
@endsection