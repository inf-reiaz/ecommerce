<?php $__env->startSection('title'); ?>
Pre Order
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Pre Order</h3>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
			
				<div class="active">
					<div class="agile_ecommerce_tabs">
						
						<?php if($preordes->count() > 0): ?>
						<?php $__currentLoopData = $preordes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-4 agile_ecommerce_tab_left ram">
								<div class="hs-wrapper">
									<img src="<?php echo e($p->product_photo); ?>" alt=" " class="img-responsive">
									
									<div class="w3_hs_bottom">
										<ul>
											<li>
												<!--<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->
											</li>
										</ul>
									</div>
									
								</div> 
								<h5><a href=""><?php echo e($p->name); ?></a></h5>
								<div class="simpleCart_shelfItem">
									<p><span><?php echo e($p->price); ?> Taka</span> <i class="item_price"><?php echo e($p->discunt_price); ?> Taka</i></p>
								
								<a href="<?php echo e(action('CartController@addItem',$p->id)); ?>" class="w3ls-cart addtocart">Add to cart</a>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								
						<?php else: ?>
						<div class="col-md-4 agile_ecommerce_tab_left">
							<h3>No data Found.</h3>
						</div>
						<?php endif; ?>
						
								
						<div class="clearfix"> </div>
					</div>
				</div>
					
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>