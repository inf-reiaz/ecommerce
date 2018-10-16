@extends('front.layout.app')

@section('title')
Contact Us
@endsection
@section('content')
	
	<div class="mail">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
    			    <div class="widget account-details">
    			        <h2 class="widget-title">Address</h2>
    				</div>
					
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
				
				<div class="col-md-8">
    			    
    			    <div class="widget account-details">
    			        <h2 class="widget-title">Contact Form</h2>
    				</div>
    				
                <form class="form-horizontal" action="" method="POST">
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="name"  placeholder="Your Name"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="email"  placeholder="Your Email"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="number" class="form-control" name="contact"  placeholder="Give Your Contact Number"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <textarea class="form-control" rows="5" name="message" rows="10"  placeholder="Message ..." ></textarea>
                            </div>
                          </div>
                                        
                          <div class="form-group">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-default button-1 check-ct"> Submit </button>
                            </div>
                          </div>
                          
                        </form>	
					
				</div>
			</div>
			<div class="contact-bottom">
				<iframe src="https://maps.google.com/maps?q=Watermark%20MCL&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>

	<!-- newsletter -->
	@include('front.partials.newsletter')
	<!-- //newsletter -->
@endsection
