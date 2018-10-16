@extends('front.layout.app')

@section('title')
Pre Order
@endsection

@include('front.new_menu')


@section('content')

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Product</h3>
						<div class="ser-t">
							<b></b>
							<span><i></i></span>
							<b class="line"></b>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="row">
		        <div class="col-md-2">
					
					<ul class="info" id="top-bottom-menu"> 
						<li><a href="">Demo</a></li>
						<li><a href="">Demo</a></li>
						<li><a href="">Demo</a></li>
						<li><a href="">Demo</a></li>
						<li><a href="">Demo</a></li>
						<li><a href="">Demo</a></li>
					</ul>
				</div>
			    <div class="col-md-10">
			        
    			    <div class="col-md-3 agile_ecommerce_tab_left">
    									<div class="hs-wrapper">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<img src="/public/front/img/20180519055940_lg.png" alt=" " class="img-responsive">
    										<div class="w3_hs_bottom">
    											<ul>
    												<li>
    													<!--<a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->
    												</li>
    											</ul>
    										</div>
    									</div>
    										<h5><a href="http://amarfoods.com/single/43">Golden Circle Green Juice</a></h5>
    									<div class="simpleCart_shelfItem">
    										<p><span>300 Taka</span> <i class="item_price">295 Taka</i></p>
    										
    									
    										
    										<a href="http://amarfoods.com/add-item/43" class="w3ls-cart addtocart">Add to cart</a>
    										
    									</div>
    								</div>
			    
			    </div>
			    
			    
			</div>

			
			<div class="clearfix"> </div>
		</div>
	</div>

@endsection


@section('js')


	<script src="/public/front/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab1').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	
	
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="/public/front/js/jquery.flexisel.js"></script>

				<!--quantity-->
						<script>
						$('.value-plus1').on('click', function(){
							var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
							divUpd.text(newVal);
						});

						$('.value-minus1').on('click', function(){
							var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
							if(newVal>=1) divUpd.text(newVal);
						});
						</script>
					<!--quantity-->
					
					
					
				<!-- flexslider -->
					<script defer src="/public/front/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="/public/front/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="/public/front/js/imagezoom.js"></script>
				<!-- //zooming-effect -->
@endsection

