@extends('admin.layouts.app')


@section('content')

            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Stock</h1>
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
                                        Stock
                                    </header>
                                    
                                    <div class="panel-body">
                                                                                
                                        <section class="col-sm-12">
                                        
                                                  
                                        {!! Form::model($product, [
                                            'method' => 'post',
                                            'action'  => ['StockManagement@update',$product->id]
                                        ]) !!}
                                            
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                {!! Form::label('quantity', 'Quantity: ') !!}
                                                {!! Form::text('quantity', null , ['class'=>'form-control','placeholder'=>'Give product link']) !!}
                                                
                                                @if($errors->has('quantity'))
                                                    <span class="help-block">{{ $errors->first('quantity') }}</span>
                                                @endif
                                            </div>
                                            
                                            <div class="form-group">
                                                {!! Form::submit('Submit', ['class'=>'form-control btn btn-info']) !!}
                                            </div>
                                                    
                                                      
                                        
                                        {!! Form::close() !!}
                                        
                                        
                                        </section>

                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    </div>

                </div>
            </div>
            
@endsection
