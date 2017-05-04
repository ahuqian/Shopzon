<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use Gregwar\Captcha\CaptchaBuilder;

class LoginController extends Controller
{
    //
    public function index()
    {
        $ob = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        return view('Home.login',['ob' => $ob,'deploy' => $deploy]);
    }

    public function doindex()
    {
        $ob = DB::table('friend')->get();
        $deploy = DB::table('deploy')->get();
        return view('Home.register',['ob' => $ob,'deploy' => $deploy]);
    }
    //验证码
     public function captch($tmp)
    {
        // dd(1111);
        //生成验证码图片的builder对象，
        $builder = new CaptchaBuilder;
        // 设置验证码的宽高字体
        $builder->build(200,44,null);
        //获取验证码中的内容
        $data = $builder->getPhrase();
        // dd($data);
        //把验证码的内容闪存到session里面
        session()->flash('mycode',$data);

        //告诉浏览器，这是一张图片
        // header('content-type:image/jpeg');
        //生成图片
        // $builder->output();die;

        return response($builder->output())->header('Content-type','image/jpeg');
    }
    //用户注册添加
    public function zhuce(Request $request)
    {
        
        // dd($request);
         // 获取session中的验证码内容
        $mycode = session('mycode');
        // 判断用户输入的验证码和session中的内容是否一致
        if($mycode != $request->input('checkcode')){
            return back()->with('msg','注册失败：验证码不正确');
        }
        // $dianji=$request->input('dianji');
        // // dd($dianji);
        //    if($dianji!='on'){
        //        return back()->with('msg','注册失败：请选择我已阅读并同意');
        //        exit;
        //    }
        if($request->home_pass != $request->respassword){
            return back()->with('msg','注册失败：两次密码输入不一致');
        }
        // $ob['logo'] = $picname;
        $data=$request->except('_token','checkcode','respassword','home_pass');
        // dd($data);
        $data['home_pass']=md5($request->input('home_pass'));
        // dd($data);
        // exit;
        //把验证码的内容闪存到session里面
        session()->flash('mycode',$data);
        $row=DB::table('home_user')->insertGetId($data);
        if($row>0)
        {
            return redirect('/home/login')->with('msg','恭喜您注册成功！');
        }else{
            return redirect('/home/dologin');
        }

    }
    //这里是用户登录
    public function denglv(Request $request)
    {


        //获取session中的验证码内容
       // $mycode = session('mycode');
         // var_dump(111);
        // 判断用户输入的验证码和session中的内容是否一致
        // if($mycode != $request->input('checkcode')){
        //     return back()->with('msg','登录失败：验证码不正确');
        // }
        $username=$request->input('home_name');
        // dd($username);
        $password = md5($request->input('home_pass'));

        // dd($username);
        $ob = DB::table('home_user')->where('home_name',$username)->first();
        // var_dump($ob);
        // exit;
        if($ob){
            // var_dump($ob->password);
            // dd($password);
            // exit;
            if($ob->home_pass == $password){
                session(['alluser'=>$ob]);
                // dd($ob);
                //这里是登录首页的地方
                // dd(111);
                // exit;
                return redirect("/home/index");
            }else{   
                return back()->with('msg','登录失败：用户名不正确或密码不正确');
            }
        }
    }

    public function over()
    {
        session()->forget('alluser');
        return redirect('/home/index');
    }
}