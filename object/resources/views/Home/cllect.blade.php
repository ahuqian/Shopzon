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
							<h1>我的收藏</h1>
							<ul>
								<li><a href="/home/demo">首页</a> <span class="arrow_carrot-right ">收藏列表</span></li>
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
						<form action='/cllect' method='post' name='myform'>
			                {{ csrf_field() }}
			                {{ method_field('DELETE') }}
			            </form>
						<div class="col-md-12">
							<div class="tab-content">
								<div class="shop-tab-area">
									<div class="row">
										@foreach($cllect as $c)
										<!-- Single Product Start -->
												<div class="col-md-4 col-sm-6">
												<div class="single-product style-two mb-50">
													<a href="/home/details/{{ $c->sid }}"><div class="single-img">
														<img src="{{ asset('/Admin/upload/commodityimg').'/'.$c->spic }}" alt="" width='400' height='350'/ >
														<span class="pro-level">我的收藏</span>
														<div class="hover-content text-center">
														</div>
													</div>
													</a>
													<div class="product-details mt-20">
														<h4><a href="single-product.html">{{ $c->sname }}</a><span>品牌：{{ $c->brand }}</span></h4>
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="price-box">
															<span class="old-price">￥{{ $c->sprice }}</span>
														</div>
														<span style='float:right;'><a href='javascript:doDel({{ $c->id }})'>删除我的收藏</a></span>
													</div>
												</div>
											</div>
										<!-- Single Product End -->
										@endforeach
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
        <script type="text/javascript">
	        function doDel(id){
	            if(confirm('确定删除吗？')){
	                var form = document.myform;
	                form.action = '/home/cllect/'+id;
	                form.submit();
	            }
	        }
	    </script>
@endsection