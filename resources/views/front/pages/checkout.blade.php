@extends('front.layout.app')

@section('title')
checkout
@endsection

@section('css')


@endsection
@include('front.new_menu')

@section('content')

	
	<div class="mail">
		<div class="container">
			<div class="">
				<div class="col-md-12 contact-left">
					<h4 class="checkout">CHECKOUT</h4>
						
			     @if (Session::has('success'))
			      <div class="alert alert-success alert-dismissable">
			        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			        {{ Session::get('success') }}
			      </div>
			    @endif
			    
					<?php $user = Auth::user(); ?>
              <form action="{{ action('CheckOutController@postOrders') }}" method="POST">
                 {{ csrf_field() }}
		                 <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
		                 <input type="hidden" value="0" name="isDelivered">
		                 <input type="hidden" value="demo" name="company">
		                 <input type="hidden" value="yes" name="cash_on_delivery">
		                 <input type="hidden" value="yes" name="radios">
		                 <input type="hidden" value="{{Cart::subtotal()}}" name="total">
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Name</label>
	                            {!! Form::text('first_name', $user->firstname, ['class'=>'form-control','placeholder'=>'Name','required']) !!}
	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Email</label>
	                            {!! Form::text('email', $user->email, ['class'=>'form-control','placeholder'=>'Email','required']) !!}
	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>Phone Number</label>
	                            {!! Form::text('number',  $user->contact, ['class'=>'form-control','placeholder'=>'Phone number','required']) !!}
	                        </div>
                        </div>
                        
                        <div class="col-md-6 padding_bottom">
	                        <div class="form-group">
	                            <label>City</label>
	                            {!! Form::text('city', $user->city->name, ['class'=>'form-control','placeholder'=>'city','required']) !!}
	                        </div>
                        </div>
						
						<div class="col-md-6 padding_bottom">
							<div class="form-group">
	                            <label>Shipping Address</label>
	                            <p>
								{!! Form::textarea('address', $user->address, ['class'=>'form-control','placeholder'=>'address......','required']) !!}
								</p>
							</div>
						</div>
						
						<div class="col-md-6 padding_bottom">
							<div class="form-group">
	                            <label>Notes </label>
	                            <p>
								{!! Form::textarea('note', old('address'), ['class'=>'form-control','placeholder'=>'notes ']) !!}
								</p>
							</div>
						</div>
						
						<div class="col-md-12 padding_bottom">
							<div class="input-group">
								<input type="checkbox" id="isChecked" aria-label="Checkbox for following text input"> <span class="margin-right:10px">Another Shipping Address</span> 
							</div>
							
						</div>
				
						<div class="col-md-6 pull-left padding_bottom open_add_box_hide" id="new_shipping_address" >
							<div class="form-group">
	                            <label>Another Shipping Address </label>
	                            <p>
								{!! Form::textarea('other_address', old('other_address'), ['class'=>'form-control','placeholder'=>'Another Shipping Address']) !!}
								</p>
							</div>
						</div>
						
						<div class="clearfix"> </div>
						
						<input type="submit" value="Submit">
						
					</form>
				</div>
			</div>
		</div>
	</div>
	

@endsection

@section('js')
<script>


$(document).ready(function(){

	$( "#isChecked" ).on( "click", function() {
		if($( "#isChecked:checked").length == 1){
	    	$("#new_shipping_address").addClass("open_add_box");
	    	$("#new_shipping_address").removeClass("open_add_box_hide");
		}else{
	    	$("#new_shipping_address").removeClass("open_add_box");
	    	$("#new_shipping_address").addClass("open_add_box_hide");
		}
	});

	
});


</script>
@endsection



