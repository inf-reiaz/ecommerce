@extends('front.layout.app')

@section('title')
Index
@endsection

@section('content')

	@include('front.partials.slider')
	<!--slider-->
	<!-- banner-bottom -->
	@include('front.partials.banner-bottom')
	<!-- banner-bottom --> 
	
	
	
	<!-- special-deals -->
	@include('front.partials.special-deals')
	<!-- special-deals -->
	
	

@endsection

