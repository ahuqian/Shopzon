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

// Route::get('/', function () {
//     return view('Home.index');
// });
Route::get('/','Home\HomeController@index');
// //请求
// Route::get('/','DemoController@request');
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
	//类别管理
	Route::resource('/type','Admin\TypeController');
	// 用户退出
	Route::get('/over','Admin\LoginController@over');
	//商品管理
	Route::resource('/demo5','Commodity\CommodityController');
	//订单号管理
	Route::resource('/order','Order\OrderController');
	//订单管理
	Route::resource('/orderlist','Orderlist\OrderlistController');
	//轮播管理
	Route::resource('/carousel','Carousel\CarouselController');
	//公告管理
	Route::resource('/notice','Notice\NoticeController');
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
// 后台登录
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/dologin','Admin\LoginController@dologin');
// 后台验证码
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
	Route::resource('/demo','Home\HomeController');
	//前台商品列表页
	Route::resource('/protfolio','Home\ProtfolioController');
	//前台搜索商品
	Route::post('/souprotfolio','Home\ProtfolioController@sou');
	//前台列表页化妆品类
	Route::get('/protfoliohzp','Home\ProtfolioController@hzp');
	//前台列表页化妆工具类
	Route::get('/protfoliohzgj','Home\ProtfolioController@hzgj');
	//前台商品详情页
	Route::get('/details/{id}','Home\DetailsController@details');
	Route::post('/store','Home\DetailsController@store');
	//删除购物车
	Route::post('/cart/destroy','Home\CartController@destroy');
	//前台购物车
	Route::resource('/cart','Home\CartController');
	//添加购物车
	Route::post('/cart/{id}','Home\CartController@create');
	//显示购物车
	Route::post('/cart/addNum','Home\CartController@addNum');
	//修改购物车中商品的数量
	Route::get('/gnum/{id?}','Home\CartController@gnum');
	//网站维护
	Route::get('/wh','Home\WeihuController@index');
	//订单页面
	Route::resource('/order','Home\OrderController');
	//收货地址
	Route::get('/ajaxdemo/get','Home\OrderController@doget');
	Route::get('/ajaxdemo/post','Home\OrderController@dopost');
	//个人中心
	Route::resource('/personage','Home\PersonageController');
	//支付订单
	Route::resource('/payment','Home\PaymentController');
	//前台修改密码
	Route::resource('/update','Home\UpdateController');
	//我的收藏
	Route::resource('/cllect','Home\CllectController');
	//我的订单
	Route::resource('/myorder','Home\MyorderController');
});
