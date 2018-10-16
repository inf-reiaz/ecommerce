<!DOCTYPE html>
<html lang="en">
<head>
	@include('front.partials.head')
</head> 
<body class="top-body">

	<!-- navigation -->
	@include('front.partials.modal')
	@include('front.navigation.navs')
	<!-- navigation -->
	<!--slider-->
	@yield('content')
	

	
	@include('front.footer.footer')
	
	@include('front.partials.js')
		


</body>

</html>