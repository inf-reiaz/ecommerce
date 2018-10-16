
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true" style="top: 28px;"></i>House 6/2, <span>Block B,Lalmatia, Mohammadpur,</span>  <span>Dhaka, Bangladesh</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:amarfood.organic@gmail.com">amarfood.organic@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true" style="top: 10px;"></i> +880 1761429381 <br> <span style="padding-left: 6px;"> +880 1761429385 </span> </li>
					</ul>
				</div>

				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="<?php echo e(action('PublicPagesController@getAboutUs')); ?>">About Us</a></li>
						<li><a href="<?php echo e(action('PublicPagesController@getContactUs')); ?>">Contact Us</a></li>
						<li><a href="<?php echo e(action('PublicPagesController@getFaq')); ?>">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="<?php echo e(URL::to('/category/offers')); ?>">SEASONAL OFFERS</a></li>
						<li><a href="<?php echo e(URL::to('/category/fish-&-meat')); ?>">Fish & Meat</a></li>
						<li><a href="<?php echo e(URL::to('/category/dry-food')); ?>">Dry Food</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
					    <?php if(auth()->guard()->check()): ?>
						<li><a href="<?php echo e(action('PublicPagesController@getUserAccount')); ?>">My Account</a></li>
					    <?php else: ?>
						<li><a href="<?php echo e(action('PublicPagesController@getLogin')); ?>">Login</a></li>
					    <?php endif; ?>
						<li><a href=""> Order History </a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						 <div class="social-media1">
							<a href="https://www.facebook.com/amarfood.organic/" target="_blank" class="fb-ic mr-3"><i class="fa fa-lg fa-facebook"> </i></a>
				            <a href="https://www.instagram.com/?hl=en"  target="_blank" class="mr-3"><i class="fa fa-lg fa-instagram"> </i></a>
				         </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<p>&copy; 2018 আমার Food. All rights reserved | Design by <a href="http://digimarkint.com"> DigiMark Interactive</a></p>
			</div>
		</div>
	</div>
	
	