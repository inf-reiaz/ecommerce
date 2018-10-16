<?php $__env->startSection('title'); ?>
<?php echo e($ctg_name); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3><?php echo e($ctg_name); ?></h3>
					</div>
					
				</div>
			</div>
			
			<div class="row">
		        <div class="col-md-3">
					<ul class="info" id="top-bottom-menu"> 
						<li><a class="<?php echo e(Request::path() == 'category/dry-food' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/dry-food')); ?>">Dry Food</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/vegetable' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/vegetable')); ?>">Vegetable</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/honey' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/honey')); ?>">Honey</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/dairy' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/dairy')); ?>">Dairy</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/ingredients' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/ingredients')); ?>">Ingredients</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/fish-&-meat' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/fish-&-meat')); ?>">Fish & Meat</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/grocery' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/grocery')); ?>">Grocery</a></li>
						<li><a class="<?php echo e(Request::path() == 'category/seasonal-fruits' ? 'tab_active' : ''); ?>" href="<?php echo e(URL::to('/category/seasonal-fruits')); ?>">Seasonal Fruits</a></li>
					</ul>
				</div>
				
			    <div class="col-md-9">
			        
			        <?php if($preordes->count() > 0): ?>
				        <?php $__currentLoopData = $preordes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    			    <div class="col-md-4 product_item text-center">
							<div class="">
								<img src="<?php echo e($p->product_photo); ?>" alt=" " class="img-responsive">
							</div>
							
																		
							<div class="product_content_bg">
								<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$p->id)); ?>"><?php echo e($p->name); ?></a></h5>
								<div class="simpleCart_shelfItem">
									<p><span><?php echo e($p->price); ?> Taka</span> <i class="item_price"><?php echo e($p->discunt_price); ?>Taka</i></p>
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
			    
			</div>

			
			<div class="clearfix"> </div>
		</div>
	</div>
	

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>