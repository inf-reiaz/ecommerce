<?php $__env->startSection('title'); ?>
preorder
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php $__env->startSection('content'); ?>

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Search</h3>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
				
				
				<?php if($products): ?>
				
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-md-3 agile_ecommerce_tab_left ram">
								<div class="hs-wrapper">
									<img src="<?php echo e($p->product_photo); ?>" alt=" " class="img-responsive">
								</div> 
								
								<div class="product_content_bg">
									<h5><a href=""><?php echo e($p->name); ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo e($p->price); ?> Taka</span> <i class="item_price"><?php echo e($p->discunt_price); ?> Taka</i></p>
										
										<a href="<?php echo e(action('CartController@addItem',$p->id)); ?>" class="w3ls-cart addtocart">Add to cart</a>
									</div>
								</div>
							</div>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				<?php else: ?>
				
					
			    <div class="alert alert-danger">
			      No Data found.
			    </div>
			    
				<?php endif; ?>
					
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>