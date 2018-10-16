<?php $__env->startSection('title'); ?>
Index
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

	<?php echo $__env->make('front.partials.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!--slider-->
	<!-- banner-bottom -->
	<?php echo $__env->make('front.partials.banner-bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- banner-bottom --> 
	
	
	
	<!-- special-deals -->
	<?php echo $__env->make('front.partials.special-deals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- special-deals -->
	
	

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>