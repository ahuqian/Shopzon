@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改类别</h3>
        
        <p>填空修改商品类别</p>
        
        <div class="row">
            <form action='/admin/type/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-7">
                   类别名称： <input type="text" class="form-control m-b-10" placeholder="请输入类别名称" name='tname' value="{{ $ob->tname }}">
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='修改'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection