<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class WeihuController extends Controller
{
    //
    public function index()
    {
    	$ob = DB::table('friend')->get();
    	$deploy = DB::table('deploy')->get();
    	return view('Home.weihu',['ob' => $ob,'deploy' => $deploy]);
    }
}
