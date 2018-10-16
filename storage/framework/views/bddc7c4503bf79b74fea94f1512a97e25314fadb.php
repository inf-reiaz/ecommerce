 

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
									
									<?php if($myoffers->count() > 0): ?>
										<?php $__currentLoopData = $myoffers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    			    <div class="col-sm-3 col-xs-6 product_item text-center amarfoods_box">
												<div class="">
													<img src="<?php echo e($r->product_photo); ?>" alt=" " class="img-responsive">
												</div>
												
												<div class="product_content_bg">
														
													<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$r->id)); ?>"><?php echo e($r->name); ?></a></h5>
													<div class="simpleCart_shelfItem">
														<p><span><?php echo e($r->price); ?> Taka</span> <i class="item_price"><?php echo e($r->discunt_price); ?>Taka R</i></p>
														<a href="<?php echo e(action('CartController@addItem',$r->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
													</div>
													
												</div>
											</div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-3 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Grocery" aria-labelledby="Grocery-tab">
								<div class="agile_ecommerce_tabs">
								
								<?php if($groceryes->count() > 0): ?>
									<?php $__currentLoopData = $groceryes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grocery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($grocery->product_photo); ?>" alt=" " class="img-responsive">
											</div>
												
											<div class="product_content_bg">
													
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$grocery->id)); ?>"><?php echo e($grocery->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($grocery->price); ?> Taka</span> <i class="item_price"><?php echo e($grocery->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$grocery->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
												
											</div>
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
								<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							
							<div role="tabpanel" class="tab-pane" id="Fish" aria-labelledby="Fish-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($fishes->count() > 0): ?>
										<?php $__currentLoopData = $fishes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fish): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($fish->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$fish->id)); ?>"><?php echo e($fish->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($fish->price); ?> Taka</span> <i class="item_price"><?php echo e($fish->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$fish->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
						
							<div role="tabpanel" class="tab-pane" id="Ingredients" aria-labelledby="Ingredients-tab">
								<div class="agile_ecommerce_tabs">
									
									<?php if($ingredients->count() > 0): ?>
										<?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ingredient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($ingredient->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$ingredient->id)); ?>"><?php echo e($ingredient->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($ingredient->price); ?> Taka</span> <i class="item_price"><?php echo e($ingredient->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$ingredient->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Dairy" aria-labelledby="Dairy-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($dairys->count() > 0): ?>
										<?php $__currentLoopData = $dairys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dairy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($dairy->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$ingredient->id)); ?>"><?php echo e($ingredient->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($ingredient->price); ?> Taka</span> <i class="item_price"><?php echo e($ingredient->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$ingredient->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Honey" aria-labelledby="Honey-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($honeys->count() > 0): ?>
										<?php $__currentLoopData = $honeys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $honey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3 col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($honey->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$honey->id)); ?>"><?php echo e($honey->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($honey->price); ?> Taka</span> <i class="item_price"><?php echo e($honey->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$honey->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Vegetable" aria-labelledby="Vegetable-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($vegetables->count() > 0): ?>
										<?php $__currentLoopData = $vegetables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($v->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$v->id)); ?>"><?php echo e($v->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($v->price); ?> Taka</span> <i class="item_price"><?php echo e($v->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$v->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane active in" id="DryFood" aria-labelledby="DryFood-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($dry_foods->count() > 0): ?>
										<?php $__currentLoopData = $dry_foods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dry_food): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										
					    			    <div class="col-sm-3  col-xs-6 product_item text-center amarfoods_box">
											<div class="">
												<img src="<?php echo e($dry_food->product_photo); ?>" alt=" " class="img-responsive">
											</div>											
											<div class="product_content_bg">
												<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$dry_food->id)); ?>"><?php echo e($dry_food->name); ?></a></h5>
												<div class="simpleCart_shelfItem">
													<p><span><?php echo e($dry_food->price); ?> Taka</span> <i class="item_price"><?php echo e($dry_food->discunt_price); ?>Taka</i></p>
													<a href="<?php echo e(action('CartController@addItem',$dry_food->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
												</div>
											</div>

										</div>
										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									
									<div class="clearfix"> </div>
								</div>
							</div>
							
							<div role="tabpanel" class="tab-pane" id="Seasonal" aria-labelledby="Seasonal-tab">
								<div class="agile_ecommerce_tabs">
									<?php if($s_sruits->count() > 0): ?>
										<?php $__currentLoopData = $s_sruits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seasonal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="col-sm-3  col-xs-6 agile_ecommerce_tab_left amarfoods_box">
										
										<div class="hs-wrapper">
											<img src="<?php echo e($seasonal->product_photo); ?>" alt=" " class="img-responsive" />
										</div>
																					
										<div class="product_content_bg">
											
											<h5><a href="<?php echo e(action('PublicPagesController@getSingleProduct',$seasonal->id)); ?>"><?php echo e($seasonal->name); ?></a></h5>
											<div class="simpleCart_shelfItem">
												<p><span><?php echo e($seasonal->price); ?> Taka</span> <i class="item_price"><?php echo e($seasonal->discunt_price); ?>Taka</i></p>
												<a href="<?php echo e(action('CartController@addItem',$seasonal->id)); ?>" class="amarfood_btn draw-border">Add to cart</a>
											</div>
										</div>

									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
									<?php else: ?>
									<div class="col-sm-4 agile_ecommerce_tab_left">
										<h3>No data Found.</h3>
									</div>
									<?php endif; ?>
									
								</div>
							</div>
							
						</div>
					
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	

<a href="<?php echo e(URL::to('/products')); ?>" class="amarfood_btn draw-border" style="
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
        				    <?php $__currentLoopData = $first_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        				    <?php $o=$i++;?>
        				    
                            <div class="carousel-item  <?php if($o === 1): ?>active <?php else: ?> <?php endif; ?> ">
                              <img class="d-block w-100" src="<?php echo e($fs->image); ?>" alt="Amar Foods">
        				      
                              <div class="carousel-caption d-none d-md-block">
                                <h5><a href="<?php echo e($fs->link); ?>" class="btn btn-amar pull-right pre_order_btn">Pre Order Now</a></h5>
                              </div>
                            </div>
                            
        				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
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
        				    <?php $__currentLoopData = $secend_sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        				    <?php $o=$i++;?>
                            <div class="carousel-item  <?php if($o === 1): ?>active <?php else: ?> <?php endif; ?> ">
                              <img class="d-block w-100" src="<?php echo e($s->image); ?>" alt="Amar Foods">
        				      
                              <div class="carousel-caption d-none d-md-block">
                                <h5><a href="<?php echo e($s->link); ?>" class="btn btn-amar pull-right  pre_order_btn">Pre Order Now</a></h5>
                              </div>
                            </div>
                            
        				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
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
	