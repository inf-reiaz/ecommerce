<?php $__env->startSection('title'); ?>
About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>
						Amar Food is here to provide 100% organic foods & amazing shopping experience of the consumers. We are going to establish a grocery shopping credit card for our regular customers. By ensuring healthy life, we would like to make our consumers smile. Our aim is to be such an e-commerce platform where each and every type of food will be available. We would like to ensure healthy & happy life by providing wholesome quality food, quick delivery service and excellent shopping experience.
						 <br> Thanks <br>
						Amar Foods Team.
					</p>
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
					<img src="/public/front/img/logo.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	

	<!-- newsletter -->
	<?php echo $__env->make('front.partials.newsletter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- //newsletter -->

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