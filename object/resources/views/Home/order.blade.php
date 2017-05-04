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
							<h1>订单</h1>
							<ul>
								<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
								<li>订单详情</li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Area End -->
		</header>

	<section class="page-content-wrapper pt-100 pb-40">
	<!-- checkout-area start -->

	<div class="checkout-area">
		
		<div class="container">
			<div class="row">
				<form action="/home/payment" method='post'>	
					{{ csrf_field() }}
					<div class="col-lg-6 col-md-6">
						<div class="your-order" style='margin:0 auto;width:1150px;'>
							<h3>您的订单</h3>
							<div class="your-order-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-name">商品信息</th>
											<th class="product-total">商品数量</th>
											<th class="product-total">总计</th>
										</tr>							
									</thead>
									@foreach($orderlist as $o)
									<tbody>
										<tr class="cart_item">
											<td class="product-name">
												{{ $o->sname }}
											</td>
											<td class="product-name">
												<strong class="product-quantity"> X {{ $o->snum }}</strong>
											</td>
											<td class="product-total">
												<span class="amount">{{ $o->xj }}</span>
											</td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>
							<div class="payment-method">
								<div class="payment-accordion">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													请填写您的收货信息
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
													<p>收货人：<input type='text' name='sitename' value='{{ $o->sitename }}'>
													</p>
													<p>收货地址：<select id='cid' name='city1[]'>
																	<option>--请选择--</option>
													   			 </select>
													   			 <br>
													</p>
													<p>
														<input type='text' name='city2' placeholder='请填写你的详细地址'>
													</p>
													<p>收货人电话：<input type='text' name='ordertel' value='{{ $o->ordertel }}'>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
									<div class="order-button-payment">
										<input type="submit" value="支付订单" style='width:400px;'>
									</div>							
								</div>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!-- checkout-area end -->
</section>
<script type="text/javascript" src='{{ asset("js/jquery-1.8.3.min.js") }}'></script>
<script type="text/javascript">
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
	$.ajax({
		url:'{{ url("/home/ajaxdemo/get") }}',
		type:'get',
		async:true,
		data:{upid:0},
		dataType:'json',

		success:function(data)
		{
			// console.log(data);
			//遍历从数据库查出来的数据，生成option选项追加到select里
			for (var i = 0; i < data.length; i++) {
				$('#cid').append("<option value="+data[i].id+">"+data[i].name+"</option>");
			};
		},
		error:function()
		{
			alert('ajax请求失败');
		}
	});

	//给所有的select标签绑定change事件
	$('select').live("change",function(){
		//干掉当前你选择的select标签后面的select标签
		$(this).nextAll('select').remove();
		//判断你选择是不是--请选择--
		if($(this).val() != '--请选择--'){
			//因为在ajax的回调函数中需要使用当前对象，但是$(this)在ajax的回调函数中用不了
			var ob = $(this);
			$.ajax({
				url:'{{ url("/home/ajaxdemo/post") }}',
				type:'get',
				async:true,
				// ,'_token':"{{ csrf_token() }}"
				data:{upid:$(this).val()},
				dataType:'json',
				success:function(data)
				{
					// alert(data);
					// console.log(data);
					//判断是不是最后一级城市，最后一级城市查数据库length==0
					if(data.length>0){
						//生成一个新的select标签
						var select = $("<select name='city1[]'><option>--请选择--</option></select>");
						//遍历从数据库查出来的数据，生成option选项追加到select里
						for (var i = 0; i < data.length; i++) {
							$(select).append("<option value="+data[i].id+">"+data[i].name+"</option>");
						};
						//外部插入到前一个select后面
						ob.after(select);
					}
				},
				error:function()
				{
					alert('ajax请求失败');
				}
			});
		}
	});
</script>
@endsection