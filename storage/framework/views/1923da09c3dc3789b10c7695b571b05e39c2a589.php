
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/bower_components/simple-line-icons/css/simple-line-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/bower_components/weather-icons/css/weather-icons.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/bower_components/themify-icons/css/themify-icons.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('/public/admin/dist/css/main.css')); ?>">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <script src="<?php echo e(asset('/public/admin/assets/js/modernizr-custom.js')); ?>"></script>
        
        
    </head>
    <body>

        <div class="sign-in-wrapper">
            <div class="sign-container">
                <div class="text-center">
                    <h2 class="logo"><img src="<?php echo e(asset('/public/admin/imgs/logo.png')); ?>" width="130px" alt=""/></h2>
                    <h4> Admin Login</h4>
                </div>
                
                <div class="text-center">
                    <?php echo $__env->make('admin.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
                
                    <?php echo Form::open(['url'=>action('AccessController@postLogin'), 'method'=>'post']); ?>


                    <div class="form-group">
                        <?php echo Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email','required']); ?>

                    </div>
                    
                    <div class="form-group">
                        <?php echo Form::password('password', ['class'=>'form-control','placeholder' => 'Password','required']); ?>

                    </div>
                    
                    
                    
                    <div class="form-group text-center">
                        <label class="i-checks">
                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <i></i>
                          Remember your Password
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info btn-block">login</button>
                    <a href="<?php echo e(action('AccessController@forgotPassword')); ?>"><p class="text-muted text-center help-block"><small>Forget Your Password ?</small></p></a>
                    <a class="btn btn-md btn-default btn-block" href="<?php echo e(route('signup')); ?>">Register</a>
                <?php echo Form::close(); ?>

                <div class="text-center copyright-txt">
                    <small>Copyright © 2017</small>
                </div>
            </div>
        </div>
        
        <script src="<?php echo e(asset('/public/admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/autosize/dist/autosize.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/dist/js/main.js')); ?>"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    </body>
</html>
