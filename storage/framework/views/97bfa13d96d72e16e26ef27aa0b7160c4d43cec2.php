<?php $__env->startSection('title'); ?>
Index
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="<?php echo e($product->product_photo); ?>">
							<div class="thumb-image"> <img src="<?php echo e($product->product_photo); ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 single-right">
				<h3><?php echo e($product->name); ?></h3>
				
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				
				<div class="description">
					<h5><i>Description</i></h5>
					<p>
						<?php echo $product->description; ?>

					</p>
				</div>
				
				<div class="simpleCart_shelfItem">
					<p><span><?php echo e($product->price); ?> Taka</span> <i class="item_price"><?php echo e($product->discunt_price); ?> Taka</i></p>
					
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1"> 
						<input type="hidden" name="w3ls_item" value="<?php echo e($product->name); ?>"> 
						<input type="hidden" name="amount" value="<?php echo e($product->discunt_price); ?>">   
						<button type="submit" class="w3ls-cart">Add to cart</button>
					</form>
					
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> 
	<!---728x90--->
	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Information</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3><?php echo e($product->name); ?></h3>
						<p>
							<?php echo $product->description; ?>

						</p>
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>(2) Reviews</h4>
						
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="/public/front/images/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Mahadi Hassan</a>
									<h5>May 20, 2018.</h5>
									<p>Amar Food is such a responsite marketplace to shop daily grocery products. They are really very care about Freshness and Organic delivery. Am recommending amar foods for daily grocery shopping.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="/public/front/images/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="">Selena Akther</a>
									<h5>May 21, 2018.</h5>
									<p>As a working woman i think Amar food serve me the best service in Dhaka city. Service quality is awesome. Deliver product with in 3 Hours at Dhanmondi. Mostly they keeps their Promise!!</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit">
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
		</div>
	</div>
	<!---728x90--->
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<div class="spec ">
				<h2 style="font-size: 40px;margin-bottom: 15px;">Related Products</h2>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
			
			<ul id="flexiselDemo2">			
				<?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left mobiles_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive" />
								<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive" />
								<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive" />
								<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive" />
								<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive" /> 
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<!--<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->
									</div>
								</div>
							</div>
							<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$r->id)); ?>"><?php echo e($r->name); ?></a></h5>
							<div class="simpleCart_shelfItem"> 
								<p class="flexisel_ecommerce_cart"><span><?php echo e($r->price); ?> Taka</span> <i class="item_price"><?php echo e($r->discunt_price); ?> Taka</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="<?php echo e($r->name); ?>"> 
									<input type="hidden" name="amount" value="<?php echo e($r->discunt_price); ?>">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form> 
							</div>
						</div>
					</div>
				</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
			
		</div>
	</div>
	<!-- //Related Products -->
	

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>