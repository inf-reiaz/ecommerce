<?php $__env->startSection('title'); ?>
Invoice
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>


    <script>
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container">

    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-warning text-center">
    		  <strong> Your order is successfully placed. Any kind of information you need please contact to amarfood support  +880 1761429381 addressing your order number. </strong>
    		</div>
        </div>
    </div>

    <div  id="print_invoice">
        
        <div class="row">
            <div class="col-xs-12">
        		<div class="invoice-title">
        			<h2>Invoice</h2>
        			<h3 class="pull-right">Order # <?php echo e($order_id); ?></h3>
        		</div>
        		<hr>
        		<div class="row">
        			<div class="col-xs-6">
        				<address>
        				    <?php  $address = Auth::user()->address;?>
            			<strong>Shipped To:</strong><br>
        					<?php echo e($address); ?>

        				</address>
        			</div>
        			<div class="col-xs-6 text-right">
        				<address>
        					<strong>Order Date:</strong><br>
        					<?php $order = App\Order::find($order_id); ?>
        					<?php echo e(date('F d, Y' ,strtotime($order->created_at))); ?>

        					<br><br>
        					
        				</address>
        			    
        			</div>
        		</div>
        	</div>
        </div>
        
        <div class="row">
        	<div class="col-md-12">
        		<div class="panel panel-default">
        			<div class="panel-heading">
        				<h3 class="panel-title"><strong>Order summary</strong></h3>
        			</div>
        			<div class="panel-body">
        				<div class="table-responsive">
        					<table class="table table-condensed">
        						<thead>
                                    <tr>
            							<td><strong>Item</strong></td>
            							<td class="text-center"><strong>Price</strong></td>
            							<td class="text-center"><strong>Quantity</strong></td>
            							<td class="text-right"><strong>Totals</strong></td>
                                    </tr>
        						</thead>
        						<tbody>
        							
        					        <?php 
        					        
        					            $cartItems = App\MyCart::where('order_id',$order_id)->get(); 
        					            
        					            $total = App\MyCart::where('order_id',$order_id)->sum('total_price'); 
        					            
        					            $family = App\MyCart::where('order_id',$order_id)->where('is_family','family')->sum('total_price'); 

        					        ?>
        					        
        							<?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        							<tr>
        							    
        								<td><?php echo e($item->product_name); ?> </td>
        								<td class="text-center"><?php echo e($item->price); ?> Taka</td>
        								<td class="text-center"><?php echo e($item->quantity); ?></td>
        								<td class="text-right"><?php echo e($item->total_price); ?> Taka</td>
        							</tr>
        							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        							 
        							<?php if($family > 1000): ?>
        							<tr>
        								<td class="thick-line"></td>
        								<td class="thick-line"></td>
        								<td class="thick-line text-center">Family Combos Discount</td>
        								
        								<td class="thick-line text-right"><strong> - <?php echo e($family*10/100); ?> Taka </strong></td>
        							</tr>
        							<?php endif; ?>
        							
        							<tr>
        								<td class="no-line"></td>
        								<td class="no-line"></td>
        								<td class="no-line text-center"><strong>Shipping</strong></td>
        								<td class="no-line text-right">0 Taka</td>
        							</tr>
        							
        							<tr>
        								<td class="no-line"></td>
        								<td class="no-line"></td>
        								<td class="no-line text-center"><strong>Total</strong></td>
        								<?php if($family > 1000): ?>
        								
        								<td class="no-line text-right"><?php echo e($total - $family*10/100); ?> Taka</td>
        								
        								<?php else: ?>
        								
        								<td class="no-line text-right"><?php echo e($total); ?> Taka</td>
        								
        								<?php endif; ?>
        							</tr>
        							
        						</tbody>
        					</table>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
            
    </div>
    
    <div class="row">
        <div class="col-md-12">
			<button class="check-ct" onclick="javascript:printDiv('print_invoice')">Print</button>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>