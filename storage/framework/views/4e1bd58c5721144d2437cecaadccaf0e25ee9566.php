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
                                <h1 class="page-title"> All Orders</h1>
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
                                            
                                            <?php echo $__env->make('admin.pages.order.search_from', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Products List
                                        <span class="tools pull-right">
                                            <a href="<?php echo e(action('ProductsController@create')); ?>" class="btn btn-sm btn-success" style="color:#fff;">New Orders </a>
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
                                                    <th>Customar Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($p->id); ?></td>
                                                    <td><?php echo e($p->first_name); ?></td>
                                                    <td><?php echo e($p->number); ?></td>
                                                    
                                                    
                                                        <?php echo Form::open(['method' => 'PUT', 'action' => ['AdminOrder@Delivered',$p->id]]); ?>

                                                        
                                                    <td> 
                                                        <?php if($p->isDelivered == 1): ?>
                                                        
                                                        Delivered 
                                                        
                                                        <?php else: ?> Panding   
                                                        
                                                        <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-sm btn-success">
                                                            Delivered
                                                        </button>
                                                        
                                                        <?php echo Form::close(); ?>

                                                        
                                                        <?php endif; ?> 
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo e(action('AdminOrder@Details',$p->id)); ?>" class="btn btn-sm btn-default">Details</a>
                                                        <a href="<?php echo e(action('ProductsController@edit',$p->id)); ?>" class="btn btn-sm btn-success">Edit</a>
                                                        <button type="submit" onclick="return confirm('This product is delete permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                            Delete
                                                        </button>
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