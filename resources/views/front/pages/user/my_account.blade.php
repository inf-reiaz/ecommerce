@extends('front.layout.app_login')

@section('title')
Account
@endsection

@section('content')

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">
                    
                    @include('front.partials.message')
                </div>

                <!--start sidebar-->

                <div class="col-md-4">
                    <div class="widget account-details">
                        <h2 class="widget-title">Account</h2>
                        <ul>
                            <li class="{{ Request::path() == 'users/account-information' ? 'active_left_nav' : '' }}" ><a href="{{ action('PublicPagesController@getUserAccount') }}"> Account Information </a></li>
                            <li class="{{ Request::path() == 'users/my-account' ? 'active_left_nav' : '' }}" ><a href="{{ action('PublicPagesController@getMyAccount') }}">My Account</a></li>                                        
                            <li class="{{ Request::path() == 'users/change-password' ? 'active_left_nav' : '' }}" ><a href="{{ action('PublicPagesController@getChangePassword') }}">Change Password</a></li>
                            <li class="{{ Request::path() == 'users/order-history' ? 'active_left_nav' : '' }}" ><a href="{{ action('PublicPagesController@getOrderHistory') }}">Order History</a></li>
                            <li class="" ><a href="{{ action('PublicPagesController@logout') }}">Logout</a></li>
                            <!--<li><a href="">Returns Requests</a></li>-->
                            <!--<li><a href="">Newsletter</a></li>-->
                        </ul>
                    </div>
                </div>
                <!--end sidebar-->
                <!--start main contain of page-->
                <div class="col-md-8">
                    <div class="information-title">MY ACCOUNT</div>
                    <div class="details-wrap">
                        <div class="block-title alt"> <i class="fa fa-angle-down"></i> My Account</div>
                        <div class="details-box">
                            <ul>
                                <li>                                                
                                    <a href="{{ action('PublicPagesController@getUserAccountEdit',Auth::user()->id) }}">Edit your account information</a>
                                </li>
                                <li>                                               
                                    <a href="{{ action('PublicPagesController@getChangePassword') }}">Change your password</a>
                                </li>
                            </ul>
                        </div>

                        <div class="block-title alt"> <i class="fa fa-angle-down"></i> My Order History</div>
                        <div class="details-box">
                            <ul>
                                <li>
                                    <a href="">View your order history</a>
                                </li>
                            </ul>
                        </div>
                        </div>

                    </div>
                </div>
                <!--end main contain of page-->
            </div>
        </div>
    </div>
</div>

@endsection