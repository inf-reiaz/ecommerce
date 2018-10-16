<?php $__env->startSection('css'); ?>
<style>
    .text-center {
        max-width: 500px;
        display: block;
        margin: 10px auto;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All User</h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class=" row order-srch-form" role="form">
                                                    <div class="form-group col-md-3">
                                                        <label class="sr-only">User Name</label>
                                                        <input class="form-control" placeholder="User Name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <div class='input-group date' id='datetimepicker1'>
                                                            <?php echo Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d']); ?>

                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <div class='input-group date' id='datetimepicker2'>
                                                            <?php echo Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d']); ?>

                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-info btn-block">Find User</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        User List
                                        <span class="tools pull-right">
                                            <a href="" class="btn btn-sm btn-success" style="color:#fff;">Create User </a>
                                            <a class="close-box fa fa-times"></a>
                                        </span>
                                    </header>
                                    
                                    
                                    <div class="text-center">
                                        <?php echo $__env->make('admin.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                    
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($u->id); ?></td>
                                                    <td><?php echo e($u->email); ?></td>
                                                    <td>
                                                        <span class="tag label label-info"><?php if($u->roles): ?><?php echo e($u->roles->name); ?> <?php endif; ?></span>
                                                    </td>
                                                    <td>
                                                        <?php if($u->active == 1): ?>
                                                            <a href="<?php echo e(route('blockusers',$u->id)); ?>"><span class="label label-info label-success">Active</span></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo e(route('blockusers',$u->id)); ?>"><span class="label label-info label-warning">Pending</span></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::open(['method' => 'DELETE', 'route' => ['dashboard',1]]); ?>

                                                            <a href="<?php echo e(action('MyProfile@getProfile',$u->id)); ?>" class="btn btn-sm btn-default">View</a>
                                                            <a href="" class="btn btn-sm btn-success">Edit</a>
                                                            <button type="submit" onclick="return confirm('You are about to delete a post permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                                Delete
                                                            </button>
                                                        <?php echo Form::close(); ?>

                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>