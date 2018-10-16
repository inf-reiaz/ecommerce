<?php $__env->startSection('title'); ?>
Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="panel profile-wrap">
                <header class="panel-heading clearfix">
                    <h3 class="profile-title pull-left"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h3>
                </header>
                <div class="panel-body row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body list-group border-bottom">
                                <li class="list-group-item active"><center><strong>My Profile</strong></center></li>
                                
                                <li class="list-group-item">
                                    <span class="profile-details-heading">
                                        <strong>Name: </strong>
                                    </span>
                                    <span class="profile"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></span>
                                </li>
                                
                                
                                <li class="list-group-item">
                                    <span class="profile-details-heading">
                                        <strong>Email:</strong>
                                    </span>
                                    <span class="profile"><?php echo e(Auth::user()->email); ?></span>
                                </li>
                                
                                <li class="list-group-item">
                                    <center>
                                        <strong>
                                            <a href="<?php echo e(action('PublicPagesController@logout')); ?>" class="btn btn-info btn-sm">Logout</a>
                                        </strong>
                                    </center>
                                </li>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.app_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>