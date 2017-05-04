@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">商品信息管理</h3>
        
        <p>填空修改商品信息/p>
        
        <div class="row">
            <form action='/admin/demo5/{{ $ob->sid }}' method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='oldpic' value='{{ $ob->spic }}'>
                <div class="col-lg-7">
                   名称： <input type="text" class="form-control m-b-10" name='sname' value="{{ $ob->sname }}">
                </div>
                <div class="col-lg-7">
                   描述： <input type="text" class="form-control m-b-10" name='stext' value="{{ $ob->stext }}">
                </div>
                <div class="col-lg-7">
                   单价： <input type="text" class="form-control m-b-10" name='sprice' value="{{ $ob->sprice }}">
                </div>
                <div class="col-lg-7">
                   数量： <input type="text" class="form-control m-b-10" name='snum' value="{{ $ob->snum }}">
                </div>
                <div class="col-lg-7">
                   图片：<input type="file" name='spic' value="{{ $ob->spic }}">
                </div>
                <div class="col-lg-7">
                   品牌：<input type="text" class="form-control m-b-10" name='brand' value="{{ $ob->brand }}">
                </div>
                <div class="col-lg-7">
                   是否热销：
                   <select class="form-control input-ms m-b-10" name='hot'>
                        <option value='0' @if($ob->hot==0)selected @endif>是</option>
                        <option value='1' @if($ob->hot==1)selected @endif>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                   是否打折：
                   <select class="form-control input-ms m-b-10" name='discount'>
                        <option value='0' @if($ob->discount==0) selected @endif>是</option>
                        <option value='1' @if($ob->discount==1) selected @endif>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                   是否新品：
                   <select class="form-control input-ms m-b-10" name='newinsert'>
                        <option value='0' @if($ob->newinsert==0) selected @endif>是</option>
                        <option value='1' @if($ob->newinsert==1) selected @endif>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                   店长推荐:
                   <select class="form-control input-ms m-b-10" name='newinsert'>
                        <option value='0' @if($ob->newinsert==1) selected @endif>是</option>
                        <option value='1' @if($ob->newinsert==0) selected @endif>不是</option>
                    </select>
                </div>
                <div class="col-lg-7">
                    <input type='submit' class="btn btn-block btn-alt" value='修改商品信息'>
                </div>
            </form>
        </div>
        <p></p>
    </div>
@endsection