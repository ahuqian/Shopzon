<?php

namespace App\Http\Controllers\Commodity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CommodityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        //保存搜索条件
        $where = '';

        //实例化操作表
        $ob = DB::table('commodity')
                ->join('type', 'commodity.tid', '=', 'type.id');
        //判断是否有搜索条件
        if($request->has('sname')){
            //获取搜索的条件
            $sname = $request->input('sname');
            //添加到将要携带到分页中的数组中
            $where['sname'] = $sname;
            //给查询添加where条件
            $ob->where('sname','like',"%{$sname}%");
            // dd($name);
        }
        // dd($where);
        //执行分页查询
        $list = $ob->paginate(8);
        // dd($list);
        return view('Admin.Commodity.index',['list'=>$list,'where'=>$where]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ob = DB::table('type')->get();
        // dd($ob); 
        return view('Admin.Commodity.add',['ob'=>$ob]);
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
        $messages = [
            'snum.required' => '商品数量不能小于8',
        ];
        $this->validate($request, [
            'snum' => 'required',
        ],$messages);
        $data = $request->except('_token');
        // dd($data);
        $id = DB::table('commodity')->insertGetId($data);
        if($id>0){
            return redirect('admin/demo5')->with('msg','添加成功');
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
        $ob = DB::table('commodity')->where('sid',$id)->first();
        // dd($ob);
        return view('Admin.Commodity.edit',['ob'=>$ob]);
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
        // dd($request);
        $list = $request->except('_token','_method','oldpic');
        // dd($data);
          if($request->hasFile('spic')){
            // 判断上传的文件是否有效
            if($request->file('spic')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('spic');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/commodityimg/',$picname);
                // dd($picname); 
            }
            $list['spic'] = $picname;
        }else{
            // dd(222);
            $list['spic'] = $request->input('oldpic');
        }
        // dd($list);
        $row = DB::table('commodity')
                   ->where('sid',$id)->update($list);
        if($row>0){
            return redirect('admin/demo5')->with('msg','修改成功');
        }else{
            return redirect('admin/demo5')->with('error','修改失败');
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
        $row = DB::table('commodity')->where('sid',$id)->delete();
        if($row > 0){
            return redirect('admin/demo5')->with('msg','删除成功');
        }else{
            return redirect('admin/demo5')->with('msg','删除失败');
        }
    }
}
