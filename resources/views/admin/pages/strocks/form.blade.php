
                                                    <div class="box">
                                                        <div class="box-body text-center">
                                                            <div class="form-group {{ $errors->has('product_photo_input') ? 'has-error' : '' }}">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                  <div class="fileinput-new thumbnail" style="width: 400px; height: 300px;">
                                                                    <img src="{{ ($slider->image) ? $slider->image : 'http://placehold.it/400x300&text=Add+Promotional+Slider+Image' }}" alt="...">
                                                                  </div>
                                                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
                                                                  <div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                        <span class="fileinput-exists">Change</span>
                                                                        {!! Form::file('image') !!}
                                                                    </span>
                                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                  </div>
                                                                </div>
                                    
                                                                @if($errors->has('image'))
                                                                    <span class="help-block">{{ $errors->first('image') }}</span>
                                                                @endif
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                        {!! Form::label('link', 'Link: ') !!}
                                                        {!! Form::text('link', null , ['class'=>'form-control','placeholder'=>'Give product link']) !!}
                            
                                                        @if($errors->has('link'))
                                                            <span class="help-block">{{ $errors->first('link') }}</span>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        {!! Form::submit('Submit', ['class'=>'form-control btn btn-info']) !!}
                                                    </div>
                                                    
                                                    