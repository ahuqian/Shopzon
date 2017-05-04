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
			<!-- Banner Area Start -->
			<div class="banner-area pb-90 pt-160 bg-2">
				<div class="container">
					<div class="row">
						<div class="banner-content text-center text-white">
							<h1>订单</h1>
							<ul>
								<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
								<li>支付订单</li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Area End -->
		</header>
		<center>
			<div>
				<a href="/home/payment/create"><img src="{{ asset('Admin/upload/zhifu/01.jpg') }}" style='width:700px;height:600px;' ></a>
			</div>
		</center>
@endsection