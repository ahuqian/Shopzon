<?php

namespace App\Http\Controllers\Carousel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB; 

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // var_dump(111);
        //保存搜索条件
        $where = '';
        //实例化操作表
        $ob = DB::table('carousel');
        //判断是否有搜索条件
        if($request->has('imgname')){
            //获取搜索的条件
            $imgname = $request->input('imgname');
            //添加到将要携带的分页中的数组中
            $where['imgname'] = $imgname;
            //给查询添加where条件
            $ob->where('imgname','like',"%{$imgname}%");
        }
        //执行分页查询
        $list = $ob->paginate(3);
        // dd($list);
        return view('Admin.Carousel.index',['list' => $list,'where' => $where]);
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
        return view('Admin.Carousel.add');
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
        if($request->hasFile('imgname')){
            // 判断上传的文件是否有效
            if($request->file('imgname')->isValid()){
                // 获取上传的文件对象
                $data = $request->file('imgname');
                // dd($data);
                // 获取上传的文件的后缀
                $ext = $data->getClientOriginalExtension();
                // 拼装出你需要使用的文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                // 移动临时文件，生成新文件到指定目录下
                $data->move('./admin/upload/carousel',$picname);
            }
        }
        $data = $request->except('_token');
        $data['imgname'] = $picname;
        $id = DB::table('carousel')->insertGetId($data);
        if($id > 0 ){
            return redirect('admin/carousel')->with('msg','添加成功');
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
        $row = DB::table('carousel')->where('id',$id)->delete();
        if($row > 0){
            return redirect('admin/carousel')->with('msg','删除成功');
        }else{
            return redirect('admin/carousel')->with('msg','删除失败');
        }
    }
}
