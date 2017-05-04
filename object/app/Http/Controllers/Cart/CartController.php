<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('cart');
        if($request->has('sname')){
            //获取搜索条件
            $sname = $request->input('sname');
            //添加到将要携带到分页中的数组中
            $where['sname'] = $sname;
            //给查询添加where条件
            $ob->where('sname','like',"%{$sname}%");
        }
        //执行分页查询呢
        $list = $ob->paginate(5);
        // dd($list);
        return view('Admin.Cart.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $row = DB::table('cart')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/cart')->with('msg','删除成功');
        }else{
            return redirect('/admin/cart')->with('error','删除失败');
        }
    }
}
