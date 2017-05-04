<?php

namespace App\Http\Controllers\Notice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ////保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('notice');
        //判断是否有搜索条件
        if($request->has('name')){
            //获取搜索的条件
            $sname = $request->input('name');
            //添加到将要携带到分页中的数组中
            $where['name'] = $sname;
            //给查询添加where条件
            $ob->where('name','like',"%{$sname}%");
            // dd($name);
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Notice.index',['ob' => $list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Notice.add');
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
        // dd($request);
        if($request->hasFile('pic')){
            // 判断上传的文件是否有效
            if($request->file('pic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('pic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/notice/',$picname);
                // dd($picname); 
            }
        }  
        $data = $request->except('_token');
        $data['pic'] = $picname;
        // dd($data);
        $id = DB::table('notice')->insertGetId($data);
        if($id>0){
            return redirect('admin/notice')->with('msg','添加成功');
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
        $ob = DB::table('notice')->where('id',$id)->first();

        return view('Admin.Notice.edit',['ob' => $ob]);

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
        $list = $request->except('_token','oldpic','_method');
        if($request->hasFile('pic')){
            // 判断上传的文件是否有效
            if($request->file('pic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('pic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/notice/',$picname);
                // dd($picname); 
            }
            $list['pic'] = $picname;
        }else{
            $list['pic'] = $request->input('oldpic');
        }
        $ob = DB::table('notice')->where('id',$id)->update($list);
        if($ob>0){
            return redirect('admin/notice')->with('msg','修改成功');
        }else{
            return redirect('admin/notice')->with('error','修改失败');
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
        $row = DB::table('notice')->where('id',$id)->delete();
        if($row > 0){
            return redirect('admin/notice')->with('msg','删除成功');
        }else{
            return redirect('admin/notice')->with('msg','删除成功');
        }
    }
}
