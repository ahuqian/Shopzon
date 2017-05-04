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
<!-- MOBILE-MENU-AREA END  -->
<!-- Banner Area Start -->
<div class="banner-area pb-90 pt-160 bg-2">
	<div class="container">
		<div class="row">
			<div class="banner-content text-center text-white">
				<h1>我的资料</h1>
				<ul>
					<li><a href="{{ url('/home/index') }}">首页</a> <span class="arrow_carrot-right "></span></li>
					<li>我的资料</li>
				</ul>	
			</div>
		</div>
	</div>
</div>
<!-- Banner Area End -->
</header>
<!-- Header Area End -->
@if(session('msg'))
	<script type="text/javascript">
		alert("{{ session('msg') }}");
	</script>	
@endif
@if(session('error'))
	<script type="text/javascript">
		alert("{{ session('error') }}");
	</script>
@endif
<!-- Page Content Wraper Area Start -->
<section class="page-content-wrapper login-area pt-90 pb-80">
<div class="container">
	<div class="row">
		<form action="/home/personage/{{ session('alluser')->home_id }}" method='post' enctype='multipart/form-data'>
			{{ csrf_field() }}
    		{{ method_field('PUT') }}
	   <div class="centered-title text-center mb-40">
		  <h2>资料<span class="light-font"></span></h2>
		  <div class="clear"></div>
	   </div>
	   <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
		  <div class="billing-fields row">
		  	<input type='hidden' name='oldpic' value='{{ $personage->home_pic }}'>
			 <p class="form-row col-sm-12">
				<label for="billing_company">用户名：</label>
				<input type="text" name="home_name" id="billing_company" class="form-controller" value='{{ $personage->home_name }}' disabled='none'>
			 </p>
			 <p class="form-row col-sm-12">
				<label for="billing_company">头像：</label>
				<img src='/admin/upload/home_userimg/{{ $personage->home_pic }}' width='50' height='50'>
				<input type="file" name="home_pic" class="form-controller" value='{{ $personage->home_pic }}'> 
			 </p>
			 <p class="form-row col-sm-12">
				<label for="billing_email">邮箱：<abbr title="required" class="required">*</abbr></label>
				<input type="text" name="home_email" id="billing_email" class="form-controller" value='{{ $personage->home_email }}'>
			 </p>
			 <p class="form-row col-sm-12">
				<label for="billing_email">电话：<abbr title="required" class="required">*</abbr></label>
				<input type="text" name="home_tel" id="billing_phone" class="form-controller" value='{{ $personage->home_tel }}'>
			 </p>
			 <p class="form-row col-sm-12">
				<label for="billing_address_1">地址：<abbr title="required" class="required">*</abbr></label>
				<input type="text" name="home_address" id="billing_address_1" placeholder="" class="form-controller" value='{{ $personage->home_address }}'>
			 </p>
			 <p class="col-sm-12">
				<input type="submit" value="修改" class="theme-button marL0">
			 </p>
		  </div>
	   </div>
	</div>
</div>
</section>
<!-- Page Content Wraper Area End -->
@endsection
