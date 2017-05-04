<?php

namespace App\Http\Controllers\Cllect;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CllectController extends Controller
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
        $ob = DB::table('cllect');
        if($request->has('cname')){
            //获取搜索的条件
            $cname = $request->input('cname');
            //添加到将要携带到分页中的数组中
            $where['cname'] = $cname;
            //给查询添加where条件
            $ob->where('cname','like',"%{$cname}%");
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Cllect.index',['list'=>$list,'where'=>$where]);
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Cllect.index');
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
         $row = DB::table('cllect')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/cllect')->with('msg','删除成功');
        }else{
            return redirect('/admin/cllect')->with('error','删除失败');
        }
    }
}
