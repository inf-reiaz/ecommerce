@extends('front.layout.app')

@section('title')
@endsection

@include('front.new_menu')

@section('content')

	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="{{ $product->product_photo }}">
							<div class="thumb-image"> <img src="{{ $product->product_photo }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 single-right">
				<h3>{{ $product->name}}</h3>
				
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				
				<div class="description">
					<h5><i>Description</i></h5>
					<p>
						{!! $product->description !!}
					</p>
				</div>
				
				<div class="simpleCart_shelfItem">
					<p><span>{{ $product->price }} Taka</span> <i class="item_price">{{ $product->discunt_price }} Taka</i></p>
					
					<a href="{{ action('CartController@addItem',$product->id) }}" class="amarfood_btn draw-border">Add to cart</a>
					
				</div> 
			</div>
		</div>
	</div> 
	<!---728x90--->
	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Information</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3>{{ $product->name }}</h3>
						<p>
							{!! $product->description !!}
						</p>
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4>(2) Reviews</h4>
						
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="/public/front/images/t1.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="single.html">Mahadi Hassan</a>
									<h5>May 20, 2018.</h5>
									<p>Amar Food is such a responsite marketplace to shop daily grocery products. They are really very care about Freshness and Organic delivery. Am recommending amar foods for daily grocery shopping.</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="additional_info_sub_grids">
							<div class="col-xs-2 additional_info_sub_grid_left">
								<img src="/public/front/images/t2.png" alt=" " class="img-responsive" />
							</div>
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="">Selena Akther</a>
									<h5>May 21, 2018.</h5>
									<p>As a working woman i think Amar food serve me the best service in Dhaka city. Service quality is awesome. Deliver product with in 3 Hours at Dhanmondi. Mostly they keeps their Promise!!</p>
								</div>
								<div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="/public/front/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="review_grids">
							<h5>Add A Review</h5>
							<form action="#" method="post">
								<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" placeholder="Email" required="">
								<input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
								<textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
								<input type="submit" value="Submit">
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
		</div>
	</div>
	<!---728x90--->
	<!-- Related Products -->
	<div class="w3l_related_products">
		<div class="container">
			<div class="spec ">
				<h2 style="font-size: 40px;margin-bottom: 15px;">Related Products</h2>
			</div>
			
			<ul id="flexiselDemo2">
			    @if($related->count() > 0)			
				@foreach($related as $r)
				<li>
    			    <div class="w3l_related_products_grid">
						<div class="">
							<img src="{{ $r->product_photo }}" alt=" " class="img-responsive">
						</div>
						
																	
						<div class="product_content_bg">
							<h5><a href="{{ action('PublicPagesController@getSingleProduct',$r->id) }}">{{ $r->name }}</a></h5>
							<div class="simpleCart_shelfItem">
								<p><span>{{ $r->price }} Taka</span> <i class="item_price">{{ $r->discunt_price }}Taka</i></p>
								<a href="{{ action('CartController@addItem',$r->id) }}" class="amarfood_btn draw-border">Add to cart</a>
							</div>
						</div>
						
					</div>
				</li>
				@endforeach
				@else
				<div class="alert alert-warning">
				  <strong> No data found in this category  </strong>
				</div>
				@endif
			</ul>
			
		</div>
	</div>
	<!-- //Related Products -->
	

@endsection