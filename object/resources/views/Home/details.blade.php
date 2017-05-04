@extends('Home.base.parent')
@section('content')
			<!-- Banner Area Start -->
			<div class="banner-area pb-90 pt-160 bg-2">
				<div class="container">
					<div class="row">
						<div class="banner-content text-center text-white">
							<h1>商品详情</h1>
							<ul>
								<li><a href="/home/demo">首页</a> <span class="arrow_carrot-right "></span></li>
								<li>详情</li>
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
		<section class="page-content-wrapper ptb-100">
			<!-- Single Product Top Info Start -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumbs mb-40">
							<ul>
								<li class="home">
									<a title="Go to Home Page" href="/home/demo">首页</a>
									<span class="arrow_carrot-right"></span>
								</li>
								<li class="home">
									<a title="Go to Paroduct page" href="/home/protfolio">商品列表</a>
									<span class="arrow_carrot-right"></span>
								</li>
								<li class="category3">
									<span>商品详情</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<img id='mid' src="{{ asset('Admin/upload/commodityimg').'/'.$list->spic }}" width='600' height='500'>
						<div id='did' style='width:300px;height:250px;overflow:hidden;position:absolute;display:none;float:left;'>
							<img src="{{ asset('Admin/upload/commodityimg').'/'.$list->spic }}" >
						</div>
					</div>
					<script type="text/javascript">
						//获取所有需要的元素
						var mid = document.getElementById('mid');
						var did = document.getElementById('did');

						mid.onmouseover = function()
						{
							//获取小图片到顶部的距离
							var top = this.offsetTop;
							//div到左边的距离 = 小图到左边的距离+小图的宽度+自定义距离
							var left = this.offsetLeft+this.offsetWidth+10;

							//设置div的位置
							did.style.top = top+'px';
							did.style.left = left+'px';
							did.style.display = 'block';

							this.onmousemove = function(ent)
							{
								//获取鼠标在小图上的位置
								var x = ent.clientX-this.offsetLeft;
								var y = ent.clientY-this.offsetTop;

								//鼠标所在位置对应大图上的点
								did.scrollLeft = x*5-100;
								did.scrollTop = y*5-100;
							}
						}
						mid.onmouseout = function()
						{
							did.style.display = 'none';
						}
					</script>
					<div class="col-md-6">
						<div class="singlepro-right">
							<div class="snglepro-content">
								<form action='/home/cart/{{ $list->sid }}' method='post' name='myform'>
									{{ csrf_field() }}
									<!-- 隐藏域传值 -->
									<input type='hidden' name='sid' value="{{ $list->sid }}">
									<input type='hidden' name='sname' value="{{ $list->sname }}">
									<input type='hidden' name='spic' value='{{ $list->spic }}'>
									<input type='hidden' name='sprice' value='{{ $list->sprice }}'>
									<h3>品名：<a href="single-product.html">{{ $list->sname }}</a></h3>
									<div class="rating-box">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<div class="prce-stock">
										<h4>价格：{{ $list->sprice }}</h4>
									</div>
									<div class="pro-info">
										<ul>
											<li>库存：{{ $list->snum }}</li>
										</ul>
									</div>
									<div class="input-content mb-50">
										<label>数量：</label>
										<div class="quantity">
											<div class="cart-plus-minus" >
											  <input type="text" id="cart_num" value="1" name="snum" class="cart-plus-minus-box" style='width:150px;'>
											</div>
										</div>
									</div> 
									<div class="deal-btn mt-40">									
										<button style='width:130px;height:35px;'>加入购物车</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Single Product Top Info Start -->
			<!-- Single Product Discription Start -->
			<section class="pro-disciptin mt-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="p-details-tab">
								<ul role="tablist">
									<li role="presentation" class="active">
										<a href="#description" aria-controls="description" role="tab" data-toggle="tab">描述</a>
									</li>
									<li role="presentation">
										<a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">评论 </a>
									</li>
								</ul>
							</div>
							<div class="tab-content review">
								<div role="tabpanel" class="tab-pane active" id="description">
									<p>{{ $list->stext }}</p>
								</div>

								<div role="tabpanel" class="tab-pane" id="tags">
									<div class="reply-comment-area">
										<h3>用户评论专区(快来发表你的意见吧)</h3>
										@foreach($store as $s)
										<div class="single-reply user-comment">
											<div class="comment-author">
												<img alt="" src="{{ asset('admin/upload/home_userimg').'/'.$s->home_pic }}">
											</div>
											<div class="comment-info">
												<div class="comment-author-info">
													<a href="#"><b>{{ $s->home_name }}</b></a>
													发表于
													<span> {{ $s->stime }}</span>
													<a href="#">他(她)说:</a>
												</div>
												<p>{{ $s->sbody }}</p>
											</div>
										</div>
										@endforeach
									</div>
									<div class="user-comment-form-area">
										<h3>发表评论</h3>
										<div class="contact">
											<form class="form" name="enq" method="post" action="/home/store">
												{{ csrf_field() }}
												<div class="row">
													<input type='hidden' name='sid' value='{{ $list->sid }}'>
													<div class="form-group col-md-12 mbnone">
														<textarea rows="7" name="sbody" class="form-control" id="description" placeholder="您的评论..." required="required"></textarea>
													</div>
													<div class="col-md-12">
														<div class="actions">
															<input type="submit" value="发表" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Single Product Discription End -->
			<section class="top-sale-month-area ptb-100">
			<!-- SECTION TITEL -->
			<div class="tab-menu section-titel style-two text-center text-uppercase">
				<ul>
					<li class="active"><a data-toggle="tab" href="/home/protfolio">&nbsp;&nbsp;&nbsp;猜你喜欢  </a></li>
				</ul>
			</div>
			<!-- SECTION TITEL -->
			<div class="container">
				<div class="row">
					<div class="product-gallery owl-carousel owl-theme">
						<!-- Single Product Start -->
						@foreach($data as $v)
						<div class="col-md-12 item">
							<div class="single-product">
								<div class="single-img">
									<a href="/home/details/{{ $v->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$v->spic) }}" alt="" width='100' height='249'/></a>
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
			<!-- On Sale Product Area Start -->
			<section class="onslepro-area">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 res-mb-sm-30">
							<div class="on-sale-heading">
								<h3>热销</h3>
							</div>
							<!-- On sale product single -->
							@foreach($hot as $h)
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<a href="/home/details/{{ $h->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$h->spic) }}" alt="" width='100' height='100'/></a>
								</div>
								<div class="onsale-content">
									<span>{{ $h->sname }}</span>
									<h6><a href="single-product.html">品牌：{{ $h->brand }}</a></h6>
									<div class="price-box">
										<span class="old-price">￥{{ $h->sprice }}</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- On sale product single -->
						</div>
						<div class="col-md-4 col-sm-6 res-mb-sm-30">
							<div class="on-sale-heading">
								<h3>新品</h3>
							</div>
							<!-- On sale product single -->
							@foreach($newinsert as $n)
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<a href="/home/details/{{ $n->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$n->spic) }}" alt="" width='100' height='100'/></a>
								</div>
								<div class="onsale-content">
									<span>{{ $n->sname }}</span>
									<h6><a href="single-product.html">品牌：{{ $n->brand }}</a></h6>
									<div class="price-box">
										<span class="old-price">价格：{{ $n->sprice }}</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- On sale product single -->
						</div>
						<div class="col-md-4 hidden-sm hidden-xs">
							<div class="on-sale-heading">
								<h3>活动</h3>
							</div>
							<!-- On sale product single -->
							@foreach($discount as $d)
							<div class="onsale-single mb-30">
								<div class="onsale-img">
									<a href="/home/details/{{ $d->sid }}"><img src="{{ asset('Admin/upload/commodityimg'.'/'.$d->spic) }}" alt="" width='100' height='100'/></a>
								</div>
								<div class="onsale-content">
									<span>{{ $d->sname }}</span>
									<h6><a href="single-product.html">品牌：{{ $d->brand }}</a></h6>
									<div class="price-box">
										<span class="old-price">￥{{ $d->sprice }}</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- On sale product single -->
						</div>
					</div>
				</div>
			</section>
			<!-- On Sale Product Area End -->
		</section>
        <!-- Page Content Wraper Area End -->
@endsection