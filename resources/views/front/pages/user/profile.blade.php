@extends('front.layout.app_login')

@section('title')
Profile
@endsection

@section('content')

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="panel profile-wrap">
                <header class="panel-heading clearfix">
                    <h3 class="profile-title pull-left">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</h3>
                </header>
                <div class="panel-body row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body list-group border-bottom">
                                <li class="list-group-item active"><center><strong>My Profile</strong></center></li>
                                
                                <li class="list-group-item">
                                    <span class="profile-details-heading">
                                        <strong>Name: </strong>
                                    </span>
                                    <span class="profile">{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</span>
                                </li>
                                
                                
                                <li class="list-group-item">
                                    <span class="profile-details-heading">
                                        <strong>Email:</strong>
                                    </span>
                                    <span class="profile">{{ Auth::user()->email}}</span>
                                </li>
                                
                                <li class="list-group-item">
                                    <center>
                                        <strong>
                                            <a href="{{ action('PublicPagesController@logout') }}" class="btn btn-info btn-sm">Logout</a>
                                        </strong>
                                    </center>
                                </li>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection