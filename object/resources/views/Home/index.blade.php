@extends('Home.base.parent')
@section('content')
<!-- Header Slider Area -->
<div class="slider-area">
<div class="bend niceties preview">
	<div id="ensign-nivoslider" class="slides">	
		<img src="{{ asset('home/img/slider/1.jpg') }}" alt="" title="#slider-direction-1"  />
		<img src="{{ asset('home/img/slider/2.jpg') }}" alt="" title="#slider-direction-1"  />
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
<!-- 首页弹窗 -->
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
<!-- Deal For Month Area Start -->
<section class="deal-month-area ptb-100 dark-gray-bg">
<!-- SECTION TITEL -->
<div class="section-titel text-center mb-85 text-uppercase">
	<h3>Sale-low</h3>
</div>
<!-- SECTION TITEL -->
<div class="container">
	<div class="row">
		<!-- sale -->
		@foreach($redhot as $r)
		<div class="col-md-6 col-sm-6 col-xs-12 res-mb-25">
			<div class="deal-month-left">
				<img src="{{ asset('Admin/upload/commodityimg').'/'.$r->spic }}" width='600' height='465' alt="" />
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="deal-month-right white-bg p-20">
				<span class="titel"><h2>{{ $r->sname }}</h2></span>
				<div class="main-content">
					<h2><a href="#"></a></h2>
					<h4>￥{{ $r->sprice }}</h4>
					<p>{{ $r->stext }}</p>
					<div class="count-down-area">
						<div class="timer default-bg">
							<div data-countdown="2018/01/01"></div>
						</div> 
					</div>
					<div class="deal-btn mt-40">
						<form action='/cart' method='post' name='myform'>
				                {{ csrf_field() }}
				                <input type='hidden' name='sid' value="{{ $r->sid }}">
				                <input type='hidden' name='sname' value='{{ $r->sname }}'>
				                <input type='hidden' name='sprice' value='{{ $r->sprice }}'>
				                <input type='hidden' name='spic' value='{{ $r->spic }}'>
				                <input type='hidden' name='snum' value='1'>
				        </form>
						<a href="javascript:doDel({{ $r->sid }})">加入购物车</a>
						<span class="titel f-right"><a href="/home/details/{{ $r->sid }}">查看详细信息</a></span>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
</section>
<!-- Deal For Month Area Start -->
<!-- Month Top Sale Area Start -->
<section class="top-sale-month-area ptb-100">
<!-- SECTION TITEL -->
<div class="tab-menu section-titel style-two text-center text-uppercase">
	<ul>
		<li class="active"><a data-toggle="tab" href="/home/protfolio">&nbsp;&nbsp;&nbsp;热销产品  </a></li>
	</ul>
</div>
<!-- SECTION TITEL -->
<div class="container">
	<div class="row">
		<div class="product-gallery owl-carousel owl-theme">
			<!-- Single Product Start -->
			<!-- 热销商品 -->
			@foreach($ob as $v)
			<div class="col-md-12 item">
				<div class="single-product">
					<div class="single-img">
						<a href="/home/details/{{ $v->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$v->spic) }}" alt="" width='100' height='249'/></a>
						<span class="pro-level" style='background:#EA2000'>热</span>

					</div>
					<div class="product-details mt-20">
						<h4><a href="single-product.html">{{ $v->sname }}</a><span>品牌：&nbsp;{{ $v->brand }}</span></h4>
						<div class="rating-box">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="price-box">
							<span class="old-price">￥{{ $v->sprice }}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!-- Single Product End -->
		</div>
	</div>
</div>
</section>
<!-- Month Top Sale Area End -->
<!-- Product Tab Area Start -->
<!-- Month Top Sale Area Start -->
<section class="top-sale-month-area ptb-100">
<!-- SECTION TITEL -->
<div class="tab-menu section-titel style-two text-center text-uppercase">
	<ul>
		<li class="active"><a data-toggle="tab" href="/home/protfolio">&nbsp;&nbsp;&nbsp;折扣商品  </a></li>
	</ul>
</div>
<!-- SECTION TITEL -->
<div class="container">
	<div class="row">
		<div class="product-gallery owl-carousel owl-theme">
			<!-- Single Product Start -->
			<!-- 打折商品 -->
			@foreach($discount as $v)
			<div class="col-md-12 item">
				<div class="single-product">
					<div class="single-img">
						<a href="/home/details/{{ $v->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$v->spic) }}" alt="" width='100' height='249'/></a>
						<span class="pro-level">折</span>
					</div>
					<div class="product-details mt-20">
						<h4><a href="single-product.html">{{ $v->sname }}</a><span>品牌：&nbsp;{{ $v->brand }}</span></h4>
						<div class="rating-box">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="price-box">
							<span class="old-price">￥{{ $v->sprice }}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!-- Single Product End -->
		</div>
	</div>
</div>
</section>
<!-- Product Tab Area End -->
<section class="top-sale-month-area ptb-100">
<!-- SECTION TITEL -->
<div class="tab-menu section-titel style-two text-center text-uppercase">
	<ul>
		<li class="active"><a data-toggle="tab" href="/home/protfolio">&nbsp;&nbsp;&nbsp;新品到货  </a></li>
	</ul>
</div>
<!-- SECTION TITEL -->
<div class="container">
	<div class="row">
		<div class="product-gallery owl-carousel owl-theme">
			<!-- Single Product Start -->
			<!-- 商品新品 -->
			@foreach($newinsert as $v)
			<div class="col-md-12 item">
				<div class="single-product">
					<div class="single-img">
						<a href="/home/details/{{ $v->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$v->spic) }}" alt="" width='100' height='249'/></a>
						<span class="pro-level">新</span>
					</div>
					<div class="product-details mt-20">
						<h4><a href="single-product.html">{{ $v->sname }}</a><span>品牌：&nbsp;{{ $v->brand }}</span></h4>
						<div class="rating-box">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="price-box">
							<span class="old-price">￥{{ $v->sprice }}</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!-- Single Product End -->
		</div>
	</div>
</div>

<script type="text/javascript">


</script>
</section>
<!-- Product Tab Area End -->
<div class="tab-menu section-titel style-two text-center text-uppercase">
	<ul>
		<li class="active"><a data-toggle="tab" href="#">&nbsp;&nbsp;&nbsp;为您推荐  </a></li>
	</ul>
</div>
<!-- Instragam Feed Start -->
<section class="instragam-area ptb-100">
<div class="container-fluid">
	<div class="row">
		<!-- Instragram Fedd Single -->
		<script type="text/javascript" src="{{ asset('home/js/jquery-1.8.3.min.js') }}"></script>
		<div class="col-md-3 col-sm-6 col-xs-12">	
			<div class="instragam-single">
				<div  style='width:1600px;float:left;height:380px;' id='did' >
					@foreach($list as $v)
					<a href='#'><img src="{{ url('Admin/upload/carousel').'/'.$v->imgname }}" alt="" id='img' style='width:387px;height:380px;overflow:hidden;'/></a>
					@endforeach
				</div>	
			</div>
		</div>
		<!-- 轮播图 -->
	 	<script type="text/javascript">
	 	// document.getElementById('img').mouseover("this.stop()");
	 	// document.getElementById('img').onmouseout('');
		setInterval(function(){
			//获取最后一张图片，让他的宽度变为0px，把他插入到div的前面，用动画的效果把宽度变成267px
			$("#did img:last").css('width','0px').prependTo('#did').animate({width:'387px'},1000);
		},1500);
			var img = document.getElementById('img');
			$('img:last').css('display:none');
		</script>
		<!-- Instragram Fedd Single -->
	</div>
</div>
</section>
<!-- Instragam Feed End -->
		<!-- Client Area Start -->
		<section class="client-area ptb-100">
			<!-- SECTION TITEL -->
			<div class="section-titel style-two text-center mb-115 text-uppercase">
				<h3>化妆品牌</h3>
			</div>
			<!-- SECTION TITEL -->
			<div class="container">
				<div class="row">
					<div class="client-slider-cursol owl-carousel owl-theme">
						<!-- Client Single -->
						@foreach($notice as $no)
						<div class="col-md-12 item">
							<div class="client-slider-single text-center">
								<div class="client-content">
									<img src="{{ asset('Admin/upload/notice').'/'.$no->pic }}" alt="" width='500' height='400'/>
									<h3>{{ $no->name }}</h3>
									<div class="sin-text">
										<p>{{ $no->intro }}</p>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<!-- Client Single -->
					</div>
				</div>
			</div>
		</section>
		<!-- Client Area End -->
		<script type="text/javascript">
	        function doDel(id){
                var form = document.myform;
                form.action = '/home/cart/'+id;
                form.submit();
	        }

	      	function selected(sid)
	      	{
	      		var id = sid;
	      		$.ajax({
	      			url:"/home/cllect/"+sid,
	      			type:'get',
	      			async:true,
	      			success:function(data){
	      				if(data == 1){
	      					id.text('已收藏');
	      				}
	      			},
	      			error:function()
	      			{
	      				alert('error');
	      			}
	      		});	
	      	}
    	</script>
@endsection