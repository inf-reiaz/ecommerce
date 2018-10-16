@extends('front.layout.app')

@section('title')
Offres
@endsection

@include('front.new_menu')


@section('content')

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Offers</h3>
					</div>
					
				</div>
			</div>

			<div class="col-md-12">
			
				<div class=" active in">
					<div class="agile_ecommerce_tabs">
						@foreach($preordes as $p)
		    			    <div class="col-md-3 product_item text-center">
								<div class="">
									<img src="{{ $p->product_photo }}" alt=" " class="img-responsive">
								</div>
								
								<div class="product_content_bg">
									<h5><a href="{{ action('PublicPagesController@getSingleProduct',$p->id) }}">{{ $p->name }}</a></h5>
									<div class="simpleCart_shelfItem">
										<p><span>{{ $p->price }} Taka</span> <i class="item_price">{{ $p->discunt_price }}Taka</i></p>
										<a href="{{ action('CartController@addItem',$p->id) }}" class="amarfood_btn draw-border">Add to cart</a>
									</div>
								</div>
								
							</div>
						@endforeach
					</div>
				</div>
					
			</div>
		</div>
	</div>

@endsection

