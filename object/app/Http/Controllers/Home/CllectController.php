<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CllectController extends Controller
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
        $deploy = DB::table('deploy')->get();
        $id = session('alluser')->home_id;
        $cllect = DB::table('cllect')
                        ->join('commodity','cllect.sid','=','commodity.sid')
                        ->where('uid',$id)
                        ->get();
        // dd($cllect);
        return view('Home.cllect',['friend'=>$friend,'deploy'=>$deploy,'cllect'=>$cllect]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // dd(11);

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
        
        dd($111);
        $row = DB::table('cllect')->insertGetId($cc);
       
        if($row>0){
           echo 1;
        }
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
        $row = DB::table('cllect')->where('id',$id)->delete();
        if($row>0){
            return redirect('home/cllect')->with('msg','删除成功');
        }
    }
}
