

     <?php if(Session::has('success')): ?>
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success: </strong> <?php echo e(Session::get('success')); ?>

      </div>
    <?php endif; ?>
    
    <?php if(count($errors) > 0): ?>
    
     <div id="error_c" class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Errors:</strong>
            <ol>
        		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        			<li><?php echo e($error); ?></li>
        		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    		</ol>
        
      </div>
      
    
    <?php endif; ?>
   