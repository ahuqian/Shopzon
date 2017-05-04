<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">

        <title>Super Admin Responsive Template</title>
            
        <!-- CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/form.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/generics.css" rel="stylesheet"> 
    </head>
    <body id="skin-blur-violate">
        <section id="login">
            <header>
                <h1>SHOP后台管理</h1>
            </header>
        
            <div class="clearfix"></div>
            
            <!-- Login -->
            <form class="box tile animated active" id="box-login" action='/admin/dologin' method='post'>
                {{ csrf_field() }}
                @if(session('msg'))
                    <h2 class="m-t-0 m-b-15">{{ session('msg') }}</h2>
                @else
                    <h2 class="m-t-0 m-b-15">登录</h2>
                @endif
                
                <input type="text" class="login-control m-b-10" placeholder="请输入用户名..." name='name'>
                <input type="password" class="login-control" placeholder="请输入密码..." name='password'>
                
                <div class='row'>
                    <div class='col-xs-4'>
                        <input type='text' class='login-control m-b-10' name='mycode' placeholder='请输入验证码..' style='margin-top:10px;'>
                    </div>
                    <div class='col-xs-4'>
                        <img src="{{ url('/Admin/captch/'.time()) }}" onclick="this.src='{{ url('/Admin/captch') }}/'+Math.random()" style='margin-top:10px;'/>
                    </div>
                </div>

                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        记住我
                    </label>
                </div>
                <button class="btn btn-sm m-r-5">登录</button>
            </form>
            
            
        </section>                      
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- All JS functions -->
        <script src="js/functions.js"></script>
    </body>
</html>
