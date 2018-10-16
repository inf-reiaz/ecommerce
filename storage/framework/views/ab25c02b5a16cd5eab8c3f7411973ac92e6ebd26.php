<?php $__env->startSection('title'); ?>
SHOPPING CART
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
	.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
}
@media  screen and (max-width: 600px) {
    table#cart tbody td .form-control{
		width:20%;
		display: inline !important;
	}
	.actions .btn{
		width:36%;
		margin:1.5em 0;
	}
	
	.actions .btn-info{
		float:left;
	}
	.actions .btn-danger{
		float:right;
	}
	
	table#cart thead { display: none; }
	table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
	table#cart tbody tr td:first-child { background: #333; color: #fff; }
	table#cart tbody td:before {
		content: attr(data-th); font-weight: bold;
		display: inline-block; width: 8rem;
	}
	
	
	
	table#cart tfoot td{display:block; }
	table#cart tfoot td .btn{display:block;}
	
}
</style>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<link rel="stylesheet" href="/public/front/menu/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="/public/front/menu/responsive.css">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

	<!--Meanmenu-->
	<script src="/public/front/menu/jquery.meanmenu.min.js"></script>
	<!--Instafeed-->
	
	<!--Nice Select-->
	<script src="/public/front/menu/jquery.nice-select.min.js"></script>
	<!--ScrollUp-->
	
	<!--Plugins-->
	<script src="/public/front/menu/plugins.js"></script>
	<!--Main Js-->
	<script src="/public/front/menu/main.js"></script>

	<script src="/public/front/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab1').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	
	
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="/public/front/js/jquery.flexisel.js"></script>

				<!--quantity-->
						<script>
						$('.value-plus1').on('click', function(){
							var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
							divUpd.text(newVal);
						});

						$('.value-minus1').on('click', function(){
							var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
							if(newVal>=1) divUpd.text(newVal);
						});
						</script>
					<!--quantity-->
					
					
					
				<!-- flexslider -->
					<script defer src="/public/front/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="/public/front/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="/public/front/js/imagezoom.js"></script>
				<!-- //zooming-effect -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

	
	
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-12">
					<!-- title -->
					<div class="title-box">
						<h1 class="text-center text-uppercase title-under">SHOPPING CART</h1>
					</div>
				</div>
							
				<table id="cart" class="table table-hover table-condensed">
			    				<thead>
									<tr>
										<th style="width:1%">Serial</th>
										<th style="width:20%">Product Name</th>
										<th style="width:40%">Product Image</th>
										<th style="width:10%">Price</th>
										<th style="width:8%">Quantity</th>
										<th style="width:22%" class="text-center">Subtotal</th>
										<th style="width:10%"></th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 1;?>
					            	<?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php $myproduct = App\Product::find($item->id);  ?>
									<tr>
					                    
								 <?php echo Form::open(['action' => ['CartController@updateItem',$item->rowId], 'method' => 'POST']); ?>

								 
					                    <td><?php echo e($count++); ?></td>
					                    <td><?php echo e($item->name); ?></td>
					                    <td> <img style="height: 180px;" src="<?php echo e($myproduct->product_photo); ?>" alt=""> </td>
					                    
										<td data-th="Price"><?php echo e($item->price); ?> Taka</td>
										<td data-th="Quantity">
											<input type="number" class="form-control text-center" name="qty" value="<?php echo e($item->qty); ?>">
										</td>
										<td data-th="Subtotal" class="text-center"><?php echo e($item->price*$item->qty); ?> Taka</td>
										<td class="actions" data-th="">
											<button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button>
											<a class="btn btn-danger btn-sm" href="<?php echo e(action('CartController@itemDelete',$item->rowId)); ?>"><i class="fa fa-trash-o"></i></a>								
										</td>
										
									 <?php echo Form::close(); ?>

									</tr>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                
								</tbody>
								<tfoot>
									<tr class="visible-xs">
										<td class="text-center"><strong>Total: <?php echo e(Cart::subtotal()); ?> Taka</strong></td>
									</tr>
									<tr>
										<td><a href="<?php echo e(action('PublicPagesController@getIndex')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
										<td class="hidden-xs text-center"><strong>Total: <?php echo e(Cart::subtotal()); ?> Taka</strong></td>
										<td><a href="<?php echo e(action('CheckOutController@getCheckOut')); ?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
									</tr>
								</tfoot>
							</table>
							
			</div>
		</div>
		
		
	</div>
	

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>