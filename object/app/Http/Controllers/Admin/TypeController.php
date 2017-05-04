<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class TypeController extends Controller
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
        $ob = DB::table('type');
        //判断是否有搜索条件
        if($request->has('tname')){
            //获取搜索的条件
            $tname = $request->input('tname');
            //添加到将要携带的分页中的数组中
            $where['tname'] = $tname;
            //给查询添加where条件
            $ob->where('tname','like',"%{$tname}%");
        }
        //执行分页查询
        $list = $ob->paginate(3);
        return view('Admin.Type.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //返回视图类别下的添加页面
        return view('Admin.Type.add');
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
        $message = [
            'name.required' => '类别名必须填写',
        ]; 

        $this->validate($request,[
            'tname' => 'required|max:8',
        ],$message);
        //除掉数组中的_token
        $data = $request->except('_token');
        $id = DB::table('type')->insertGetId($data);
        if($id>0){
            return redirect('admin/type')->with('msg','添加成功');
        }
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
        $data = DB::table('type')->where('id',$id)->first();
        return view('Admin.Type.edit',['ob'=>$data]);
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
        $data = $request->only('tname');
        $row = DB::table('type')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/type')->with('msg','修改成功');
        }else{
            return redirect('admin/type')->with('error','修改失败');
        }
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
        $row = DB::table('type')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/type')->with('msg','删除成功');
        }else{
            return redirect('admin/type')->with('error','删除失败');
        }
    }
}
