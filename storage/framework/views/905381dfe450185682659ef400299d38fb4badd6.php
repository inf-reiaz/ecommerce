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
                                        <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <strong>Order Summary</strong>
                                            </div>
                                            <div class="card-block m-t-35">
                                                <div class="table-responsive">
                                            
                                                                                        
                                                    <table class="table table-sm">
                                                        <thead>
                                                        <tr>
                                                            <td>
                                                                <strong>Customar  Name</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Address</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Phone Number</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Email</strong>
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                    <td><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></td>
                                                                    <td><?php echo e($order->city); ?></td>
                                                                    <td><?php echo e($order->number); ?></td>
                                                                    <td><?php echo e($order->email); ?></td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <strong>Item Name</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Price</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Item Quantity</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Total</strong>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>   
                                                        
                                                            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td><?php echo e($items->name); ?></td>
                                                                <td><?php echo e($items->discunt_price); ?> Taka</td>
                                                                <td><?php echo e($items->pivot->qty); ?></td>
                                                                
                                                                <?php 
                                                                    $price = $items->discunt_price;
                                                                    $price_qty = $items->pivot->qty;
                                                                    $totlal_price = $price * $price_qty;
                                                                ?>
                                                                
                                                                <td> <?php echo e($items->discunt_price); ?> * <?php echo e($items->pivot->qty); ?> = <?php echo e($totlal_price); ?></td>
                                                                
                                                            </tr>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <tr>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow">
                                                                    <strong>Sub Total &nbsp;</strong>
                                                                </td>
                                                                <td class="highrow">
                                                                    <strong><?php echo e($totlal_price); ?> Taka</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow">
                                                                    <strong>Total &nbsp;</strong>
                                                                </td>
                                                                <td class="highrow">
                                                                    <strong><?php echo e($totlal_price); ?> Taka</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                        
                                                    <span class="pull-sm-right">
                                                        <a style="color:#fff;" class="btn button-alignment btn-info m-t-15" data-toggle="button" onclick="javascript:window.print();">
                                                            Print
                                                        </a>
                                                        <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                                            Cancel
                                                        </button>
                                                    </span>
                                                    
                                                                                       
                                            </div>
                                            </div>
                                        </div>
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