@extends('Home.base.parent')
@section('content')
			<!-- Header Slider Area -->
			<div class="slider-area">
				<div class="bend niceties preview">
					<div id="ensign-nivoslider" class="slides">	
						<img src="{{ asset('/home/img/slider/1.jpg') }}" alt="" title="#slider-direction-1"  />
						<img src="{{ asset('/home/img/slider/2.jpg') }}" alt="" title="#slider-direction-1"  />
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-1" class="slider-direction">
						<div class="slider-content text-center s-tb slider-1">
							<div class="title-container s-tb-c title-compress">
								<h2 class="title2">
									<span class="icon-left" data-icon="&#x7b;"></span>
										独家： 魅力 化妆品
									<span class="icon-right" data-icon="&#x7b;"></span>
								</h2>
								<h1 class="title1"> 2017 年集合</h1>

								<!-- Icon Left -->
								<div class="social-icon-left">
									<ul>
										<li><a href="#" class="social_facebook"></a></li>
										<li><a href="#" class="social_googleplus"></a></li>
										<li><a href="#" class="social_twitter"></a></li>
									</ul>
								</div>
								<!-- Icon Left -->
								<!-- Icon Right -->
								<div class="social-icon-right">
									<ul>
										<li><a href="#" class="icon_refresh"></a></li>
										<li><a href="#" class="icon_heart_alt"></a></li>
										<li><a href="#" class=" icon_search"></a></li>
									</ul>
								</div>
								<!-- Icon Right -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Slider Area -->
			<!-- MOBILE-MENU-AREA START --> 
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="mobile-area">
								<div class="mobile-menu">
									<nav id="mobile-nav">
										<ul>
											<li><a href="index.html">首页</a>
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
		</header>
        <!-- Header Area End -->
        <!-- Page Content Wraper Area Start -->
		<div class="page-content-wrapper">
			<!-- Category Banner Area Start -->
			<section class="category-banner pb-65 pt-50">
				<div class="container">
					<div class="row">
						<!-- Category Banner Single -->
						<div class="col-md-4 col-sm-4 col-xs-12 res-mb-25">
							<div class="cate-bnr-sngle">
								<img src="{{ asset('home/img/category-banner/1.jpg') }}" alt="" />
								<div class="cate-content text-center">
									<h6>美膏霜</h6>
									<a href="single-product.html">立即购物</a>
								</div>
							</div>
						</div>
						<!-- Category Banner Single -->
						<!-- Category Banner Single -->
						<div class="col-md-4 col-sm-4 col-xs-12 res-mb-25">
							<div class="cate-bnr-sngle">
								<img src="{{ asset('home/img/category-banner/2.jpg') }}" alt="" />
								<div class="cate-content text-center">
									<h6>口红与眼部卸妆</h6>
									<a href="single-product.html">立即购物</a>
								</div>
							</div>
						</div>
						<!-- Category Banner Single -->
						<!-- Category Banner Single -->
						<div class="col-md-4 col-xs-12 col-sm-4">
							<div class="cate-bnr-sngle">
								<img src="{{ asset('home/img/category-banner/3.jpg') }}" alt="" />
								<div class="cate-content text-center">
									<h6>晚霜及香水</h6>
									<a href="single-product.html">立即购物</a>
								</div>
							</div>
						</div>
						<!-- Category Banner Single -->
					</div>
				</div>
			</section>
			<!-- Category Banner Area End -->
			<!-- Deal For Month Area Start -->
			<section class="deal-month-area ptb-100 dark-gray-bg">
				<!-- SECTION TITEL -->
				<div class="section-titel text-center mb-85 text-uppercase">
					<h3>Deal- 本月</h3>
				</div>
				<!-- SECTION TITEL -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 res-mb-25">
							<div class="deal-month-left">
								<img src="{{ asset('home/img/other/deal.png') }}" alt="" />
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="deal-month-right white-bg p-20">
								<span class="titel">新品上架</span>
								<div class="main-content">
									<h2><a href="#">不知名香水</a></h2>
									<h4>￥40.00</h4>
									<p>来自法国巴黎</p>
									<div class="count-down-area">
										<div class="timer default-bg">
											<div data-countdown="2018/01/01"></div>
										</div> 
									</div>
									<div class="deal-btn mt-40">
										<a href="#">加入购物车</a>
										<span class="titel f-right"><a href="single-product.html">查看详细信息</a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Deal For Month Area Start -->
			<!-- Month Top Sale Area Start -->
			<section class="top-sale-month-area ptb-100">
				<!-- SECTION TITEL -->
				<div class="section-titel style-two text-center mb-115 text-uppercase">
					<h3>本月热销产品</h3>
				</div>
				<!-- SECTION TITEL -->
				<div class="container">
					<div class="row">
						<div class="product-gallery owl-carousel owl-theme">
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/1.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">美容刷</a><span>Blashan Brush</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">￥20.00</span>
											<span class="new-price"> - ￥30.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/2.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">BB霜</a><span>Blashan Face</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">￥15.00</span>
											<span class="new-price"> - ￥70.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/3.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">眼影</a><span>eyeliner & kajol</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">￥20.00</span>
											<span class="new-price"> - ￥80.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/4.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">口红</a><span>kajol & eyeliner</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">￥40.00</span>
											<span class="new-price"> - ￥80.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/2.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">Roberto Cavalli</a><span>kajol & eyeliner</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">￥40.00</span>
											<span class="new-price"> - ￥80.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
							<!-- Single Product Start -->
							<div class="col-md-12 item">
								<div class="single-product">
									<div class="single-img">
										<a href="#"><img src="{{ asset('home/img/product/1.jpg') }}" alt="" /></a>
										<div class="hover-content text-center">
											<ul>
												<li><a href="#" class="icon_refresh"></a></li>
												<li><a href="#" class="icon_cart_alt "></a></li>
												<li><a href="#" class="icon_heart_alt"></a></li>
												<li>
													<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="product-details mt-20">
										<h4><a href="single-product.html">Roberto Cavalli</a><span>kajol & eyeliner</span></h4>
										<div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="price-box">
											<span class="old-price">$40.00</span>
											<span class="new-price"> - $80.00</span>
										</div>
									</div>
								</div>
							</div>
							<!-- Single Product End -->
						</div>
					</div>
				</div>
			</section>
			<!-- Month Top Sale Area End -->
			<!-- Middle Adds Area Start -->
			<section class="adds-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12 res-mb-25">
							<div class="adds-left">
								<div class="single-adds f-left">
									<img src="{{ asset('home/img/adds/1.jpg') }}" alt="" />
									<div class="adds-content text-uppercase">
										<h3><a href="single-product.html">不知道什么玩意</a></h3>
										<h2>￥50.50</h2>
										<a href="#">加入购物车 <span class="icon-left" data-icon="&#x24;"></span></a>
										<div class="text-center">
											<div class="offer-box">
												<h3>50%</h3>
												<span>折扣</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="adds-middle">
								<div class="middle-single lr-25 mb-30 fix">
									<img src="{{ asset('home/img/adds/2.jpg') }}" alt="" />
									<div class="middle-content">
										<h3><a href="single-product.html">刷子</a></h3>
										<h2>￥50.50</h2>
									</div>
								</div>
								<div class="middle-single">
									<img src="{{ asset('home/img/adds/3.jpg') }}" alt="" />
									<div class="middle-content">
										<h3><a href="single-product.html">镜子</a></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="adds-right">
								<div class="single-adds">
									<img src="{{ asset('home/img/adds/4.jpg') }}" alt="" />
									<div class="adds-content text-uppercase">
										<h3><a href="single-product.html">口红与睫毛膏</a></h3>
										<h2>￥50.50</h2>
										<a href="#">加入购物车 <span class="icon-left" data-icon="&#x24;"></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Middle Adds Area End -->
			<!-- Product Tab Area Start -->
			<section class="product-tab-area pt-90 pb-50">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="tab-menu section-titel style-two text-center text-uppercase">
								<ul>
									<li class="active"><a data-toggle="tab" href="#arrival">新品到货  </a></li>
									<li><a data-toggle="tab" href="#saler">最佳销量</a></li>
									<li><a data-toggle="tab" href="#tranding">tranding</a></li>
								</ul>
							</div>
						</div>
						<div class="tab-content">
							<div id="arrival" class="tab-pane fade in active">
								<!-- Single Product Start -->
								<div class="col-md-4 col-sm-6">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/1.jpg') }}" alt="" /></a>
											<span class="pro-level">拍卖</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">晒后肌肤</a><span>卡乔尔及眼线</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">￥40.00</span>
												<span class="new-price"> - ￥80.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4 col-sm-6">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/2.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">双站点镜像</a><span>Blashan刷</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">￥70.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4 col-sm-6">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/3.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">打孔夹</a><span>卡乔尔及眼线</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">￥15.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4 col-sm-6">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/4.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">调料</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">￥40.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4 hidden-sm">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/5.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">睫毛膏</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price"> ￥50.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4 hidden-sm">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/6.jpg') }}" alt="" /></a>
											<span class="pro-level">新品</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">口红</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">￥80.00</span>
												<span class="new-price"> - ￥90.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
							</div>
							<div id="saler" class="tab-pane fade">
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/5.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price"> $50.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/6.jpg') }}" alt="" /></a>
											<span class="pro-level">New</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">$90.00</span>
												<span class="new-price"> - $80.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/1.jpg') }}" alt="" /></a>
											<span class="pro-level">Sale</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Sun Skin</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">$40.00</span>
												<span class="new-price"> - $80.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/2.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Double site Mirror</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">$70.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/4.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">$40.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/1.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price"> $50.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
							</div>
							<div id="tranding" class="tab-pane fade">
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/2.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Double site Mirror</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">$70.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/4.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price">$40.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/1.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price"> $50.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/5.jpg') }}" alt="" /></a>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="new-price"> $50.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/6.jpg') }}" alt="" /></a>
											<span class="pro-level">New</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Beauty Brush</a><span>Blashan Brush</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">$90.00</span>
												<span class="new-price"> - $80.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
								<!-- Single Product Start -->
								<div class="col-md-4">
									<div class="single-product style-two mb-50">
										<div class="single-img">
											<a href="#"><img src="{{ asset('home/img/product-tab/1.jpg') }}" alt="" /></a>
											<span class="pro-level">Sale</span>
											<div class="hover-content text-center">
												<ul>
													<li><a href="#" class="icon_refresh"></a></li>
													<li><a href="#" class="icon_cart_alt "></a></li>
													<li><a href="#" class="icon_heart_alt"></a></li>
													<li>
														<a title="Quick View" href="#" data-toggle="modal" data-target="#productModal" class="icon_search"></a>
													</li>
												</ul>
											</div>
										</div>
										<div class="product-details mt-20">
											<h4><a href="single-product.html">Sun Skin</a><span>kajol & eyeliner</span></h4>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="price-box">
												<span class="old-price">$40.00</span>
												<span class="new-price"> - $80.00</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Product End -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Product Tab Area End -->
			<!-- Newsletter Area Start -->
			<section class="newsletter-area gray-bg pt-85 pb-100">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<div class="newsletter-content">
								<span class="icon_mail_alt "></span>
								<div class="text">
									<h3>通讯</h3>
									<p>成为第一个了解时尚，而且还可以获得独家优惠哦</p>
								</div>
							</div>
						</div>
						<div class="col-md-7">
							<div class="subcribe-newsletter">
								<form id="mc-form">
									<input autocomplete="off" placeholder="请填写邮箱..." type="text">
									<button type="submit">现在订阅</button>
									<!-- mailchimp-alerts Start -->
									<div class="mailchimp-alerts text-centre">
										<div class="mailchimp-submitting"></div>
										<div class="mailchimp-success"></div>
										<div class="mailchimp-error"></div>
									</div>
									<!-- mailchimp-alerts end -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Newsletter Area End -->
			<!-- Instragam Feed Start -->
			<section class="instragam-area ptb-100">
				<div class="container-fluid">
					<div class="row">
						<!-- Instragram Fedd Single -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="instragam-single">
								<a href="#"><img src="{{ asset('home/img/instragram/1.jpg') }}" alt="" /></a>
								<div class="instragam-content text-center text-white">
									<a class="popup-instragram" href="img/instragram/1.jpg"><i class="zmdi zmdi-instagram"></i></a>
									<span>INSTAGRAM</span>
									<h3><a href="single-product.html">#SHOPZON</a></h3>
									<a href="#">跟着我们</a>
								</div>
							</div>
						</div>
						<!-- Instragram Fedd Single -->
						<!-- Instragram Fedd Single -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="instragam-single">
								<a href="#"><img src="{{ asset('home/img/instragram/2.jpg') }}" alt="" /></a>
								<div class="instragam-content text-center text-white">
									<a class="popup-instragram" href="img/instragram/2.jpg"><i class="zmdi zmdi-instagram"></i></a>
									<span>INSTAGRAM</span>
									<h3><a href="single-product.html">#SHOPZON</a></h3>
									<a href="#">跟着我们</a>
								</div>
							</div>
						</div>
						<!-- Instragram Fedd Single -->
						<!-- Instragram Fedd Single -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="instragam-single">
								<a href="#"><img src="{{ asset('home/img/instragram/3.jpg') }}" alt="" /></a>
								<div class="instragam-content text-center text-white">
									<a class="popup-instragram" href="img/instragram/3.jpg"><i class="zmdi zmdi-instagram"></i></a>
									<span>INSTAGRAM</span>
									<h3><a href="single-product.html">#SHOPZON</a></h3>
									<a href="#">跟着我们</a>
								</div>
							</div>
						</div>
						<!-- Instragram Fedd Single -->
						<!-- Instragram Fedd Single -->
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="instragam-single">
								<a href="#"><img src="{{ asset('home/img/instragram/4.jpg') }}" alt="" /></a>
								<div class="instragam-content text-center text-white">
									<a class="popup-instragram" href="{{ asset('img/instragram/4.jpg') }}"><i class="zmdi zmdi-instagram"></i></a>
									<span>INSTAGRAM</span>
									<h3><a href="single-product.html">#SHOPZON</a></h3>
									<a href="#">跟着我们</a>
								</div>
							</div>
						</div>
						<!-- Instragram Fedd Single -->
					</div>
				</div>
			</section>
			<!-- Instragam Feed End -->
			<!-- Blog Area Start --> 
			<section class="blog-area pb-100">
				<!-- SECTION TITEL -->
				<div class="section-titel style-two text-center mb-115 text-uppercase">
					<h3>FROM THE-TOP BLOG</h3>
				</div>
				<!-- SECTION TITEL -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="blog-left-side">
								<div class="blog-left-single mb-30 res-mb-30 res-mb-sm-30">
									<div class="blg-img">
										<img src="{{ asset('home/img/blog/1.jpg') }}" alt="" />
										<a href="blog-details.html" class="icon_link"></a>
									</div>
									<div class="blog-content">
										<div class="date-athr">
											<span class="icon_profile "></span>
											<h6>眼影盒</h6>
											<span class="date">20 Dec, 2017</span>
										</div>
										<div class="blog-content-text">
											<h4><a href="#">Get it Hurry with Budget</a></h4>
											<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor inquaerat.</p>
											<a href="#">阅读更多<span class="icon-left" data-icon="&#x24;"></span></a>
										</div>
									</div>
								</div>
								<div class="blog-left-single res-mb-30 res-mb-sm-30">
									<div class="blg-img">
										<img src="{{ asset('home/img/blog/2.jpg') }}" alt="" />
										<a href="blog-details.html" class="icon_link"></a>
									</div>
									<div class="blog-content">
										<div class="date-athr">
											<span class="icon_profile "></span>
											<h6>eyeshadow box</h6>
											<span class="date">20 Dec, 2017</span>
										</div>
										<div class="blog-content-text">
											<h4><a href="#">Get it Hurry with Budget</a></h4>
											<p>Lorem ipsum dolor sit consectetur adipisicing elit, sed do eiusmod tempor inquaerat.</p>
											<a href="#">read more<span class="icon-left" data-icon="&#x24;"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="blog-right-side">
								<div class="blog-right-single">
									<div class="blg-img">
										<img src="{{ asset('home/img/blog/3.jpg') }}" alt="" />
										<a href="blog-details.html" class="icon_link"></a>
									</div>
									<div class="blog-content">
										<div class="date-athr">
											<span class="icon_profile "></span>
											<h6>eyeshadow box</h6>
											<span class="date">20 Dec, 2017</span>
										</div>
										<div class="blog-content-text">
											<h4><a href="#">Get it Hurry with Budget</a></h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim voluptatem.</p>
											<div class="blog-social-icon">
												<ul>
													<li><a href="#" class="social_facebook"></a></li>
													<li><a href="#" class="social_googleplus"></a></li>
													<li><a href="#" class="social_twitter"></a></li>
												</ul>
											</div>
											<a href="#">read more<span class="icon-left" data-icon="&#x24;"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Blog Area End -->
			<!-- Support Area Start -->
			<section class="service-area default-bg ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="service-top">
								<h6>We are unique</h6>
								<h4>Shopzon is supportive online webside for all</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-service mt-50">
								<span class="icon_refresh"></span>
								<h4>3o days return & no hassel</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing eliit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="single-service middle-border mt-50">
								<span class="icon_gift"></span>
								<h4>Free shipping worldwide</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing eliit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-service mt-50">
								<span class="icon_lock_alt"></span>
								<h4>Secure service system</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing eliit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Support Area End -->
			<!-- Client Area Start -->
			<section class="client-area ptb-100">
				<!-- SECTION TITEL -->
				<div class="section-titel style-two text-center mb-115 text-uppercase">
					<h3>WHAT CLIENT-SAY</h3>
				</div>
				<!-- SECTION TITEL -->
				<div class="container">
					<div class="row">
						<div class="client-slider-cursol owl-carousel owl-theme">
							<!-- Client Single -->
							<div class="col-md-12 item">
								<div class="client-slider-single text-center">
									<div class="client-content">
										<img src="{{ asset('home/img/client/1.png') }}" alt="" />
										<h3>Anika-Mollik</h3>
										<h5>Beauty- Expart</h5>
										<div class="sin-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ercitation ullamco laboris nisi ut aliquip ex ea co.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Client Single -->
							<!-- Client Single -->
							<div class="col-md-12 item">
								<div class="client-slider-single text-center">
									<div class="client-content">
										<img src="{{ asset('home/img/client/2.png') }}" alt="" />
										<h3>KA-Mamun</h3>
										<h5>Beauty- Expart</h5>
										<div class="sin-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ercitation ullamco laboris nisi ut aliquip ex ea co.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Client Single -->
							<!-- Client Single -->
							<div class="col-md-12 item">
								<div class="client-slider-single text-center">
									<div class="client-content">
										<img src="{{ asset('home/img/client/1.png') }}" alt="" />
										<h3>Nirob Khan</h3>
										<h5>Beauty- Expart</h5>
										<div class="sin-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ercitation ullamco laboris nisi ut aliquip ex ea co.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Client Single -->
							<!-- Client Single -->
							<div class="col-md-12 item">
								<div class="client-slider-single text-center">
									<div class="client-content">
										<img src="{{ asset('home/img/client/2.png') }}" alt="" />
										<h3>Salim Rana</h3>
										<h5>Beauty- Expart</h5>
										<div class="sin-text">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ercitation ullamco laboris nisi ut aliquip ex ea co.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Client Single -->
						</div>
					</div>
				</div>
			</section>
			<!-- Client Area End -->
			<!-- Testimonial Area Start -->
			<div class="testimonial-area ptb-100 bg-1">
				<div class="container">
					<div class="row">
						<div class="testimonial-gallery owl-carousel owl-theme">
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/1.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/2.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/3.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/4.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/5.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/3.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
							<!-- Testimonial Single -->
							<div class="col-md-12">
								<div class="testi-signal item">
									<img src="{{ asset('home/img/testi/2.jpg') }}" alt="" />
								</div>
							</div>
							<!-- Testimonial Single -->
						</div>
					</div>
				</div>
			</div>
			<!-- Testimonial Area End -->
			<!-- On Sale Product Area Start -->
			<section class="onslepro-area ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 res-mb-sm-30">
							<div class="on-sale-heading">
								<h3>TOP SALE</h3>
							</div>
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/1.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>SUN-SKIN</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
										<span class="new-price">  $80.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/2.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$35.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/3.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
						</div>
						<div class="col-md-4 col-sm-6 res-mb-sm-30">
							<div class="on-sale-heading">
								<h3>NEW ARRIVAL</h3>
							</div>
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/4.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>SUN-SKIN</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
										<span class="new-price">  $80.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/5.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$35.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/6.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="on-sale-heading">
								<h3>best sale</h3>
							</div>
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/7.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>SUN-SKIN</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
										<span class="new-price">  $80.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/8.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$35.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
							<!-- On sale product single -->
							<div class="onsale-single">
								<div class="onsale-img">
									<img src="{{ asset('home/img/onsale/9.jpg') }}" alt="" />
								</div>
								<div class="onsale-content">
									<span>Man shirt</span>
									<h6><a href="single-product.html">Skiny Shirt with Long</a></h6>
									<div class="price-box">
										<span class="old-price">$90.00</span>
									</div>
								</div>
							</div>
							<!-- On sale product single -->
						</div>
					</div>
				</div>
			</section>
			<!-- On Sale Product Area End -->
		</div>
        <!-- Page Content Wraper Area End -->
@endsection