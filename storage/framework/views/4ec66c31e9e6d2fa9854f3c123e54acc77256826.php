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
                                <h1 class="page-title"> All Products</h1>
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
                                            
                                            <?php echo $__env->make('admin.pages.strocks.search_from', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Products List
                                        <span class="tools pull-right">
                                            <a href="<?php echo e(action('ProductsController@create')); ?>" class="btn btn-sm btn-success" style="color:#fff;">Add New Product </a>
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
                                                    <th>Product Name</th>
                                                    <th>Image</th>
                                                    <th>Entry Number </th>
                                                    <th>Stock</th>
                                                    <th>Sale</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($p->quantity < 5): ?> 
                                                <tr style="border: 5px solid red;">
                                                <?php else: ?>
                                                <tr>
                                                <?php endif; ?>
                                                
                                                    <td><?php echo e($p->id); ?></td>
                                                    <td><?php echo e($p->name); ?></td>
                                                    <td> <img src="<?php echo e($p->product_photo); ?>" alt="" style="width: 100px;"> </td>
                                                    <td><?php echo e($p->quantity); ?></td>
                                                    
                                                    <?php 
                                                    $total = $p->quantity;
                                                    $sell = $p->out_item;
                                                    $stock = $total - $sell;
                                                    ?>
                                                    
                                                    <td><?php echo e($stock); ?></td>
                                                    <td><?php echo e($p->out_item); ?></td>
                                                    <td>
                                                    
                                                        <a href="" class="btn btn-sm btn-default">History</a>
                                                        <a href="<?php echo e(action('StockManagement@addProductNumber',$p->id)); ?>" class="btn btn-sm btn-success">Add Stock</a>
                                                        
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