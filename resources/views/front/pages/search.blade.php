@extends('front.layout.app')

@section('title')
preorder
@endsection

@include('front.new_menu')


@section('content')

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Search</h3>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
				
				
				@if($products)
				
				@foreach($products as $p)
							<div class="col-md-3 agile_ecommerce_tab_left ram">
								<div class="hs-wrapper">
									<img src="{{ $p->product_photo }}" alt=" " class="img-responsive">
								</div> 
								
								<div class="product_content_bg">
									<h5><a href="">{{ $p->name }}</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>{{ $p->price }} Taka</span> <i class="item_price">{{ $p->discunt_price }} Taka</i></p>
										
										<a href="{{ action('CartController@addItem',$p->id) }}" class="w3ls-cart addtocart">Add to cart</a>
									</div>
								</div>
							</div>
				
				@endforeach
				
				@else
				
					
			    <div class="alert alert-danger">
			      No Data found.
			    </div>
			    
				@endif
					
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

@endsection


@section('js')

@endsection

