@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@endsection

@section('content')

            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Edit Slider</h1>
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
                                        Products
                                    </header>
                                    
                                    <div class="panel-body">
                                                                                
                                        <section class="col-sm-12">
                                                                                      
                                              {!! Form::model($slider, [
                                                  'method' => 'PUT',
                                                  'action'  => ['SlidersController@update',$slider->id],
                                                  'files'  => TRUE
                                              ]) !!} 
                                              
                                              @include('admin.pages.slider.form')     
                                        
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

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script type="text/javascript">

      $('#mytextarea').summernote({
        placeholder: 'Product Description',
        tabsize: 2,
        height: 200
      });
    </script>
@endsection