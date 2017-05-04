<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(empty(session('alluser')->home_name)){
             return redirect('/home/login')->with('msg','请您先登录！');
        }
        
        $id = session('alluser')->home_id;
        // dd($id);
        // dd(session('alluser'));
        $friend = DB::table('friend')->get();
        $cart = DB::table('cart')->where('uid',$id)->get();
        // dd($cart);
        $deploy = DB::table('deploy')->get();
        return view('Home.cart',['friend'=>$friend,'cart'=>$cart,'deploy'=>$deploy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // dd(111);
        // dd($request);
        if(empty(session('alluser'))){
            return redirect('/home/login');
        }
        
        $data = $request->except('_token');
        $data['uid'] = session('alluser')->home_id;
        $data['xj'] = $data['sprice']*$data['snum'];
        // dd($data);
        $id = DB::table('cart')->insertGetId($data);
        if($id>0){
            return redirect('/home/cart')->with('msg','添加成功');
        }else{
            return redirect('/home/details')->with('error','添加失败');
        }

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
    public function destroy(Request $request)
    {
        //
        // // dd($request->all());
        if(DB::table('cart')->where('id',$request->input('id'))->delete()){
            return '成功';
        }else{
            return '失败';
        }
    }

    public function addNum() {
        $num = $_POST['num'];
        $id = $_POST['id'];
        // alert($num);
        $product = DB::table('cart')->where('id',$id)->first();
        $product->snum +=$num;
        $product->save();
        // alert($product->snum);
        return json_encode(['status' => 1, 'num' => $product->snum]);
    }

    public function gnum(Request $request,$id)
    {
        $data = $request->only('snum','xj');
        DB::table('cart')->where('sid',$id)->update($data);
        
    }
}
