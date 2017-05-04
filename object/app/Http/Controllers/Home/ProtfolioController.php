<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $friend = DB::table('friend')->get();
        $list = DB::table('commodity')->get();
        // dd($list); 
        $deploy = DB::table('deploy')->get();
        return view('Home.portfolio',['friend'=>$friend,'list'=>$list,'deploy'=>$deploy]);
    }

    public function sou(Request $request)
    {
        // dd($request);
        //保存搜索条件
        $where = '';

        //实例化操作表
        $ob = DB::table('commodity');
        //判断是否有搜索条件
        if($request->has('sname')){
            //获取搜索的条件
            $sname = $request->input('sname');
            //添加到将要携带到分页中的数组中
            $where['sname'] = $sname;
            //给查询添加where条件
            $ob->where('sname','like',"%{$sname}%");
            // dd($sname);
        }
        $list = $ob->get();
        // dd($list);
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        return view('Home.portfolio',['list'=>$list,'friend'=>$friend,'deploy'=>$deploy]);
    }

    public function hzp()
    {
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        $hzp = DB::table('commodity')->where('tid',1)->get();
        return view('Home.portfolio',['list'=> $hzp,'friend'=>$friend,'deploy'=>$deploy]);
    }

    public function hzgj()
    {
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        $hzgj = DB::table('commodity')->where('tid',2)->get();
        return view('Home.portfolio',['list'=> $hzgj,'friend'=>$friend,'deploy'=>$deploy]);
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
