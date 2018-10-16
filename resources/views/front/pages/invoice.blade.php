@extends('front.layout.app')

@section('title')
Invoice
@endsection

@section('css')
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
@endsection

@section('content')


<div class="container">

    <!--<div class="row">-->
    <!--    <div class="col-xs-12">-->
    <!--        <div class="alert alert-warning text-center">-->
    <!--		  <strong> Your order is successfully placed. Any kind of information you need please contact to amarfood support  +880 1761429381 addressing your order number. </strong>-->
    <!--		</div>-->
    <!--    </div>-->
    <!--</div>-->

    <div  id="print_invoice">
        
        <div class="row">
            <div class="col-xs-12">
        		<div class="invoice-title">
        			<h2>Order Summary</h2>
        			<h3 class="pull-right">Order # {{ $order->id }}</h3>
        		</div>
        		<hr>
        		<div class="row">
        			<div class="col-xs-6">
        				<address>
        				<?php  $user = Auth::user();?>
            			<strong>Shipped To:</strong><br>
            			@if($order->other_address != '#')
        					{{ $order->other_address }}
        				@else
        				    {{ $order->address }}
        				@endif
        				</address>
        			</div>
        			<div class="col-xs-6 text-right">
        				<address>
        					<strong>Order Date:</strong><br>
        					{{ date('F d, Y' ,strtotime($order->created_at)) }}
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
        				<div class="information-title">Order Summary</div>
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
        					        
        							@foreach($my_items as $item)
        							<tr>
        								<td>{{ $item->product_name }} </td>
        								<td class="text-center">{{ $item->product_price }} BDT</td>
        								<td class="text-center">{{ $item->product_qty }}</td>
        								<td class="text-right">{{ $item->total_price }} Taka</td>
        							</tr>
        							@endforeach
        							 
        							@if($family > 1000)
        							<tr>
        								<td class="thick-line"></td>
        								<td class="thick-line"></td>
        								<td class="thick-line text-center">Family Combos Discount</td>
        								
        								<td class="thick-line text-right"><strong> - {{ $family*10/100 }} Taka </strong></td>
        							</tr>
        							@endif
        							 
        							
        							<tr>
        								<td class="no-line"></td>
        								<td class="no-line"></td>
        								<td class="no-line text-center"><strong>Shipping</strong></td>
        								<td class="no-line text-right">0 BDT </td>
        							</tr>
        							
        							<tr>
        								<td class="no-line"></td>
        								<td class="no-line"></td>
        								<td class="no-line text-center"><strong>Total</strong></td>
        								<td class="no-line text-right">{{ $price }} BDT</td>
        							</tr>
        							
        						</tbody>
        					</table>
        				</div>
        			</div>
        					
				    <a  href="{{ action('CheckOutController@getOrderComplete') }}" class="btn btn-info">Order Completed</a>
				    
        		</div>
        	</div>
        </div>
            
    </div>
    
</div>

@endsection
