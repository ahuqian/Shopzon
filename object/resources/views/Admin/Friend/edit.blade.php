@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改友情链接</h3>
        
        <p>填空修改友情链接</p>
        
        <div class="row">
            <form action='{{ url("admin/friend")."/".$ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-lg-4">
                   链接名称： <input type="text" class="form-control m-b-10" placeholder="请输入链接名称" name='fname' value="{{ $ob->fname }}">
                </div>
               <div class="col-lg-4">
                   链接地址： <input type="text" class="form-control m-b-10" placeholder="请输入链接地址" name='furl' value="{{ $ob->furl }}">
                </div>
                <div class="col-lg-12">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection