<?php $__env->startSection('title'); ?>
Index
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	
	<div class="mail">
		<div class="container">
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					
					<p>House 6/2,
						Block B,Lalmatia, Mohammadpur,
						Dhaka, Bangladesh
					</p>
					
					<ul>
						<li>Support Hotline: +880 1515 293152</li>
						<li>Contact :+028100606</li>
						<li><a href="mailto:amarfoods@gmail.com">amarfoods@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required="">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="text" name="Telephone" placeholder="Telephone No" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96908.54934770924!2d-73.74913540000001!3d40.62123259999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sanimal+rescue+service+near+Inwood%2C+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1436335928062" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>

	<!-- newsletter -->
	<?php echo $__env->make('front.partials.newsletter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- //newsletter -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>