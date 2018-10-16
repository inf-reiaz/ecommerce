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
                                            @include('admin.pages.products.search_from')
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
                                                    <th width="100">Serial Number</th>
                                                    <th width="300">Product Name</th>
                                                    <th width="200">Image</th>
                                                    <th width="200">Category name</th>
                                                    <th width="200">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $p)
                                                <tr>
                                                    <td width="100">{{ $p->id }}</td>
                                                    <td width="300">{{ $p->name }}</td>
                                                    <td width="200"> <img src="{{ $p->product_photo }}" alt="" style="width: 200px;"> </td>
                                                    <td width="200">@foreach($p->categories as $ctg) <sapn class="btn btn-sm btn-default">{{ $ctg->name }}</sapn>  @endforeach</td>
                                                    <td width="200">
                                                        
                                                        {!! Form::open(['method' => 'DELETE', 'action' => ['ProductsController@destroy',$p->id]]) !!}
                                                            <a href="{{ action('ProductsController@edit',$p->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                            <button type="submit" onclick="return confirm('This product is delete permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                                Delete
                                                            </button>
                                                        {!! Form::close() !!}
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
