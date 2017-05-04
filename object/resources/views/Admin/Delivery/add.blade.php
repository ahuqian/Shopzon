@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">添加配送方式</h3>
        
        <p>选择添加配送方式</p>
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
            <form action='/admin/delivery' method='post'>
                {{ csrf_field() }}
                <div class="col-lg-4">
                    <input type='text' class="form-control m-b-10" name='dname' placeholder='请输入配送方式'>
                </div>
                <div class="col-lg-12">
                  <p class="m-t-20">是否开启配送方式</p>
                    <div class="radio">
                        <label>
                            <input type="radio" name="switch" value='1'>
                            开启
                        </label>
                    </div>
                                        
                    <div class="radio">
                        <label>
                            <input type="radio" name="switch" value='2'>
                            不开启
                        </label>
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection