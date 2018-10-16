
	<div class="special-deals">
		<div class="container">
			<div class="spec ">
				<h3>Our Speciality</h3>
			</div>
			<div class="w3agile_special_deals_grids">
				<div class="col-md-7 w3agile_special_deals_grid_left">
					<div class="w3agile_special_deals_grid_left_grid">
						<img src="/public/front/images/21.jpg" alt=" " class="img-responsive" />
						
						<div class="w3agile_special_deals_grid_left_grid_pos">
							
						</div>
					</div>
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="/public/front/images/t3.png" alt=" " class="img-responsive" />
										<p>Service Is five star. Products are very fresh and delivered very carefully. Me and my family is happy to get this. </p>
										<h4>Minhaz Abir</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
										<img src="/public/front/images/t2.png" alt=" " class="img-responsive" />
										<p>As a working woman i think Amar food serve me the best service in Dhaka city. Service quality is awesome. Deliver product with in 3 Hours at Dhanmondi. Mostly they keeps their Promise!!</p>
										<h4>Selena Akther</h4>
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="w3agile_special_deals_grid_left_grid1">
									<img src="/public/front/images/t1.png" alt=" " class="img-responsive" />
										<p>
											Amar Food is such a responsite marketplace to shop daily grocery products. They are really very care about Freshness and Organic delivery. Am recommending amar foods for daily grocery shopping.
										</p>
										<h4>Mahadi Hassan</h4>
									</div>
								</div>
							</article>
						</div>
					</div>
					
				</div>
				<div class="col-md-5 w3agile_special_deals_grid_right">
					<img src="/public/front/images/20.jpg" alt=" " class="img-responsive" />
					<div class="w3agile_special_deals_grid_right_pos">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3> Be With Us</h3>
				<p>Get pre-order products update first.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				
				<form action="{{ action('PublicPagesController@postSub') }}" method="post">
					<input name="_token" type="hidden" value="{{ csrf_token() }}">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="submit" value="Subscribe">
				</form>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
