@extends('Home.base.parent')
@section('content')
	<!-- Banner Area Start -->
	<div class="banner-area pb-90 pt-160 bg-2">
		<div class="container">
			<div class="row">
				<div class="banner-content text-center text-white">
					<h1>购物车</h1>
					<ul>
						<li><a href="index.html">首页</a> <span class="arrow_carrot-right "></span></li>
						<li>购物车</li>
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
				<form action="/home/order" method='post'>
				{{ csrf_field() }}			
					<div class="table-content table-responsive">
						<table>
							<thead>
								<tr>
									<th class="product-thumbnail">商品图片</th>
									<th class="product-name">产品</th>
									<th class="product-price">价格</th>
									<th class="product-quantity">数量</th>
									<th class="product-subtotal">小计</th>
									<th class="product-remove">移除</th>
								</tr>
							</thead>
							
							@foreach($cart as $c)
							<tbody>
								<!-- 隐藏域传值 -->
									<input type='hidden' name='cid[]' value='{{ $c->id }}'>
								<tr class='{{ $c->id }}'>
									<td class="product-thumbnail"><a href="/home/details/{{ $c->sid }}"><img src="{{ asset('/Admin/upload/commodityimg').'/'.$c->spic }}" name='spic' alt=""></a></td>
									<td class="product-name"><a href="/home/details/{{ $c->sid }}">{{ $c->sname }}</a></td>
									<td class="product-price"><span class="amount">{{ $c->sprice }}</span></td>
									
									<td class="product-quantity"><input type="number" class='subnum' onclick='setnum(this)' value="{{ $c->snum }}" ></td>
									<td class="product-subtotal allsprice jiage">{!! (int)$c->snum*(int)$c->sprice !!}</td>
									<td class="product-remove">
										<a onclick='doDel({{ $c->id }})'><i class="fa fa-times" style='cursor:pointer;'></i></a></td>
									<input type='hidden' name='sid' value="{{ $c->sid }}">
								</tr>
							</tbody>
							@endforeach
							<!-- 隐藏域传总计数值 -->
							<input type='hidden' name='total' value='' id='hid'>
						</table>
					</div>
					<div class="row">
						<div class="col-md-9 col-sm-7 col-xs-12">
							<div class="buttons-cart">
								<a href="/home/demo">继续购物</a>
							</div>
						</div>
						<div class="col-md-3 col-sm-5 col-xs-12">
							<div class="cart_totals">
								<h2>购物车总计</h2>
								<p>
								<table>
									<tbody>
										<tr class="order-total">
											<td>
												￥<strong><span class="amount total" id='span'></span></strong>
											</td>
										</tr>											
									</tbody>
								</table>	
								</p>
								<div class="wc-proceed-to-checkout">
									<input type='submit' value='结算' style='width:150px;'>
								</div>
							</div>
						</div>
					</div>
				</form>	
			</div>
		</div>
	</div>
</section>
<!-- Page Content Wraper Area End -->
<script type='text/javascript' src="/home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
		// alert(hid.value);
		
		function doDel(id){
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
			// alert(id);
			$.ajax({
				url:'/home/cart/destroy',
				data:{'id':id},
				type:'Post',
				success:function(event){
					// alert(event);
					$('.'+id).remove();
					allnum();
				},
			});
		}
		function setnum(obj){
			if($(obj).val()<=1){
				$(obj).val(1);
				alert('商品不能小于1');
			}
			var price = $(obj).parent().prev().find('span').html();
			var num = $(obj).val();
			// var aa = 0;
			price = parseInt(price);
			num = parseInt(num);
			$(obj).parent().next().html(price*num);
			// aa += num;
			// $('#oid').val(aa);
			allnum();
			setordernum();
			var gid = $(obj).parent().siblings('input[name="sid"]').val();
			// alert(gid);
			var g = num;
			var t = price*num;
			$.get('/home/gnum/'+gid,{snum:g,xj:t});
		}

		function allnum(){
			var allsprice = $('.allsprice');
			var str = 0;
			for(var i=0;i<allsprice.length;i++){
				str += parseInt($(allsprice[i]).html());
			}
			$('.total').html(str);
			$('#hid').val(str);
		}
		allnum();

		function setordernum(){
			var subnumlist = $('.subnum');
			var num = 0;
			for (var i = 0; i < subnumlist.length; i++) {
				num += parseInt($(subnumlist[i]).val());
			};
			// alert(num);
		}
		setordernum();

    </script>
@endsection
