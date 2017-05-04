<?php

namespace App\Http\Controllers\Friend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class FriendController extends Controller
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
        $ob = DB::table('friend');
        if($request->has('fname')){
            //获取搜索的条件
            $fname = $request->input('fname');
            //添加到将要携带到分页中的数组中
            $where['fname'] = $fname;
            //给查询添加where条件
            $ob->where('fname','like',"%{$fname}%");
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Friend.index',['list'=>$list,'where'=>$where]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Friend.add');
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
         $this->validate($request, [
            'fname' => 'required|max:8',
        ],$this->messages());
        $data = $request->except('_token');
        $id = DB::table('friend')->insertGetId($data);
        if($id>0){
            return redirect('admin/friend')->with('msg','添加成功');
        }

    }

    public function messages()
    {
        return [
            'fname.required' => '用户名必须填写',
        ];
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
        $data = DB::table('friend')->where('id',$id)->first();
        return view('Admin.Friend.edit',['ob'=>$data]);
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
        $data = $request->only('fname','furl');
        $row = DB::table('friend')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/friend')->with('msg','修改成功');
        }else{
            return redirect('admin/friend')->with('error','修改失败');
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
        $row = DB::table('friend')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/friend')->with('msg','删除成功');
        }else{
            return redirect('/admin/friend')->with('error','删除失败');
        }
    }
}
