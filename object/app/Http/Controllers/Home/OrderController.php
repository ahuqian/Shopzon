<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd($request);
        // dd(session('list'));
        $id[] = session('list');
        // dd($id);
        foreach($id as $i){
            $orderlist = DB::table('orderlist')->whereIn('did',$i)->get();
        }
        // dd($orderlist);
        $friend = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        $uid = session('alluser')->home_id;
        //查询购物车
        $cart = DB::table('cart')->where('uid',$uid)->get();
        // dd($cart);
        foreach($cart as $c){
            $a[] = $c;
        }
        return view('home.order',['friend'=>$friend,'orderlist'=>$orderlist,'deploy'=>$deploy,'cart'=>$a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $data1[] = $request->input('cid');
        $data = $request->except('_token');  
        // var_dump($data1); 
        // dd($data);
        foreach($data1 as $d){
            $row = DB::table('cart')->whereIn('id',$d)->select('sid','uid','snum','spic','sprice','sname','xj')->get();
        }
        // dd($row);
        $aa = array();
        $bb = array();
        $aa[] = 'ordername';
        $aa[] = 'ordertel';
        $aa[] = 'xdtime';
        $aa[] = 'sitename';

        $bb[] = rand(100000000,999999999);
        $bb[] = session('alluser')->home_tel;
        $bb[] = date('Y-m-d H:i:d',time());
        $bb[] = session('alluser')->home_name;
        foreach($row as $r){
            foreach($r as $v => $q){
                // $aa[] = 'ordername';
                $aa[] = $v;
                $bb[] = $q;
            }
            $arr[] = array_combine($aa,$bb);
        }
        // dd($arr);
        foreach ($arr as $value) {  
            $list[] = DB::table('orderlist')->insertGetId($value);
        }
        session(['list'=>$list]);
        if($list>0){
            return redirect('/home/order'); 
        }/*else{
            return redirect('/home/cart')->with('error','订单失败');
        }*/
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

    public function doget(Request $request)
    {
        $list = DB::table('district')->where('upid',$request->input('upid'))->get();
        echo json_encode($list);
    }
    public function dopost(Request $request)
    {
        $list = DB::table('district')->where('upid',$request->input('upid'))->get();
        echo json_encode($list);
    }
}
