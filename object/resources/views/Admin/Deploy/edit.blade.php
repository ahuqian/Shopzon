@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改网站配置</h3>
        
        <p>填空修改网站配置</p>
        
        <div class="row">
            <form action='{{ url("admin/deploy")."/".$ob->id }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='oldpic' value="{{ $ob->logo }}">
                <div class="col-lg-7" style='margin:5px;'>
                    网站标题：<input type="text" class="form-control m-b-10" name='title' value="{{ $ob->title }}">
                </div>
                <div class="col-lg-7" style='margin:5px;'>
                    网站logo：<input type="file" name='logo' value="{{ $ob->logo }}"><div style='width:100px;'><img src="/Admin/upload/deployimg/{{ $ob->logo }}"></div>
                </div>
                <div class="col-lg-7" style='margin:5px;'>
                    网站描述：<input type="text" class="form-control m-b-10" placeholder="请输入网站描述" name='text' value="{{ $ob->text }}">
                </div>
                <div class="col-lg-7" style='margin:5px;'>
                    网站关键字：<input type="text" class="form-control m-b-10" placeholder="请输入网站关键字" name='key' value="{{ $ob->key }}">
                </div>
                <div class="col-lg-7" style='margin:5px;'>
                    <p>是否开启网站配置</p>
                    <select class="form-control m-b-10" name='kg'>
                        <option value='0' @if($ob->kg ==0)selected @endif>开启</option>
                        <option value='1' @if($ob->kg ==1)selected @endif>不开启</option>
                    </select>
                </div> 
                 <div class="col-lg-6" style='margin:5px;'>
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>        
            </form>
        </div>
        <p></p>
        
    </div>
@endsection