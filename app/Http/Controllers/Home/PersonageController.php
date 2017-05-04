<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class PersonageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(111);
        // $id = session('alluser')->id;
        $ob = DB::table('friend')->get();
        // dd($ob);
        $deploy = DB::table('deploy')->get();
        // return view('Home.personage',['ob'=>$ob,'deploy'=>$deploy]);
        $id = session('alluser')->home_id;
        $personage = DB::table('home_user')->where('home_id',$id)->first();
        return view('Home.personage',['ob'=>$ob,'deploy'=>$deploy,'personage'=>$personage]);
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
        // dd($request);
        $data = $request->except('_token','_method','oldpic');
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
                $data->move('./admin/upload/home_userimg',$picname);
                // dd($picname);    
            } 
            $data['home_pic'] = $picname;
        }else{
            $data['home_pic'] = $request->input('oldpic');
        }
        $row = DB::table('home_user')->where('home_id',$id)->update($data);
        if($row>0){
            return redirect('/home/personage')->with('msg','修改成功');
        }else{
            return redirect('/home/personage')->with('error','修改失败');
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
    }
}
