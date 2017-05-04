<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(11);
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        return view('Home.update',['friend' => $friend,'deploy' => $deploy]);
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
        // dd($request);
        $list = $request->except('_token');
        $id = session('alluser')->home_id;
        $aa[] = DB::table('home_user')->where('home_id',$id)->first();
        // dd($aa);
        $yuanpass = $request->input('yuanpass');
        $newpass = $request->input('newpass');
        $qrnewpass = $request->input('qrnewpass');
        foreach ($aa as $v) {
            $home_pass = $v->home_pass;
        }
        // dd($home_pass);
        // var_dump($home_pass);
        // dd(md5($yuanpass));
        if(md5($yuanpass) == $home_pass){
            //修改原密码
            if($newpass == $qrnewpass){
                $list = $request->except('_token','yuanpass','qrnewpass','newpass');
                $list['home_pass'] = md5($newpass);
                $row = DB::table('home_user')->where('home_id',$id)->update($list);
            }
        }
        if($row>0){
            session()->forget('alluser');
            return redirect('/home/login')->with('msg','修改成功,请重新登录');
        }else{
            return redirect('/home/update')->with('msg','修改失败');
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
    }
}
