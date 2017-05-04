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
    	$friend = DB::table('friend')->get();
    	$deploy = DB::table('deploy')->get();
    	return view('Home.weihu',['friend' => $friend,'deploy' => $deploy]);
    }
}
