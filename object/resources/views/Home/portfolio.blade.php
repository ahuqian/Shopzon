@extends('Home.base.parent')
@section('content')
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
							<h1>商品列表</h1>
							<ul>
								<li><a href="/home/demo">首页</a> <span class="arrow_carrot-right ">商品列表</span></li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
			<!-- Banner Area End -->
		</header>
        <!-- Header Area End -->
        <!-- Page Content Wraper Area Start -->
		<section class="page-content-wrapper">
			<div class="container">
				<div class="row">
					<div class="content-full pt-100 pb-50 fix">
						<!-- Left Side Start -->
						<div class="col-md-12">
							<div class="tab-content">
								<div class="shop-tab-area">
									<div class="row">
										<!-- Single Product Start -->
										@foreach($list as $v)
												<div class="col-md-4 col-sm-6">
												<div class="single-product style-two mb-50">
													<a href="/home/details/{{ $v->sid }}"><div class="single-img">
														<img src="{{ asset('Admin/upload/commodityimg').'/'.$v->spic }}" alt="" width='400' height='350'/ >
														<span class="pro-level">Sale</span>
														<div class="hover-content text-center">
														</div>
													</div>
													</a>
													<div class="product-details mt-20">
														<h4><a href="single-product.html">{{ $v->sname }}</a><span>品牌：{{ $v->brand }}</span></h4>
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
						</div>
						<!-- Left Side End -->
					</div>
				</div>
			</div>
		</section>
        <!-- Page Content Wraper Area End -->
@endsection