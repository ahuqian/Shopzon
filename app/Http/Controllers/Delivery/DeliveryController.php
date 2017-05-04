<?php

namespace App\Http\Controllers\Delivery;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // 保存搜索条件
        $where = '';
        // 实例化操作表
        $ob = DB::table('delivery');
        if($request->has('dname')){
            // 获取搜索条件
            $dname = $request->input('dname');
            // 添加到将要带到执行搜索分页中的数组中
            $where['dname'] = $dname;
            // 给查询添加where条件
            $ob->where('dname','like',"%{$dname}%");
            // dd($request->has('dcontent'));
        }
        // 执行分页条件
        $list = $ob->paginate(2);
        return view('Admin.Delivery.index',['list' => $list,'where' => $where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Delivery.add');
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
        $data = $request->except('_token');
        // dd($data);
        $id = DB::table('delivery')->insertGetId($data);
        if($id>0){
            return redirect('admin/delivery')->with('msg','添加成功');
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
        $data = DB::table('delivery')->where('id',$id)->first();
        // dd($data);  
        return view('Admin.Delivery.edit',['ob'=>$data]);
        // dd('111');
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
        $data = $request->only('dname','switch');
        // dd($data);   
        $row = DB::table('delivery')->where('id',$id)->update($data);
        // dd($row);
        if($row>0){
            return redirect('admin/delivery')->with('msg','修改成功');
        }else{
            return redirect('admin/delivery')->with('error','修改失败');
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
        $row = DB::table('delivery')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/delivery')->with('msg','删除成功');
        }else{
            return redirect('admin/delivery')->with('error','删除失败');
        }
    }
}
