@extends('Home.base.parent')
@section('content')
<!-- MOBILE-MENU-AREA START --> 
<div class="mobile-menu-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="mobile-area">
					<div class="mobile-menu">
						<nav id="mobile-nav">
							<ul>
								<li><a href="index.html">Home </a>
									<ul>
										<li><a href="index.html">Home Two</a></li>
										<li><a href="index-3.html">Home Three</a></li>
										<li><a href="index-4.html">Home Four</a></li>
									</ul>
								</li>
								<li><a href="about.html"> About Us </a></li>
								<li><a href="shop.html">SHOP</a>
									<ul>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-grid.html"> Shop Grid</a></li>
										<li><a href="shop-list.html"> Shop List</a></li>
										<li><a href="single-product.html">Single Product</a></li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="blog-details.html">Blog Details</a></li>
								<li><a href="#">PAGES</a>
									<ul>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="account.html">Account</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
										<li><a href="blog-details.html">Blog</a></li>
										<li><a href="login.html">Login</a></li>
									</ul>
								</li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="404.html">404 Error</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>

<!-- MOBILE-MENU-AREA END  -->
<!-- Banner Area Start -->
<div class="banner-area pb-90 pt-160 bg-2">
	<div class="container">
		<div class="row">
			<div class="banner-content text-center text-white">
				<h1>注册</h1>
				<ul>
					<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
					<li>注册</li>
				</ul>	
			</div>
		</div>
	</div>
</div>
<!-- Banner Area End -->
</header>
<!-- Header Area End -->
<!-- Page Content Wraper Area Start -->
<section class="page-content-wrapper login-area ptb-100">
    @if(session('msg'))
    <script type="text/javascript">
      alert("{{ session('msg') }}");
    </script>
    @endif
<div class="container">
	<div class="row">
	   <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
			<div class="account-info">
				<center>
					<form action="/home/zhuce" method='post'>
						<div class="form-fields" style='background-color:#E9EBEE;'>
							{{ csrf_field() }}
							<h2>注册</h2>
							<p>
								<label style='float:left;'>
									用户名
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="text" placeholder='用户名要输入5-10位数哦~~' name='home_name' id="username">
							</p>
							<p>
								<label style='float:left;'>
									密码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="password"  placeholder='密码不能少于6位数哦~~' name='home_pass' id="password">
							</p>
							<p>
								<label style='float:left;'>
									确认密码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="password"  placeholder='请输入8-12位字符...' name='respassword' id="qrpassword">
							</p>
							<p>
								<label style='float:left;'>
									联系方式
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="text"  placeholder='请输入手机号码...' name='home_tel'>
							</p>
							<p>
								<label style='float:left;'>
									邮箱
									<span style="color:red;font-size:15px;">*</span>
								</label>
								<input type="text"  placeholder='请输入邮箱...' name='home_email'>
							</p>
							<p>
								<label style='float:left;'>
									验证码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
							</p><br>
					    	<p style='float:left;'>
				            	<input type='text' name='checkcode' placeholder='请输入验证码..' style='width:300px;height:45px;' >
				                <img src="{{ url('/Admin/captch/'.time()) }}" style='margin-left:10px;' onclick="this.src='{{ url('/Admin/captch') }}/'+Math.random()"  id='a'/><a href="javascript:dd()">&nbsp;&nbsp;看不清楚，换一张</a>
				            </p> 	
						</div>
						<script type="text/javascript">
                         function dd(){
                              document.getElementById('a').src='{{ url('/home/captch') }}/'+Math.random();
                           }
            </script>
						<div class="form-action" style='background-color:#E9EBEE;'>			
							<input value="注册" type="submit" style='margin-right:270px;width:200px;' id='send'>
						</div>								
					</form>
				</center>
			</div>
		</div>
	</div>
</div>‘

<script type="text/javascript">
    //<![CDATA[
    $(function(){
    //文本框失去焦点后
      $('form :input').blur(function(){
       var $parent = $(this).parent();
       $parent.find(".formtips").remove();
       //验证用户名
       if( $(this).is('#username') ){
          if( this.value=="" || this.value.length < 5 || this.value.length > 10){
              var errorMsg = '请您输入5-10位的用户名.';
                        $parent.append('<span style="background-color:pink;" class="formtips onError">'+errorMsg+'</span>');
          }else{
              var okMsg = '输入正确.';
              $parent.append('<span style="background-color:#1CF54B"; class="formtips onSuccess">'+okMsg+'</span>');
          }
       }

       //验证密码
       if( $(this).is('#password') ){
        if( this.value=="" || this.value.length < 6 ){
                      var errorMsg = '请您输入正确的密码.';
            $parent.append('<span style="background-color:pink;" class="formtips onError">'+errorMsg+'</span>');
        }else{
                      var okMsg = '输入正确.';
            $parent.append('<span style="background-color:#1CF54B"; class="formtips onSuccess">'+okMsg+'</span>');
        }
       }
       //验证确认密码和密码是否相等
       var mima=document.getElementById('password');
       if( $(this).is('#qrpassword') ){
        if( this.value!=mima.value ){
                      var errorMsg = '您输入的两次密码不一样';
            $parent.append('<span style="background-color:pink;" class="formtips onError">'+errorMsg+'</span>');
        }else{
                      var okMsg = '输入正确.';
            $parent.append('<span style="background-color:#1CF54B"; class="formtips onSuccess">'+okMsg+'</span>');
        }
       }
       //验证码
        if( $(this).is('#checkcode') ){
        if(this.value.length < 1 ){
                      var errorMsg = '请您输入正确验证码.';
            $parent.append('<span class="formtips onError">'+errorMsg+'</span>');
        }
       }

    }).keyup(function(){
       $(this).triggerHandler("blur");
    }).focus(function(){
         $(this).triggerHandler("blur");
    });//end blur

    
    //提交，最终验证。
     $('#send').click(function(){
        $("form :input.txt").trigger('blur');
        var numError = $('form .onError').length;
        if(numError){
          return false;
        } 
        
     });
})
//]]>
</script>
</section>

<!-- Page Content Wraper Area End -->
@endsection