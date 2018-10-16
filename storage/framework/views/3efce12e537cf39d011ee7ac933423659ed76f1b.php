<?php $__env->startSection('title'); ?>
Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">
                    
                    <?php echo $__env->make('front.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>

                <!--start sidebar-->

                <div class="col-md-4">
                    <div class="widget account-details">
                        <h2 class="widget-title">Account</h2>
                        <ul>
                            <li class="<?php echo e(Request::path() == 'users/account-information' ? 'active_left_nav' : ''); ?>" ><a href="<?php echo e(action('PublicPagesController@getProfile')); ?>"> Account Information </a></li>
                            <li class="<?php echo e(Request::path() == 'users/my-account' ? 'active_left_nav' : ''); ?>" ><a href="<?php echo e(action('PublicPagesController@getMyAccount')); ?>">My Account</a></li>                                        
                            <li class="<?php echo e(Request::path() == 'users/change-password' ? 'active_left_nav' : ''); ?>" ><a href="<?php echo e(action('PublicPagesController@getChangePassword')); ?>">Change Password</a></li>
                            <li class="<?php echo e(Request::path() == 'users/order-history' ? 'active_left_nav' : ''); ?>" ><a href="<?php echo e(action('PublicPagesController@getOrderHistory')); ?>">Order History</a></li>
                            <li class="" ><a href="<?php echo e(action('PublicPagesController@logout')); ?>">Logout</a></li>
                            <!--<li><a href="">Returns Requests</a></li>-->
                            <!--<li><a href="">Newsletter</a></li>-->
                        </ul>
                    </div>
                </div>
                
                <!--end sidebar-->
                <!--start main contain of page-->
                <div class="col-md-8">
                    <div class="information-title">Your Account Information</div>
                        <form class="form-horizontal" action="<?php echo e(action('PublicPagesController@updatePassword')); ?>" method="POST">
                                  <?php echo e(csrf_field()); ?>

                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <input type="password" class="form-control" name="oldpass" placeholder="Old Password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <input type="password" class="form-control" name="newpass" placeholder="New Password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <input type="password" class="form-control" name="repeatpass" placeholder="Confirm Password">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <button type="submit" class="btn btn-default button-1 check-ct">Submit</button>
                                    </div>
                                  </div>
                                  
                                </form>	
                </div>
                <!--end main contain of page-->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>