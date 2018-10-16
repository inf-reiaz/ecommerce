@extends('front.layout.app')

@section('title')
Products
@endsection
@include('front.new_menu')

@section('content')

	<div class="banner-bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Products</h3>
					</div>
					
				</div>
			</div>
			
			<div class="row">
		        <div class="col-md-3">
					
					<ul class="info" id="top-bottom-menu"> 
						<li><a class="{{ Request::path() == 'category/offers' ? 'tab_active' : '' }}" href="{{ URL::to('/category/offers') }}">Seasonal Offers</a></li>
						<li><a class="{{ Request::path() == 'category/grocery' ? 'tab_active' : '' }}" href="{{ URL::to('/category/grocery') }}">Groceries</a></li>
						<li><a class="{{ Request::path() == 'category/fish-&-meat' ? 'tab_active' : '' }}" href="{{ URL::to('/category/fish-&-meat') }}">Fish & Meat</a></li>
						<li><a class="{{ Request::path() == 'category/ingredients' ? 'tab_active' : '' }}" href="{{ URL::to('/category/ingredients') }}">Ingredients</a></li>
						<li><a class="{{ Request::path() == 'category/dairy' ? 'tab_active' : '' }}" href="{{ URL::to('/category/dairy') }}">Dairy</a></li>
						<li><a class="{{ Request::path() == 'category/honey' ? 'tab_active' : '' }}" href="{{ URL::to('/category/honey') }}">Honey</a></li>
						<li><a class="{{ Request::path() == 'category/vegetable' ? 'tab_active' : '' }}" href="{{ URL::to('/category/vegetable') }}">Vegetables </a></li>
						<li><a class="{{ Request::path() == 'category/dry-food' ? 'tab_active' : '' }}" href="{{ URL::to('/category/dry-food') }}">Dry Foods </a></li>
					</ul>
					
				</div>
				
			    <div class="col-md-9">
			        @foreach($products as $p)
    			    <div class="col-md-4 product_item text-center">
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
	

@endsection

