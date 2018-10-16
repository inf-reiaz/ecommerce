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
                            <li class="<?php echo e(Request::path() == 'users/account-information' ? 'active_left_nav' : ''); ?>" ><a href="<?php echo e(action('PublicPagesController@getUserAccount')); ?>"> Account Information </a></li>
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
                    <?php $user = Auth::user();?>
                    
                     <table class="table my_table">
                        <tbody>
                          
                          <tr>
                            <td><strong>Name :  </strong> <?php echo e($user->firstname); ?> </td>
                          </tr>
                          <tr>
                            <td> <strong>Email :  </strong> <?php echo e($user->email); ?> </td>
                          </tr>
                          <tr>
                            <td> <strong>Phone Number :  </strong> <?php echo e($user->contact); ?></td>
                          </tr>
                          <tr>
                            <td> <strong>Address :  </strong> <?php echo e($user->address); ?></td>
                          </tr>
                          
                        </tbody>
                      </table>
                    
                </div>
                <!--end main contain of page-->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>