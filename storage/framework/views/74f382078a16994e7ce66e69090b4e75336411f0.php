<?php $__env->startSection('title'); ?>
Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="row">

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
                        </ul>
                    </div>
                </div>
                <!--end sidebar-->
                <!--start main contain of page-->
                <div class="col-md-8">
                    <div class="information-title">Your Account Information</div>
                        
                        <?php echo Form::model($user, [
                            'action' => ['PublicPagesController@putUserAccountEdit',$user->id],
                            'class' => 'form-horizontal',
                            'method' => 'PUT'
                        ]); ?>

                    
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <?php echo Form::text('firstname', null, ['class' => 'form-control']); ?>

                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <?php echo Form::text('contact', null, ['class' => 'form-control']); ?>

                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        
                                      <?php echo Form::select('city_id', App\City::pluck('name', 'id'),null, ['class' => 'form-control mb-10', 'placeholder' => 'Choose your City']); ?>

                                    
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <?php echo Form::textarea('address', null, ['class' => 'form-control', 'rows' => 10]); ?>

                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <button type="submit" class="btn btn-default button-1 check-ct">Update</button>
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