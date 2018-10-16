@extends('admin.layouts.app')


@section('css')
<style>
    .text-center {
        max-width: 500px;
        display: block;
        margin: 10px auto;
    }
</style>
@endsection

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All Orders</h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Products List
                                        <span class="tools pull-right">
                                            <a href="{{ action('ProductsController@create') }}" class="btn btn-sm btn-success" style="color:#fff;">New Orders </a>
                                            <a class="close-box fa fa-times"></a>
                                        </span>
                                    </header>
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header bg-white">
                                                <strong>Order Summary</strong>
                                            </div>
                                            <div class="card-block m-t-35">
                                                <div class="table-responsive">
                                            
                                                                                        
                                                    <table class="table table-sm">
                                                        <thead>
                                                        <tr>
                                                            <td>
                                                                <strong>Customar  Name</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Address</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Phone Number</strong>
                                                            </td>
                                                            <td>
                                                                <strong>Customar Email</strong>
                                                            </td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                                <tr>
                                                                    <td>{{$order->first_name}} {{$order->last_name}}</td>
                                                                    <td>{{ $order->city }}</td>
                                                                    <td>{{ $order->number }}</td>
                                                                    <td>{{ $order->email }}</td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <strong>Item Name</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Price</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Item Quantity</strong>
                                                                </td>
                                                                <td>
                                                                    <strong>Total</strong>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        
                                                        <tbody>   
                                                        
                                                            @foreach($order->orderItems as $items)
                                                            <tr>
                                                                <td>{{$items->name}}</td>
                                                                <td>{{$items->discunt_price}} Taka</td>
                                                                <td>{{$items->pivot->qty}}</td>
                                                                
                                                                <?php 
                                                                    $price = $items->discunt_price;
                                                                    $price_qty = $items->pivot->qty;
                                                                    $totlal_price = $price * $price_qty;
                                                                ?>
                                                                
                                                                <td> {{$items->discunt_price}} * {{$items->pivot->qty}} = {{ $totlal_price }}</td>
                                                                
                                                            </tr>
                                                            @endforeach
                                                            
                                                            <tr>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow">
                                                                    <strong>Sub Total &nbsp;</strong>
                                                                </td>
                                                                <td class="highrow">
                                                                    <strong>{{ $totlal_price }} Taka</strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow"></td>
                                                                <td class="highrow">
                                                                    <strong>Total &nbsp;</strong>
                                                                </td>
                                                                <td class="highrow">
                                                                    <strong>{{ $totlal_price }} Taka</strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                        
                                                    <span class="pull-sm-right">
                                                        <a style="color:#fff;" class="btn button-alignment btn-info m-t-15" data-toggle="button" onclick="javascript:window.print();">
                                                            Print
                                                        </a>
                                                        <button type="button" class="btn button-alignment btn-warning m-t-15" data-toggle="button">
                                                            Cancel
                                                        </button>
                                                    </span>
                                                    
                                                                                       
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content end-->
@endsection
