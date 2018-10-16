@extends('front.layout.app')

@section('title')
SHOPPING CART
@endsection

@section('content')

	
	
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
					            	@foreach($cartItems as $item)
									<?php $myproduct = App\Product::find($item->id);  ?>
									<tr>
					                    
								 {!! Form::open(['action' => ['CartController@updateItem',$item->rowId], 'method' => 'POST']) !!}
								 
					                    <td>{{ $count++ }}</td>
					                    <td>{{ $item->name }}</td>
					                    <td> <img style="height: 180px;" src="{{ $myproduct->product_photo }}" alt=""> </td>
					                    
										<td data-th="Price">{{ $item->price }} Taka</td>
										<td data-th="Quantity">
											<input type="number" class="form-control text-center" name="qty" value="{{ $item->qty }}">
										</td>
										<td data-th="Subtotal" class="text-center">{{ $item->price*$item->qty }} Taka</td>
										<td class="actions" data-th="">
											<button class="btn btn-info btn-sm" type="submit"><i class="fa fa-refresh"></i></button>
											<a class="btn btn-danger btn-sm" href="{{ action('CartController@itemDelete',$item->rowId) }}"><i class="fa fa-trash-o"></i></a>								
										</td>
										
									 {!! Form::close() !!}
									</tr>
					                @endforeach
					                
								</tbody>
								<tfoot>
									<tr class="visible-xs">
										<td class="text-center"><strong>Total: {{Cart::subtotal()}} Taka</strong></td>
									</tr>
									<tr>
										<td><a href="{{ action('PublicPagesController@getIndex') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
										<td class="hidden-xs text-center"><strong>Total: {{Cart::subtotal()}} Taka</strong></td>
										<td><a href="{{ action('CheckOutController@getCheckOut') }}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
									</tr>
								</tfoot>
							</table>
							
			</div>
		</div>
		
		
	</div>
	

@endsection

