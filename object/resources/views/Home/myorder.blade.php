@extends('Home.base.parent')
@section('content')
	<!-- Banner Area Start -->
	<div class="banner-area pb-90 pt-160 bg-2">
		<div class="container">
			<div class="row">
				<div class="banner-content text-center text-white">
					<h1>我的订单</h1>
					<ul>
						<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
						<li>我的订单</li>
					</ul>	
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Area End -->
</header>
<!-- Header Area End -->
<!-- 弹窗 -->
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
<section class="page-content-wrapper login-area ptb-100">
	
	<div class="container">
		<div class="row">
		   <div class="col-md-12 col-sm-12 col-xs-12">	
				<div class="table-content table-responsive">
					<table>
						<thead>
							<tr>
								<th class="product-subtotal">订单号</th>
								<th class="product-thumbnail">商品图片</th>
								<th class="product-name">订单商品</th>
								<th class="product-price">订单商品单价</th>
								<th class="product-quantity">订单数量</th>
								<th class="product-subtotal">订单总计</th>
								<th class="product-subtotal">订单状态</th>
								<th class="product-subtotal">配送方式</th>
								<th class="product-subtotal">收货人</th>
								<th class="product-subtotal">收货地址</th>
								<th class="product-subtotal">联系电话</th>
								<th class="product-subtotal">下单时间</th>
							</tr>
						</thead>
						@foreach($orderlist as $o)
						<tbody>
							<tr class=''>
								<td class="product-thumbnail">{{ $o->ordername }}</td>
								<td class="product-name"><img src='{{ asset('/admin/upload/commodityimg').'/'.$o->spic }}'></td>
								<td class="product-price">{{ $o->sname }}</td>
								<td class="product-quantity">{{ $o->sprice }}</td>
								<td class="product-subtotal">{{ $o->snum }}</td>	
								<td class="product-subtotal">{{ $o->xj }}</td>
								<td class="product-subtotal">@if($o->orderstate ==1) 已付款 @elseif($o->orderstate == 2) 待发货 @elseif($o->orderstate == 3) 已发货 @elseif($o->orderstate == 4) 已收货 @endif</td>
								<td class="product-subtotal">{{ $o->dname }}</td>
								<td class="product-subtotal">{{ $o->sitename }}</td>
								<td class="product-subtotal">{{ $o->site }}</td>
								<td class="product-subtotal">{{ $o->ordertel }}</td>
								<td class="product-subtotal">{{ $o->xdtime }}</td>
							</tr>
						</tbody>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
	
</section>
<!-- Page Content Wraper Area End -->
@endsection
