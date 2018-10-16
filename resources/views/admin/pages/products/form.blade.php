
        <div class="box">
            <div class="box-body text-center">
                <div class="form-group {{ $errors->has('product_photo_input') ? 'has-error' : '' }}">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 400px; height: 300px;">
                                                                        
                        <img src="{{ ($product->product_photo) ? $product->product_photo : 'http://placehold.it/400x300&text=Product+Image+500px X+500Px' }}" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
                      <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            {!! Form::file('product_photo_input') !!}
                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>

                    @if($errors->has('product_photo_input'))
                        <span class="help-block">{{ $errors->first('product_photo_input') }}</span>
                    @endif
                </div>
                
            </div>
        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            {!! Form::label('name', 'Product name: ') !!}
            {!! Form::text('name', null , ['class'=>'form-control']) !!}

            @if($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            {!! Form::label('categories', 'Category name: ') !!}
            {!! Form::select('categories[]', \App\Category::pluck('name','id'),null, ['class'=>'form-control','required','multiple'=>'multiple']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('family', 'This Product is allow for family combo offer: ') !!}
            {!! Form::select('family', ['family' => 'Yes', 'not_family' => 'No'], null, ['class'=>'form-control','placeholder' => 'Select...']) !!}
        </div>
        
        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
            {!! Form::label('description', 'Product description: ') !!}
            {!! Form::textarea('description', null , ['class'=>'form-control','id'=>'mytextarea']) !!}

            @if($errors->has('description'))
                <span class="help-block">{{ $errors->first('description') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
            {!! Form::label('price', 'Product price: ') !!}
            {!! Form::number('price', null , ['class'=>'form-control']) !!}

            @if($errors->has('price'))
                <span class="help-block">{{ $errors->first('price') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('discunt_price') ? 'has-error' : '' }}">
            {!! Form::label('discunt_price', 'Discount price: ') !!}
            {!! Form::number('discunt_price', null , ['class'=>'form-control']) !!}

            @if($errors->has('discunt_price'))
                <span class="help-block">{{ $errors->first('discunt_price') }}</span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('quantity') ? 'has-error' : '' }}">
            {!! Form::label('quantity', 'Product quantity: ') !!}
            {!! Form::number('quantity', null , ['class'=>'form-control']) !!}

            @if($errors->has('quantity'))
                <span class="help-block">{{ $errors->first('quantity') }}</span>
            @endif
        </div>
        <div class="form-group">
            {!! Form::submit('Submit', ['class'=>'form-control btn btn-info']) !!}
        </div>