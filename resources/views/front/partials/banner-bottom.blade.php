 

	<div id="amamar-product">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="spec ">
						<h3>Our Products</h3>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="product_tab" role="tabpanel" data-example-id="togglable-tabs">
						
						<ul id="myTab" class="nav nav-tabs tab_dispaly_pc" role="tablist">
							
							<li role="presentation">
								<a href="#SEASONALOFFERS" 	role="tab" id="SEASONALOFFERS-tab"	class="active show" aria-selected="true" 	data-toggle="tab" aria-controls="SEASONALOFFERS">SEASONAL OFFERS</a>
							</li>
							
							<li role="presentation">
								<a href="#Grocery"	role="tab" id="Grocery-tab"		data-toggle="tab" aria-controls="Grocery">Grocery</a>
							</li>
							
							<li role="presentation">
								<a href="#Fish" 	role="tab" id="Fish-tab"		data-toggle="tab" aria-controls="Fish">Fish & Meat</a>
							</li>
							
							<li role="presentation">
								<a href="#Ingredients"	role="tab" id="Ingredients-tab"		data-toggle="tab" aria-controls="Ingredients">Ingredients</a>
							</li>
							
							<li role="presentation">
								<a href="#Dairy"	role="tab" id="Dairy-tab"		data-toggle="tab" aria-controls="Dairy">Dairy</a>
							</li>
							
							<li role="presentation">
								<a href="#Honey"	role="tab" id="Honey-tab"		data-toggle="tab" aria-controls="Honey">Honey</a>
							</li>
							
							<li role="presentation">
								<a href="#Vegetable"	role="tab" id="Vegetable-tab"		data-toggle="tab" aria-controls="Vegetable">Vegetable </a>
							</li>
							
							<li role="presentation">
								<a href="#DryFood"	role="tab" id="DryFood-tab"		data-toggle="tab" aria-controls="DryFood">Dry Food </a>
							</li>
							
							
						</ul>
						
						
						<div class="owl-carousel owl-theme nav nav-tabs tab_dispaly_mobile"  role="tablist">
                            
                            <div role="presentation" class="item owl_item_active">
								<a href="#SEASONALOFFERS" 	role="tab" id="SEASONALOFFERS-tab"	class="active show" aria-selected="true" 	data-toggle="tab" aria-controls="SEASONALOFFERS">SEASONAL OFFERS</a>
							</div>
							
                            <div role="presentation" class="item">
                                <a href="#DryFood"	role="tab" id="DryFood-tab"		data-toggle="tab" aria-controls="DryFood">Dry Food </a>
                            </div>
                            <div role="presentation" class="item">
								<a href="#Vegetable"	role="tab" id="Vegetable-tab"		data-toggle="tab" aria-controls="Vegetable">Vegetable </a>
                                
                            </div>
                            <div role="presentation" class="item">
								<a href="#Honey"	role="tab" id="Honey-tab"		data-toggle="tab" aria-controls="Honey">Honey</a>
							</div>
                            <div role="presentation" class="item">
								<a href="#Dairy"	role="tab" id="Dairy-tab"		data-toggle="tab" aria-controls="Dairy">Dairy</a>
							</div>
                            <div role="presentation" class="item">
								<a href="#Ingredients"	role="tab" id="Ingredients-tab"		data-toggle="tab" aria-controls="Ingredients">Ingredients</a>
                            </div>
                            <div role="presentation" class="item">
								<a href="#Fish" 	role="tab" id="Fish-tab"		data-toggle="tab" aria-controls="Fish">Fish & Meat</a>
							</div>
                            <div role="presentation" class="item">
								<a href="#Grocery"	role="tab" id="Grocery-tab"		data-toggle="tab" aria-controls="Grocery">Grocery</a>
							</div>
                        </div>
						
					</div> 
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
						
						<div id="myTabContent" class="tab-content">
							
							<div role="tabpanel" class="tab-pane" id="SEASONALOFFERS" aria-labelledby="SEASONALOFFERS-tab">
								<div class="agile_ecommerce_tabs">
									
									@if($myoffers->count() > 0)
										@foreach($myoffers as $r)
						    			    <div class="col-sm-3 col-xs-6 product_item text-center amarfoods_box">
												<div class="">
													<img src="{{ $r->product_photo }}" alt=" " class="img-responsive">
												</div>
												
												<div class="product_content_bg">
														
													<h5><a href="{{ action('PublicPagesController@getSingleProduct',$r->id) }}">{{ $r->name }}</a></h5>
													<div class="simpleCart_shelfItem">
														<p><span>{{ $r->price }} Taka</span> <i class="item_price">{{ $r->discunt_price }}Taka R</i></p>
														<a href="{{ action('CartController@addItem',$r->id) }}" class="amarfood_btn draw-border">Add to cart</a>
													</div>
													
												</div>
											</div>
										@endforeach
									@else
									<div class="col-sm-3 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Grocery" aria-labelledby="Grocery-tab">
								<div class="agile_ecommerce_tabs">
								
								@if($groceryes->count() > 0)
									@foreach($groceryes as $grocery)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $grocery->product_photo }}" alt=" " class="img-responsive">
											</div>
												
											<div class="product_content_bg">
													
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$grocery->id) }}">{{ $grocery->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $grocery->price }} Taka</span> <i class="item_price">{{ $grocery->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$grocery->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
												
											</div>
										</div>
									@endforeach
								@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
								@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							
							<div role="tabpanel" class="tab-pane" id="Fish" aria-labelledby="Fish-tab">
								<div class="agile_ecommerce_tabs">
									@if($fishes->count() > 0)
										@foreach($fishes as $fish)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $fish->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$fish->id) }}">{{ $fish->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $fish->price }} Taka</span> <i class="item_price">{{ $fish->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$fish->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
						
							<div role="tabpanel" class="tab-pane" id="Ingredients" aria-labelledby="Ingredients-tab">
								<div class="agile_ecommerce_tabs">
									
									@if($ingredients->count() > 0)
										@foreach($ingredients as $ingredient)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $ingredient->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$ingredient->id) }}">{{ $ingredient->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $ingredient->price }} Taka</span> <i class="item_price">{{ $ingredient->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$ingredient->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Dairy" aria-labelledby="Dairy-tab">
								<div class="agile_ecommerce_tabs">
									@if($dairys->count() > 0)
										@foreach($dairys as $dairy)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $dairy->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$ingredient->id) }}">{{ $ingredient->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $ingredient->price }} Taka</span> <i class="item_price">{{ $ingredient->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$ingredient->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Honey" aria-labelledby="Honey-tab">
								<div class="agile_ecommerce_tabs">
									@if($honeys->count() > 0)
										@foreach($honeys as $honey)
										
					    			    <div class="col-sm-3 col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $honey->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$honey->id) }}">{{ $honey->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $honey->price }} Taka</span> <i class="item_price">{{ $honey->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$honey->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Vegetable" aria-labelledby="Vegetable-tab">
								<div class="agile_ecommerce_tabs">
									@if($vegetables->count() > 0)
										@foreach($vegetables as $v)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $v->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$v->id) }}">{{ $v->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $v->price }} Taka</span> <i class="item_price">{{ $v->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$v->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane active in" id="DryFood" aria-labelledby="DryFood-tab">
								<div class="agile_ecommerce_tabs">
									@if($dry_foods->count() > 0)
										@foreach($dry_foods as $dry_food)
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="{{ $dry_food->product_photo }}" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="{{ action('PublicPagesController@getSingleProduct',$dry_food->id) }}">{{ $dry_food->name }}</a></h5>
												<div class="simpleCart_shelfItem">
													<p><span>{{ $dry_food->price }} Taka</span> <i class="item_price">{{ $dry_food->discunt_price }}Taka</i></p>
													<a href="{{ action('CartController@addItem',$dry_food->id) }}" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										@endforeach
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Seasonal" aria-labelledby="Seasonal-tab">
								<div class="agile_ecommerce_tabs">
									@if($s_sruits->count() > 0)
										@foreach($s_sruits as $seasonal)
									<div class="col-sm-3  col-xs-6 agile_ecommerce_tab_left amarfoods_box">
										
										<div class="hs-wrapper">
											<img src="{{ $seasonal->product_photo }}" alt=" " class="img-responsive" />
										</div>
																					
										<div class="product_content_bg">
											
											<h5><a href="{{ action('PublicPagesController@getSingleProduct',$seasonal->id) }}">{{ $seasonal->name }}</a></h5>
											<div class="simpleCart_shelfItem">
												<p><span>{{ $seasonal->price }} Taka</span> <i class="item_price">{{ $seasonal->discunt_price }}Taka</i></p>
												<a href="{{ action('CartController@addItem',$seasonal->id) }}" class="amarfood_btn draw-border">Add to cart</a>
											</div>
										</div>

									</div>
									@endforeach
									
									@else
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									@endif
									
								</div>
							</div>
							
						</div>
					
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	

<a href="{{ URL::to('/products') }}" class="amarfood_btn draw-border" style="
    margin: 0 auto;
    display: block;
    text-align: center;
    font-size: 15px;
    background: #fff;
    height: 24px;
    width: 225px;
    padding-top: 10px;
    padding-bottom: 30px;
    color: black;
    text-transform: uppercase;
 ">See more products</a>


	
	<!-- banner-bottom1 -->
	<div class="banner-bottom1 my_padding_top">
		<div class="container">
    		<div class="row">
    		    
    		    <div class="col-sm-12">
        			<div class="spec ">
            			<h3>Upcoming Products</h3>
            		</div>
        		</div>
        		
    			<div class="col-sm-12">
        			
        			<div class="col-sm-6">
                        
                        <div id="slide_1" class="carousel slide" data-ride="carousel">
                          
                          <ol class="carousel-indicators">
                            <li data-target="#slide_1" data-slide-to="0" class="active"></li>
                            <li data-target="#slide_1" data-slide-to="1"></li>
                            <li data-target="#slide_1" data-slide-to="2"></li>
                          </ol>
                          
                          <div class="carousel-inner">
        				    
        				    <?php $i=1?>
        				    @foreach($first_sliders as $fs)
        				    <?php $o=$i++;?>
        				    
                            <div class="carousel-item  @if ($o === 1)active @else @endif ">
                              <img class="d-block w-100" src="{{ $fs->image }}" alt="Amar Foods">
        				      
                              <div class="carousel-caption d-none d-md-block">
                                <h5><a href="{{$fs->link}}" class="btn btn-amar pull-right pre_order_btn">Pre Order Now</a></h5>
                              </div>
                            </div>
                            
        				    @endforeach
                            
                          </div>
                          
                          <a class="carousel-control-prev" href="#slide_1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#slide_1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
        				 
        			</div>
        			
        			<div class="padding_top_30"></div>
        			
        			<div class="col-sm-6">
        			    
                        
                        <div id="slide_2" class="carousel slide" data-ride="carousel">
                          
                          <ol class="carousel-indicators">
                            <li data-target="#slide_2" data-slide-to="0" class="active"></li>
                            <li data-target="#slide_2" data-slide-to="1"></li>
                            <li data-target="#slide_2" data-slide-to="2"></li>
                          </ol>
                          
                          <div class="carousel-inner">
        				    
        				    <?php $i=1?>
        				    @foreach($secend_sliders as $s)
        				    <?php $o=$i++;?>
                            <div class="carousel-item  @if ($o === 1)active @else @endif ">
                              <img class="d-block w-100" src="{{ $s->image }}" alt="Amar Foods">
        				      
                              <div class="carousel-caption d-none d-md-block">
                                <h5><a href="{{$s->link}}" class="btn btn-amar pull-right  pre_order_btn">Pre Order Now</a></h5>
                              </div>
                            </div>
                            
        				    @endforeach
                            
                          </div>
                          
                          <a class="carousel-control-prev" href="#slide_2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#slide_2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
        				
        			</div>
        		</div>
        		
    		</div>
		</div>
	</div>
	<!-- //banner-bottom1 -->
	