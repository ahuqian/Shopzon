<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// //请求
// Route::get('/demo1','DemoController@request');
// //响应
// Route::get('/demo2','DemoController@response');




//文件上传
Route::get('/upload','upload\UploadController@index');
Route::post('/doupload','upload\UploadController@doupload');

// 后台路由群组
Route::group(['prefix' => 'admin','middleware' => 'login'],function(){
	//后台首页
	Route::resource('/demo3','Admin\AdminController');
	// 用户管理
	Route::resource('/demo4','User\UserController');
	// 用户退出
	Route::get('/over','Admin\LoginController@over');
	//友情链接管理
	Route::resource('/friend','Friend\FriendController');
	//收藏管理
	Route::resource('/cllect','Cllect\CllectController');
	//评论管理
	Route::resource('/store','Store\StoreController');
	//地址管理
	Route::resource('/sitelist','Sitelist\SitelistController');
	//购物车管理
	Route::resource('/cart','Cart\CartController');
	//配送方式管理
	Route::resource('/delivery','Delivery\DeliveryController');
	//网站配置
	Route::resource('/deploy','Deploy\DeployController');
	//前台用户表
	Route::resource('/home_user','Home_user\Home_userController');
});
// 登录
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/dologin','Admin\LoginController@dologin');
// 验证码
Route::get('Admin/captch/{tmp}','Admin\LoginController@captch');

//前台路由
//前台登录
Route::get('home/login','Home\LoginController@index');
//前台注册
Route::get('home/dologin','Home\LoginController@doindex');
//前台注销
Route::get('home/over','Home\LoginController@over');
//前台注册为了测试的时候用
Route::post('home/dologin','Home\LoginController@doindex');
//验证码
Route::get('home/captch/{tmp}','Home\LoginController@captch');
//执行添加注册
Route::post('home/zhuce','Home\LoginController@zhuce');
//验证是否登录
Route::post('home/denglv','Home\LoginController@denglv');
//前台路由群组
Route::group(['prefix' => 'home'],function(){
	//前台首页
	Route::resource('/index','Home\HomeController');
	//维护页面
	Route::get('/wh','Home\WeihuController@index');
	//个人中心
	Route::resource('/personage','Home\PersonageController');
	//我的订单
	Route::resource('/myorder','Home\MyorderController');
});
