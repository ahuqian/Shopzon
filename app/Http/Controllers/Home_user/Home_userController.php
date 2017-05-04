<?php

namespace App\Http\Controllers\Home_user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class Home_userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('home_user');
        //判断是否有搜索条件
        if($request->has('home_name')){
            //获取搜索的条件
            $home_name = $request->input('home_name');
            //添加到将要携带到分页中的数组中
            $where['home_name'] = $home_name;
            //给查询添加where条件
            $ob->where('home_name','like',"%{$home_name}%");
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Home_user.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Home_user.add');
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
        $id = DB::table('home_user')->insertGetId($data);
        if($id>0){
            return redirect('admin/home_user')->with('msg','添加成功');
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
        $data = DB::table('home_user')->where('home_id',$id)->first();
        return view('Admin.Home_user.edit',['ob'=>$data]);
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
        $list = $request->except('_method','_token','oldpic');
        if($request->hasFile('home_pic')){
            // 判断上传的文件是否有效
            if($request->file('home_pic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('home_pic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/home_userimg',$picname);
                // dd($picname);    
            }
            $list['home_pic'] = $picname;
        }else{
            $list['home_pic'] = $request->input('oldpic');
        }
        
        
        $row = DB::table('home_user')->where('home_id',$id)->update($list);
        if($row>0){
            return redirect('admin/home_user')->with('msg','修改成功');
        }else{
            return redirect('admin/home_user')->with('error','修改失败');
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
        $row = DB::table('home_user')->where('home_id',$id)->delete();
        if($row>0){
            return redirect('/admin/home_user')->with('msg','删除成功');
        }else{
            return redirect('/admin/home_user')->with('error','删除失败');
        }
    }
}
