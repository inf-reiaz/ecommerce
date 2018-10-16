@extends('front.layout.app_login')

@section('title')
Login 
@endsection

@section('content')

<div class="banner-bottom">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="text-center">
                    @include('front.partials.message')
                </div>
            </div>
            
            <div class="col-md-6">
                
                <h3>Login</h3>
                <form class="form-horizontal" action="{{ action('PublicPagesController@postForgotPassword') }}" method="POST">
                  {{ csrf_field() }} 
                  <div class="form-group">
                    <div class="col-sm-12">
                      <input type="email" class="form-control" name="recovery_email"  placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-default button-1 check-ct">Password Recovery</button>
                      
                      <span> <a href="{{ action('PublicPagesController@getLogin')  }}">Cancle </a></span>
                    </div>
                  </div>
                </form>	
            </div>
            
            <div class="col-md-6">
                
                <h3>Register</h3>
                
                <form class="form-horizontal" action="{{action('PublicPagesController@postReg')}}" method="POST">
                          {{ csrf_field() }} 
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="text" class="form-control" name="firstname"  placeholder="Name"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="email" class="form-control" name="email"  placeholder="Email"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="number" class="form-control" name="contact"  placeholder="Give Your Contact Number"/>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              {!! Form::select('city_id', App\City::pluck('name', 'id'),null, ['class' => 'form-control mb-10', 'placeholder' => 'Choose your City']) !!}
                            </div>
                          </div>
                          
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <textarea class="form-control" rows="5" name="address" rows="10"  placeholder="Address" ></textarea>
                            </div>
                          </div>
                                        
                          
                          <div class="form-group">
                            <div class="col-sm-12">
                              <input type="password" class="form-control" name="password" placeholder="Password"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-default button-1 check-ct">Sign Up</button>
                            </div>
                          </div>
                          
                        </form>	
                
            </div>
            
        </div>
    </div>
</div>

@endsection

