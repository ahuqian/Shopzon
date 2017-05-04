<?php

namespace App\Http\Controllers\Sitelist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class SitelistController extends Controller
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
        $ob = DB::table('sitelist');
        if($request->has('sitename')){
            //获取搜索条件
            $sitename = $request->input('sitename');
            //添加到将要携带到分页中的数组中
            $where['sitename'] = $sitename;
            //给查询添加where条件
            $ob->where('sitename','like',"%{$sitename}%");
        }
        //执行分页查询呢
       $list = $ob->paginate(2);
       // dd($list);
       return view('Admin.Sitelist.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Sitelist.index');
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
        $row = DB::table('sitelist')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/sitelist')->with('msg','删除成功');
        }else{
            return redirect('/admin/sitelist')->with('error','删除失败');
        }
    }
}
