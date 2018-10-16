<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $__env->make('front.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head> 
<body class="top-body">

	<!-- navigation -->
	<?php echo $__env->make('front.partials.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('front.navigation.navs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- navigation -->
	<!--slider-->
	<?php echo $__env->yieldContent('content'); ?>
	

	
	<?php echo $__env->make('front.footer.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	
	<?php echo $__env->make('front.partials.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		


</body>

</html>