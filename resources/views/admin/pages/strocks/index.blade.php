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
                                <h1 class="page-title"> All Products</h1>
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
                                    <div class="panel-body">
                                        <div class="row">
                                            
                                            @include('admin.pages.strocks.search_from')
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Products List
                                        <span class="tools pull-right">
                                            <a href="{{ action('ProductsController@create') }}" class="btn btn-sm btn-success" style="color:#fff;">Add New Product </a>
                                            <a class="close-box fa fa-times"></a>
                                        </span>
                                    </header>
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>Product Name</th>
                                                    <th>Image</th>
                                                    <th>Entry Number </th>
                                                    <th>Stock</th>
                                                    <th>Sale</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $p)
                                                @if($p->quantity < 5) 
                                                <tr style="border: 5px solid red;">
                                                @else
                                                <tr>
                                                @endif
                                                
                                                    <td>{{ $p->id }}</td>
                                                    <td>{{ $p->name }}</td>
                                                    <td> <img src="{{ $p->product_photo }}" alt="" style="width: 100px;"> </td>
                                                    <td>{{ $p->quantity }}</td>
                                                    
                                                    <?php 
                                                    $total = $p->quantity;
                                                    $sell = $p->out_item;
                                                    $stock = $total - $sell;
                                                    ?>
                                                    
                                                    <td>{{ $stock }}</td>
                                                    <td>{{ $p->out_item }}</td>
                                                    <td>
                                                    
                                                        <a href="" class="btn btn-sm btn-default">History</a>
                                                        <a href="{{ action('StockManagement@addProductNumber',$p->id) }}" class="btn btn-sm btn-success">Add Stock</a>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
