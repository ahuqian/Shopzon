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
				<h1>修改密码</h1>
				<ul>
					<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
					<li>修改密码</li>
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
					<form action="/home/update" method='post'>
						<div class="form-fields" style='background-color:#E9EBEE;'>
							{{ csrf_field() }}
							<h2>修改密码</h2>
							<p>
								<label style='float:left;'>
									原密码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="password" placeholder='请输入密码哦~~' name='yuanpass' id="username">
							</p>
							<p>
								<label style='float:left;'>
									新密码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="password"  placeholder='请输入新密码哦~~' name='newpass' id="password">
							</p>
							<p>
								<label style='float:left;'>
									确认新密码
									<span class="required" style="color:red;font-size:15px;">*</span>
								</label>
								<input type="password"  placeholder='请确认新密码哦~~' name='qrnewpass' id="qrpassword">
							</p><br>

						<div class="form-action" style='background-color:#E9EBEE;'>			
							<input value="确认" type="submit" style='margin-right:270px;width:200px;' id='send'>
						</div>								
					</form>
				</center>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Page Content Wraper Area End -->
@endsection