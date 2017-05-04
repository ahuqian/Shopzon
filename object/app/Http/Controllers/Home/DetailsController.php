<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class DetailsController extends Controller
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
        //查询购物车
        $cart = DB::table('cart')->where('uid',$id)->get();
        // dd($cart);
        foreach($cart as $c){
            $a[] = $c;
        }
        return view('Home.details',['friend'=>$friend,'cart'=>$a]);
    }

    public function details($id)
    {
        // dd($id);
        $friend = DB::table('friend')->get();
        $list = DB::table('commodity')->where('sid',$id)->first();
        // dd($list);
        $store = DB::table('store')->where('sid',$id)->get();
        // $store['stime'] = date('Y-m-d H:i:s',$store['stime']);
        // dd($store);
        $data = DB::table('commodity')->get();
        // dd($data);
        $hot = DB::table('commodity')->where('hot',0)->get();
        // dd($hot);
        $newinsert = DB::table('commodity')->where('newinsert',0)->get();
        $discount = DB::table('commodity')->where('discount',0)->get();
        // dd($discount);
        $deploy = DB::table('deploy')->get();
        if(!empty(session('alluser'))){
            $uid = session('alluser')->home_id;
            // dd($uid);
            //查询购物车
            $cart = DB::table('cart')->where('uid',$uid)->get();
            // dd($cart);
            foreach($cart as $c){
                $a[] = $c;
            }
            // dd($a);
        }
        if(!empty($a)){
            return view('Home.details',['list' => $list,'friend' => $friend,'store'=>$store,'data'=>$data,'hot'=>$hot,'newinsert'=>$newinsert,'discount'=>$discount,'deploy'=>$deploy,'cart'=>$a]);
        }else{
            return view('Home.details',['list' => $list,'friend' => $friend,'store'=>$store,'data'=>$data,'hot'=>$hot,'newinsert'=>$newinsert,'discount'=>$discount,'deploy'=>$deploy]);
        }
        
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
        // dd($id);
        $id = session('alluser')->home_id;
        $data = $request->except('_token','home_id','home_name');
        $data['stime'] = date('Y-m-d H:i:s',time());
        $data['home_name'] = session('alluser')->home_name;
        $data['home_id'] = session('alluser')->home_id;
        $list = DB::table('home_user')->where('home_id',$id)->select('home_pic')->first();
        // dd($list);
        $data['home_pic'] = $list->home_pic;
        // dd($data);
        $row = DB::table('store')->insertGetId($data);
        // dd($row);
        if($row > 0 ){
            return redirect('home/details'.'/'.$data['sid'])->with('msg','发表成功');
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
