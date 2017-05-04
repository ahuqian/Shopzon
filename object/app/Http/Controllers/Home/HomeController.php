<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // var_dump(111);
        $id = DB::table('deploy')->get();
        $row = $id[0];
        $o = $row->kg;
        // dd($o);
        if($o == 1){
            return redirect('/home/wh');
        }
        //查询轮播表
        $list = DB::table('carousel')->get();
        // dd($list);
        //查询商品表热卖产品
        $ob = DB::table('commodity')->where('hot',0)->get();
        // dd($ob);
        //查询商品表打折商品
        $discount = DB::table('commodity')->where('discount',0)->get();
        //查询商品表新增商品
        $newinsert = DB::table('commodity')->where('newinsert',0)->get();
        //查询店长推荐商品
        $redhot = DB::table('commodity')->where('redhot',1)->get();
        // dd($redhot);
        // 查询公告
        $notice = DB::table('notice')->get();
        // 查询友情链接管理
        $friend = DB::table('friend')->get();
        //查询网站配置
        $deploy = DB::table('deploy')->get();
        //
        // dd(session('alluser')->home_id);
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
            // dd($a);
            return view('Home.index',['list' => $list,'ob' => $ob,'notice' => $notice,'discount' => $discount,'friend' => $friend,'newinsert' => $newinsert,'redhot'=>$redhot,'deploy'=>$deploy,'cart'=>$a]);
        }else{
            return view('Home.index',['list' => $list,'ob' => $ob,'notice' => $notice,'discount' => $discount,'friend' => $friend,'newinsert' => $newinsert,'redhot'=>$redhot,'deploy'=>$deploy]);
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
