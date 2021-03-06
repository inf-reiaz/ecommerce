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
                                <h1 class="page-title"> All Promotion Sliders</h1>
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
                                                        <input class="form-control" placeholder="Product Name" type="text">
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
                                                        <button type="submit" class="btn btn-info btn-block">Find</button>
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
                                        Products List
                                        <span class="tools pull-right">
                                            <a href="<?php echo e(action('SlidersController@create')); ?>" class="btn btn-sm btn-success" style="color:#fff;">Add New Promotion Slider </a>
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
                                                    <th>Image</th>
                                                    <th>Link</th>
                                                    <th>Slider Position</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($s->id); ?></td>
                                                    <td> <img src="<?php echo e($s->image); ?>" alt="" style="width: 200px;"> </td>
                                                    
                                                    <td> <a href="<?php echo e($s->link); ?>">Link</a></td>
                                                    
                                                    <td> <?php if($s->slider_position == 1): ?> First SLider <?php else: ?> Secend SLider <?php endif; ?></td>
                                                    
                                                    <td>
                                                        
                                                        <?php echo Form::open(['method' => 'DELETE', 'action' => ['SlidersController@destroy',$s->id]]); ?>

                                                            <a href="<?php echo e(action('SlidersController@edit',$s->id)); ?>" class="btn btn-sm btn-success">Edit</a>
                                                            <button type="submit" onclick="return confirm('This product is delete permanently. Are you sure?')"  class="btn btn-sm btn-danger">
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