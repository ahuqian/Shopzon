<?php

namespace App\Http\Controllers\Orderlist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class OrderlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('orderlist');
        //判断是否有搜索条件
        if($request->has('orderlist')){
            //获取搜索的条件
            $name = $request->input('orderlist');
            //添加到将要携带到分页中的数组中
            $where['orderlist'] = $name;
            //给查询添加where条件
            $ob->where('orderlist','like',"%{$name}%");
        }
        //执行分页查询
        $list = $ob->paginate(8);
        // dd($list);
        return view('Admin.Orderlist.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Orderlist.add');
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
        $this->validate($request, [
            'order' => 'required',
            '' => 'required|min:6',
        ],$this->messages());
        $data = $request->except('_token');
        dd($data);
        //查询数据库信息 返回影响行数
        $id = DB::table('orderlist')->insertGetId($data);
        if($id>0){
            return redirect('admin/orderlist')->with('msg','添加成功');
        } 
    }

    public function messages()
    {
        return [
            'order.required' => '订单号不能包含特殊字符', 
        ];
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
        // var_dump(111);
        $list = DB::table('orderlist')->where('did',$id)->first();
        // dd($list);
        return view('Admin.Orderlist.edit',['list' => $list]);
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
        $list = $request->except('_token','_method');
        // dd($list);
        $row = DB::table('orderlist')->where('did',$id)->update($list);
        if($row>0){
            return redirect('admin/orderlist')->with('msg','修改成功');
        }else{
            return redirect('admin/orderlist')->with('error','修改失败');
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
        // var_dump(111);
        $row = DB::table('orderlist')->where('did',$id)->delete();
        if($row>0){
            return redirect('admin/orderlist')->with('msg','删除成功');
        }else{
            return redirect('admin/orderlist')->with('msg','删除失败');
        }
    }
}
