<?php $__env->startSection('title'); ?>
Thanks
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.new_menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="orw">
		
		<div class="alert alert-warning text-center" style="font-size: 20px;">
		  <strong> Your Order Is Completed</strong>
		</div>

	</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>