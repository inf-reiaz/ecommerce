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
                                    <div class="panel-body">
                                        <div class="row">
                                            
                                            @include('admin.pages.order.search_from')
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
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
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>Customar Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $p)
                                                <tr>
                                                    <td>{{ $p->id }}</td>
                                                    <td>{{ $p->first_name }}</td>
                                                    <td>{{ $p->number }}</td>
                                                    
                                                    
                                                        {!! Form::open(['method' => 'PUT', 'action' => ['AdminOrder@Delivered',$p->id]]) !!}
                                                        
                                                    <td> 
                                                        @if($p->isDelivered == 1)
                                                        
                                                        Delivered 
                                                        
                                                        @else Panding   
                                                        
                                                        <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-sm btn-success">
                                                            Delivered
                                                        </button>
                                                        
                                                        {!! Form::close() !!}
                                                        
                                                        @endif 
                                                    </td>
                                                    <td>
                                                        <a href="{{ action('AdminOrder@Details',$p->id) }}" class="btn btn-sm btn-default">Details</a>
                                                        <a href="{{ action('ProductsController@edit',$p->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                        <button type="submit" onclick="return confirm('This product is delete permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                            Delete
                                                        </button>
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
