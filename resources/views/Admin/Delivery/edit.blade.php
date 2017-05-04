@extends('Admin.base.parent')
@section('content')
	<!-- Text Input -->
    <div class="block-area" id="text-input">
        <h3 class="block-title">修改配送方式</h3>
        
        <p>请选择是否开启配送方式</p>
        
        <div class="row">
            <form action='/admin/delivery/{{ $ob->id }}' method='post'>
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input type='hidden' name='dname' value="{{ $ob->dname }}">
                <div class="col-lg-7">
                    <select class="form-control m-b-10" name='switch'>
                        <option value='1' @if($ob->switch ==1)selected @endif>开启</option>
                        <option value='2' @if($ob->switch ==2)selected @endif>不开启</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <input type='submit' class="btn btn-block btn-alt" value='提交'>
                </div>
            </form>
        </div>
        <p></p>
        
    </div>
@endsection