<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
class AdminController extends Controller
{
    //返回入口主文件
    public function index()
    {
    	return view('Admin.index');
    }
}
