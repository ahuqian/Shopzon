<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class PaymentController extends Controller
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
        return view('Home.payment',['friend'=>$friend,'deploy'=>$deploy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        // $orderlist = DB::table('oederlist')->where('')
        $id = session('alluser')->home_id;
        DB::table('cart')->where('uid',$id)->delete();
        return view('Home.win',['friend'=>$friend,'deploy'=>$deploy]);
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
        // dd(11);
        // dd($request);
        // dd($data['city2']);
        $data = $request->except('_token');
        $aa[] = $data['city1'];
        foreach($aa as $c){
            $row = DB::table('district')->whereIn('id',$c)->select('name')->get();

        }
        $b = '';
        foreach($row as $r){
            $b .= $r->name;
        }
        // dd($b);
        $b .= $data['city2'];
        // dd($b);
        $data = $request->except('city1','_token','city2');
        $data['site'] = $b;
        $id = session('alluser')->home_id;
        // $data = $request->except('city2');
        // dd($data);
        $list = DB::table('orderlist')->where('uid',$id)->update($data);
        if($list){
            return redirect('/home/payment')->with('msg','请扫码支付');
        }else{
            return redirect('/home/order')->with('error','失败，返回订单');
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
