@extends('front.layout.app_login')

@section('title')
Login 
@endsection

@section('content')

<div class="banner-bottom">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                
                <div class="widget account-details">
                    <h2 class="widget-title">Login</h2>
                </div>
                
                <form class="form-horizontal" action="{{action('PublicPagesController@postLogin')}}" method="POST">
                  {{ csrf_field() }} 
                  
                  <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                    <div class="col-sm-12">
                        
                        <label for="email">Eamil</label>
                        
                      <input type="email" class="form-control" name="user_email"  placeholder="Email"/>
                      
                        @if ($errors->has('user_email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_email') }}</strong>
                            </span>
                        @endif
                        
                    </div>
                  </div>
                  <div class="form-group{{ $errors->has('user_password') ? ' has-error' : '' }}">
                    <div class="col-sm-12">
                        
                        <label for="password">Password</label>
                        
                      <input type="password" class="form-control" name="user_password" placeholder="Password"/>

                        @if ($errors->has('user_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('user_password') }}</strong>
                            </span>
                        @endif
                        
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-default button-1 check-ct">Log In </button>
                      <span> <a href="{{ action('PublicPagesController@forgotPassword') }}">   Forgot password ?  </a></span>
                    </div>
                  </div>
                </form>	
            </div>
            
            <div class="col-md-6">
                <div class="widget account-details">
                    <h2 class="widget-title">Registration</h2>
                </div>
                <form class="form-horizontal" action="{{action('PublicPagesController@postReg')}}" method="POST">
                          {{ csrf_field() }} 
                          
                          <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Name</label>
                        
                              <input type="text" class="form-control" name="firstname"  placeholder="Name"/>
                              
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                          </div>
                          
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Email"/>
                              
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          
                          <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Phone Number</label>
                              <input type="number" class="form-control" name="contact"  placeholder="01768-000000"/>
                              
                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                          </div>
                          
                          <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Choose your City</label>
                            
                              {!! Form::select('city_id', App\City::pluck('name', 'id'),null, ['class' => 'form-control mb-10', 'placeholder' => 'Choose your City']) !!}
                              
                                @if ($errors->has('city_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_id') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                          </div>
                          
                          
                          <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Address</label>
                            
                              <textarea class="form-control" rows="5" name="address" rows="10"  placeholder="Address" ></textarea>
                              
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                          </div>
                                        
                          
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-sm-12">
                        
                            <label for="password">Password</label>
                            
                              <input type="password" class="form-control" name="password" placeholder="Password"/>
                              
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <button type="submit" class="btn btn-default button-1 check-ct">Registration </button>
                            </div>
                          </div>
                          
                        </form>	
                
            </div>
            
        </div>
    </div>
</div>

@endsection

