@extends('front.layout.app_login')

@section('title')
Account
@endsection

@section('css')
<style>
    

.orders {
    margin-bottom: 30px;
}



.orders thead {
    background-color: #232323;
    color: #ffffff;
}
.details-box .table > thead > tr > th, .details-box .table > tbody > tr > th, .details-box .table > tfoot > tr > th, .details-box .table > thead > tr > td, .details-box .table > tbody > tr > td, .details-box .table > tfoot > tr > td {
    vertical-align: middle;
}

.details-box .table > thead > tr {
    border-bottom: 1px solid #000;
}
.orders thead > tr > th {
    padding-top: 15px;
    padding-bottom: 15px;
    font-size: 14px;
    font-weight: 300;
    border: none;
}

.table > thead > tr > th{
 
    color: #fff;
}
.table > tbody > tr {
 border-bottom: 1px solid #000;
}


.description{
    width: 300px;
}


.btn-theme {
    background-color: #016654;
    border-color: #00b16a;
}

.btn-theme {
    color: #ffffff;
    border-width: 3px;
    background-color: #016654;
    border-color: #016654;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    text-transform: uppercase;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.btn-theme:hover {
    background-color: #232323;
    border-color: #232323;
    color: #ffffff;
}


    
</style>
@endsection

@section('content')

<div class="banner-bottom">
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="information-title">YOUR ORDER HISTORY</div>
                    <div class="details-wrap">                                    
                        <div class="details-box orders">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Qty</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Order ID</th>
                                        <th>Delivered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        
                                        <td class="image">
                                            <a href="#" class="media-link">
                                                <?php $product = App\Product::find($order->product_id); ?>
                                                <img alt="" src="{{ $product->product_photo }}"  style="width: 80px;">
                                            </a>
                                        </td>
                                        
                                        <td class="quantity">x{{ $order->quantity }}</td>
                                        
                                        <td class="description">
                                            <a href="#">{{ $order->product_name }}</a>
                                        </td>
                                        
                                        <td class="quantity"> {{ $order->total_price }} TAKA </td>
                                        
                                        <td class="order-id"> {{ $order->order_id }} </td>
                                        
                                        <?php $order = App\Order::find($order->order_id); ?>
                                                        
                                        <td class="diliver-date">@if($order->isDelivered == 1) Delivered @else panding @endif</td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="{{ action('PublicPagesController@getUserAccount') }}" class="btn btn-theme"> Back To Account </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection