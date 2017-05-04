<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UserController extends Controller
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
        $ob = DB::table('user');
        //判断是否有搜索条件
        if($request->has('username')){
            //获取搜索的条件
            $name = $request->input('username');
            //添加到将要携带到分页中的数组中
            $where['username'] = $name;
            //给查询添加where条件
            $ob->where('username','like',"%{$name}%");
            // dd($name);
        }
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.User.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.User.add');
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
        //
        $this->validate($request, [
            'username' => 'required|max:8',
            'password' => 'required|min:6',
        ],$this->messages());
        //数组中去掉_token
        $data = $request->except('_token');
        //查询数据库返回影响行数
        $id = DB::table('user')->insertGetId($data);
        //大于0 成功
        if($id>0){
            return redirect('admin/demo4')->with('msg','添加成功');
        } 
        //dd($request);
    }

    public function messages()
    {
        return [
            'username.required' => '用户名必须填写', 
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
        $data = DB::table('user')->where('id',$id)->first();
        return view('Admin.User.edit',['ob'=>$data]);
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
                $data->move('./admin/upload',$picname);
                // dd($picname);    
            } 
        }     
        // var_dump(111);
        $data = $request->only('username','password','tel','email','pic');
        $data['pic'] = $picname;
        // dd($data);
        $row = DB::table('user')->where('id',$id)->update($data);
        if($row>0){
            return redirect('admin/demo4')->with('msg','修改成功');
        }else{
            return redirect('admin/demo4')->with('error','修改失败');
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
        // dd(11);
        $row = DB::table('user')->where('id',$id)->delete();
        if($row>0){
            return redirect('admin/demo4')->with('msg','删除成功');
        }else{
            return redirect('admin/demo4')->with('error','删除失败');
        }
    }
}
