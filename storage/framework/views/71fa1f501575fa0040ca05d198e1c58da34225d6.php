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
                                <h1 class="page-title"> Products</h1>
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
                                            <?php echo $__env->make('admin.pages.products.search_from', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Products List
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
                                                    <th>Product Name</th>
                                                    <th>Image</th>
                                                    <th>Category name</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if($products->count() > 0): ?>
                                                    
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td width="100"><?php echo e($p->id); ?></td>
                                                    <td width="300"><?php echo e($p->name); ?></td>
                                                    <td width="200"> <img src="<?php echo e($p->product_photo); ?>" alt="" style="width: 200px;"> </td>
                                                    <td width="200"><?php $__currentLoopData = $p->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ctg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <sapn class="btn btn-sm btn-default"><?php echo e($ctg->name); ?></sapn>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                                                    <td width="200">
                                                        
                                                        <?php echo Form::open(['method' => 'DELETE', 'action' => ['ProductsController@destroy',$p->id]]); ?>

                                                            <a href="<?php echo e(action('ProductsController@show',$p->id)); ?>" class="btn btn-sm btn-default">View</a>
                                                            <a href="<?php echo e(action('ProductsController@edit',$p->id)); ?>" class="btn btn-sm btn-success">Edit</a>
                                                            <button type="submit" onclick="return confirm('This product is delete permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                                Delete
                                                            </button>
                                                        <?php echo Form::close(); ?>

                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php else: ?>
                                                    
                                                    <tr>
                                                        
                                                        <td>
                                                            
                                                            <div class="alert alert-danger">
                                                             No data found 
                                                            </div>
                                                        </td>
                                                    
                                                    </tr>
                                                    
                                                    <?php endif; ?>
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