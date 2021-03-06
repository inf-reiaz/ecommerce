@extends('admin.layouts.app')

@section('css')
{!! Charts::assets() !!}
@endsection

@section('content')
            <!--main content start-->
            <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">
                    <div class="ui-container">

                        <div class="row">
                            
                            <div class="col-md-8">
                                <h1 class="page-title"> Admin Dashboard
                                </h1>
                            </div>
                            
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-info">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $user }}</h1>
                                        <!--<div class=" pull-right">65% <i class="fa fa-level-up"></i></div>-->
                                        <strong class="text-uppercase">Totla users</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-danger">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $role }}</h1>
                                        <strong class="text-uppercase">Totla Admin</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-warning">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $all_sub }}</h1>
                                        <strong class="text-uppercase">Totla Subscriber</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-primary">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">৳ {{ $profit }} </h1>
                                        <strong class="text-uppercase">Total Order</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-info">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ \App\Order::all()->count() }}</h1>
                                        <!--<div class=" pull-right">65% <i class="fa fa-level-up"></i></div>-->
                                        <strong class="text-uppercase">Total Order</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-danger">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ \App\Order::where('isDelivered',1)->count() }}</h1>
                                        <strong class="text-uppercase">Total Deliver</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-warning">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ \App\Order::where('isDelivered',0)->count() }}</h1>
                                        <strong class="text-uppercase">Pending Orders</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-primary">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt"> {{ $profit }} </h1>
                                        <strong class="text-uppercase">Unsuccessful orders</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-12">
                                {!! $users->render() !!}
                            </div>
                            
                            <div class="col-md-12">
                                {!! $products->render() !!}
                            </div>
                            
                            <div class="col-md-12">
                                {!! $orders->render() !!}
                            </div>
                            
                            <div class="col-md-12">
                                {!! $subscribers->render() !!}
                            </div>
                            
                        </div>

                    </div>


                </div>
            </div>
    
@endsection
