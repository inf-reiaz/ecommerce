
        <div class="box">
            <div class="box-body text-center">
                <div class="form-group <?php echo e($errors->has('product_photo_input') ? 'has-error' : ''); ?>">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-new thumbnail" style="width: 400px; height: 300px;">
                                                                        
                        <img src="<?php echo e(($product->product_photo) ? $product->product_photo : 'http://placehold.it/400x300&text=Product+Image+500px X+500Px'); ?>" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
                      <div>
                        <span class="btn btn-default btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <?php echo Form::file('product_photo_input'); ?>

                        </span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>

                    <?php if($errors->has('product_photo_input')): ?>
                        <span class="help-block"><?php echo e($errors->first('product_photo_input')); ?></span>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
            <?php echo Form::label('name', 'Product name: '); ?>

            <?php echo Form::text('name', null , ['class'=>'form-control']); ?>


            <?php if($errors->has('name')): ?>
                <span class="help-block"><?php echo e($errors->first('name')); ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group">
            <?php echo Form::label('categories', 'Category name: '); ?>

            <?php echo Form::select('categories[]', \App\Category::pluck('name','id'),null, ['class'=>'form-control','required','multiple'=>'multiple']); ?>

        </div>
        
        <div class="form-group">
            <?php echo Form::label('family', 'This Product is allow for family combo offer: '); ?>

            <?php echo Form::select('family', ['family' => 'Yes', 'not_family' => 'No'], null, ['class'=>'form-control','placeholder' => 'Select...']); ?>

        </div>
        
        <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
            <?php echo Form::label('description', 'Product description: '); ?>

            <?php echo Form::textarea('description', null , ['class'=>'form-control','id'=>'mytextarea']); ?>


            <?php if($errors->has('description')): ?>
                <span class="help-block"><?php echo e($errors->first('description')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('price') ? 'has-error' : ''); ?>">
            <?php echo Form::label('price', 'Product price: '); ?>

            <?php echo Form::number('price', null , ['class'=>'form-control']); ?>


            <?php if($errors->has('price')): ?>
                <span class="help-block"><?php echo e($errors->first('price')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('discunt_price') ? 'has-error' : ''); ?>">
            <?php echo Form::label('discunt_price', 'Discount price: '); ?>

            <?php echo Form::number('discunt_price', null , ['class'=>'form-control']); ?>


            <?php if($errors->has('discunt_price')): ?>
                <span class="help-block"><?php echo e($errors->first('discunt_price')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
            <?php echo Form::label('quantity', 'Product quantity: '); ?>

            <?php echo Form::number('quantity', null , ['class'=>'form-control']); ?>


            <?php if($errors->has('quantity')): ?>
                <span class="help-block"><?php echo e($errors->first('quantity')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <?php echo Form::submit('Submit', ['class'=>'form-control btn btn-info']); ?>

        </div>