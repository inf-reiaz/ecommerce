<?php $__env->startSection('title'); ?>
Family Combo
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Family Combo</h3>
					</div>
					
					<div class="alert alert-warning text-center" style="font-size: 20px;">
					  <strong> Get 10% off on minimum purchase of BDT. 1000</strong>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
			
				<div class=" active in">
					<div class="agile_ecommerce_tabs">
						<?php $__currentLoopData = $preordes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		    			    <div class="col-md-3 product_item text-center  amarfoods_box">
								<div class="">
									<img src="<?php echo e($p->product_photo); ?>" alt=" " class="img-responsive">
								</div>
								
								<div class="product_content_bg">
									<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$p->id)); ?>"><?php echo e($p->name); ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo e($p->price); ?> Taka</span> <i class="item_price"><?php echo e($p->discunt_price); ?>Taka</i></p>
										<a href="<?php echo e(action('CartController@addItem',$p->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
									</div>
								</div>
								
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
					
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>