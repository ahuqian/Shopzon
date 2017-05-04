<?php

namespace App\Http\Controllers\Deploy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class DeployController extends Controller
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
        $ob = DB::table('deploy');
        if($request->has('title')){
            //获取搜索条件
            $title = $request->input('title');
            // dd($title);
            //添加到将要携带到分页的中的数组中
            $where['title'] = $title;
            // dd($where);
            //给查询添加where条件
            $ob->where('title','like',"%{$title}%");
        }
        //执行分页查询
        $list = $ob->paginate(1);
        // dd($list);
        return view('Admin.Deploy.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Deploy.add');
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
        if($request->hasFile('logo')){
            // 判断上传的文件是否有效
            if($request->file('logo')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('logo');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/deployimg',$picname);
            }
        }
        $data = $request->except('_token');
        $data['logo'] = $picname;
        $id = DB::table('deploy')->insertGetId($data);
        if($id > 0 ){
            return redirect('admin/deploy')->with('msg','添加成功');
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
        $data = DB::table('deploy')->where('id',$id)->first();
        return view('Admin.Deploy.edit',['ob'=>$data]);
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
        // dd($request);
        $list = $request->except('_token','_method','oldpic');
        if($request->hasFile('logo')){
            // 判断上传的文件是否有效
            if($request->file('logo')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('logo');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/deployimg',$picname);
                // dd($picname);    
            } 
            $list['logo'] = $picname;
        }else{
            $list['logo'] = $request->input('oldpic');
        }
        $row = DB::table('deploy')->where('id',$id)->update($list);
        if($row>0){
            return redirect('admin/deploy')->with('msg','修改成功');
        }else{
            return redirect('admin/deploy')->with('error','修改失败');
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
        $row = DB::table('deploy')->where('id',$id)->delete();
        if($row>0){
            return redirect('/admin/deploy')->with('msg','删除成功');
        }else{
            return redirect('/admin/deploy')->with('error','删除失败');
        }
    }
}
