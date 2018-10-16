<?php $__env->startSection('title'); ?>
SHOPPING CART
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	
	
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-12">
					<!-- title -->
					<div class="title-box">
						<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
					</div>
				</div>
							
				<table id="cart" class="table table-hover table-condensed">
			    				<thead>
									<tr>
										<th style="width:1%">Serial</th>
										<th style="width:20%">Product Name</th>
										<th style="width:40%">Product Image</th>
										<th style="width:10%">Price</th>
										<th style="width:8%">Quantity</th>
										<th style="width:22%" class="text-center">Subtotal</th>
										<th style="width:10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1;?>
					            	<?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php $myproduct = App\Product::find($item->id);  ?>
									<tr>
					                    
								 <?php echo Form::open(['action' => ['CartController@updateItem',$item->rowId], 'method' => 'POST']); ?>

								 
					                    <td><?php echo e($count++); ?></td>
					                    <td><?php echo e($item->name); ?></td>
					                    <td> <img style="height: 180px;" src="<?php echo e($myproduct->product_photo); ?>" alt=""> </td>
					                    
										<td data-th="Price"><?php echo e($item->price); ?> Taka</td>
										<td data-th="Quantity">
											<input type="number" class="form-control text-center" name="qty" value="<?php echo e($item->qty); ?>">
										</td>
										<td data-th="Subtotal" class="text-center"><?php echo e($item->price*$item->qty); ?> Taka</td>
										<td class="actions" data-th="">
											<button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button>
											<a class="btn btn-danger btn-sm" href="<?php echo e(action('CartController@itemDelete',$item->rowId)); ?>"><i class="fa fa-trash-o"></i></a>								
										</td>
										
									 <?php echo Form::close(); ?>

									</tr>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                
								</tbody>
								<tfoot>
									<tr class="visible-xs">
										<td class="text-center"><strong>Total: <?php echo e(Cart::subtotal()); ?> Taka</strong></td>
									</tr>
									<tr>
										<td><a href="<?php echo e(action('PublicPagesController@getIndex')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
										<td class="hidden-xs text-center"><strong>Total: <?php echo e(Cart::subtotal()); ?> Taka</strong></td>
										<td><a href="<?php echo e(action('CheckOutController@getCheckOut')); ?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
									</tr>
								</tfoot>
							</table>
							
			</div>
		</div>
		
		
	</div>
	

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>