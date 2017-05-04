﻿<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @foreach($deploy as $v)
        <title>{{ $v->title }}</title>
        @endforeach
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="{{ asset('home/img/apple-touch-icon.png') }}">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('home/img/icon/favicon.ico') }}">
        <!-- Place favicon.ico in the root directory -->		
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/elegant-font.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/material-design-iconic-font.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('home/css/animate-heading.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/shortcode/shortcodes.css') }}">
        <link rel="stylesheet" href="{{ asset('home/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/home/style2.css') }}">
        <link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('home/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<!-- Header Area Start -->
		<header>
			<!-- Header Menu Area -->
			<div class="menu-area mt-60">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							@foreach($deploy as $v)
							<div class="logo-area text-center text-uppercase">
								<a href="/home/demo"><img src="{{ asset('Admin/upload/deployimg').'/'.$v->logo }}" width='234' height='80' alt="" /></a>
							</div>
							@endforeach
						</div>
						<div class="col-md-9 col-sm-12">
							<div class="main-menu lemon-bg">
								<nav>
									<ul id="nav">
										<li><a href="/home/demo">首页</a></li>
										<li><a href="">商品分类</a>
											<ul>
												<li><a href="/home/protfoliohzp"><i class="arrow_carrot-right"></i>化妆品</a>
												</li>
												<li><a href="/home/protfoliohzgj"><i class="arrow_carrot-right"></i>化妆工具</a></li>
											</ul>
										</li>
										@if(!empty(session('alluser')->home_name))
											<li><a href="#">个人中心</a>
												<ul>
													<li><a href="/home/personage"><i class="arrow_carrot-right"></i>我的资料</a></li>
													<li><a href="/home/myorder"><i class="arrow_carrot-right"></i>我的订单</a></li>
													<li><a href="/home/update"><i class="arrow_carrot-right"></i>修改密码</a></li>
												</ul>
											</li>
											<li>
												<a href="/home/over">注销</a>
											</li>
										@else
											<li>
												<a href="/home/login">登录</a>
											</li>
										@endif
										<li>
											<div>
											<form action='/home/souprotfolio' method='post'>
												{{ csrf_field() }}
												<li>
													<input type='text' placeholder='请输入您要搜索的商品' name='sname'>
												</li>
												<li>
													<input type='submit'value='搜索'>
												</li>
											</form>
											</div>
										</li>
									</ul>
								</nav>
								<!-- Product Cart -->
								@if(!empty($cart))
								<div class="menu-right-area">
									<a href="/home/cart" class="mini-cart-icon">
										<i class="icon_cart_alt"></i>
									</a>
									<div class="top-cart-content">
										<!-- Cart Single -->
										<div class="media header-middle-checkout">
											@foreach($cart as $c)
											<div class="media-left check-img">
												<a href="/home/details/{{ $c->sid }}">
													<img alt="" src="{{ asset('/admin/upload/commodityimg').'/'.$c->spic }}" style='width:55px;height:55px;'>
												</a>
											</div>
											<div class="media-body checkout-content">
												<h4 class="media-heading">
													<a href="/home/details/{{ $c->sid }}">{{ $c->sname }}</a>
												</h4>
												<p>{{ $c->snum }} x ￥{{ $c->sprice }}</p>
											</div>
											@endforeach
										</div>
										<!-- Cart Single -->
										<div class="actions">
											<center>
												<a href="/home/cart">
													<button type="button" title="想好了吗？去购物车结算吧！" class="Checkout-botton" >
														<span>结算</span>
													</button>
												</a>
											</center>
										</div>
									</div>
								</div>
								@endif
								<!-- Product Cart -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Menu Area -->
			<div>
				@yield('content')
			</div>
		<!-- Fotter Area Start -->
		<footer>
			<!-- Footer Top Area End -->
			<div class="fotter-area dark-gray-bg ptb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="address-area res-mb-sm-30">
								<a href="/home/demo" style='margin-bottom:0px;'>shopzon</a>
								<div class="contact-social mt-40">
									<div style='width:170px;height:170px;font-size:15px;'>
									<p>
									@foreach($deploy as $v)
										{{ $v->text }}
									@endforeach
									</p>
								    </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="footer-menu res-mb-sm-30">
								<h4>我的账户</h4>
								<ul>
									<li><a href="#">常见问题解答</a></li>
									<li><a href="/home/myorder">追踪您的订单</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3 hidden-sm hidden-xs">
							<div class="footer-menu">
								<h4>网站引导</h4>
								<ul>
									@foreach($friend as $f)
									<li><a href="http://{{ $f->furl }}">{{ $f->fname }}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="footer-menu">
								<h4>联系信息</h4>
								<div class="contact-details">
									<ul>
										<li>
											<span class="icon_pin"></span>
											<p>xxx省xxx市xxx区xxx街xxx号</p>
										</li>
										<li>
											<span class="icon_mail"></span>
											<p>www.xxx@.163.com</p>
										</li>
										<li>
											<span class="icon_phone "></span>
											<p>256 987 654 321</p>
										</li>
										<li>
											<span class="icon_clock_alt"></span>
											<p>上午8:00-下午6:00</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Top Area End -->
			<!-- Footer Bottom Area Start -->
			<div class="footer-bottom-area black-bg">
				<div class="container">
					<div class="row ">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<p>Copyright &copy; 2017.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<img src="{{ asset('home/img/icon/payment.png') }}" alt="" />
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Bottom Area End -->
		</footer>
        <!-- Fotter Area End -->
	   
	   <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="{{ asset('home/img/other/quickview.jpg') }}">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>Beauty Products</h1>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="product-details.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li>
													<a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a>
												</li>
                                                <li>
													<a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a>
												</li>
                                                <li>
													<a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
												</li>
                                                <li>
													<a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a>
												</li>
                                                <li>
													<a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a>
												</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product-->
		<!-- all js here -->
        <script src="{{ asset('home/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('home/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('home/js/jquery.nivo.slider.js') }}"></script>
		<script src="{{ asset('home/js/price-slider.js') }}"></script>
        <script src="{{ asset('home/js/jquery.simpleLens.min.js') }}"></script>
        <script src="{{ asset('home/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('home/js/animated-heading.js') }}"></script>
        <script src="{{ asset('home/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('home/js/jquery.countdown.js') }}"></script>
        <script src="{{ asset('home/js/jquery.meanmenu.js') }}"></script>
        <script src="{{ asset('home/js/plugins.js') }}"></script>
        <script src="{{ asset('home/js/main.js') }}"></script>
    </body>
</html>