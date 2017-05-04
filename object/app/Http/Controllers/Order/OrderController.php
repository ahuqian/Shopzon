<?php

namespace App\Http\Controllers\Order;

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
    public function index(Request $request)
    {
        //
        // dd($request);
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('order')
            ->join('user','order.uid','=','user.id');
        //判断是否有搜索条件
        if($request->has('ordername')){
            //获取搜索的条件
            $name = $request->input('ordername');
            // dd($name);
            //讲条件添加到where条件中
            $where['ordername'] = $name;
            // dd($where);
            //给查询添加where条件
            $ob->where('ordername','like',"%{$name}%");
            // dd($ob);
        }   
        // dd($ob);
        //执行分页查询
        $list = $ob->paginate(2);
        return view('Admin.Order.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $list = date('Y-m-d H:i:s',time());
        return view('Admin.order.add',['time' => $list]);
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
        // var_dump(111);
        // dd($request);
        $messages = [
            'ordername.required' => '订单号不能有特殊字符',
        ];
        $this->validate($request, [
            'ordername' => 'required',
        ],$messages);
        $data = $request->except('_token');
        $data['ordertime'] = date('Y-m-d H:i:s',time());
        $id = DB::table('order')->insertGetId($data);
        if($id>0){
            return redirect('admin/order')->with('msg','添加成功');
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
        $row = DB::table('order')->where('oid',$id)->delete();
        if($row > 0){
            return redirect('admin/order')->with('msg','删除成功');
        }else{
            return redirect('admin/order')->with('msg','删除失败');
        }
    }
}
