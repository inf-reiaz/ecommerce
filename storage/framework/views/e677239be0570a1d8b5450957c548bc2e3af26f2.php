<?php $__env->startSection('title'); ?>
checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

	
	<div class="mail">
		<div class="container">
			<div class="">
				<div class="col-md-12 contact-left">
					<h4 class="checkout">CHECKOUT</h4>
						
			     <?php if(Session::has('success')): ?>
			      <div class="alert alert-success alert-dismissable">
			        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			        <?php echo e(Session::get('success')); ?>

			      </div>
			    <?php endif; ?>
			    
					<?php $user = Auth::user(); ?>
              <form action="<?php echo e(action('CheckOutController@postOrders')); ?>" method="POST">
                 <?php echo e(csrf_field()); ?>

		                 <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" name="user_id">
		                 <input type="hidden" value="0" name="isDelivered">
		                 <input type="hidden" value="demo" name="company">
		                 <input type="hidden" value="yes" name="cash_on_delivery">
		                 <input type="hidden" value="yes" name="radios">
		                 <input type="hidden" value="<?php echo e(Cart::subtotal()); ?>" name="total">
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Name</label>
	                            <?php echo Form::text('first_name', $user->firstname, ['class'=>'form-control','placeholder'=>'Name','required']); ?>

	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Email</label>
	                            <?php echo Form::text('email', $user->email, ['class'=>'form-control','placeholder'=>'Email','required']); ?>

	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Phone Number</label>
	                            <?php echo Form::text('number',  $user->contact, ['class'=>'form-control','placeholder'=>'Phone number','required']); ?>

	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>City</label>
	                            <?php echo Form::text('city', $user->city->name, ['class'=>'form-control','placeholder'=>'city','required']); ?>

	                        </div>
                        </div>
						
						<div class="col-md-6 padding_bottom">
							<div class="form-group">
	                            <label>Shipping Address</label>
	                            <p>
								<?php echo Form::textarea('address', $user->address, ['class'=>'form-control','placeholder'=>'address......','required']); ?>

								</p>
							</div>
						</div>
						
						<div class="col-md-6 padding_bottom">
							<div class="form-group">
	                            <label>Notes </label>
	                            <p>
								<?php echo Form::textarea('note', old('address'), ['class'=>'form-control','placeholder'=>'notes ']); ?>

								</p>
							</div>
						</div>
						
						<input type="submit" value="Submit">
						
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	

<?php $__env->stopSection(); ?>




<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>