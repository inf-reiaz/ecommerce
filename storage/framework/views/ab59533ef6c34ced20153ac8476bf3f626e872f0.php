
                                                    <div class="box">
                                                        <div class="box-body text-center">
                                                            <div class="form-group <?php echo e($errors->has('product_photo_input') ? 'has-error' : ''); ?>">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                  <div class="fileinput-new thumbnail" style="width: 400px; height: 300px;">
                                                                    <img src="<?php echo e(($slider->image) ? $slider->image : 'http://placehold.it/400x300&text=Image+Size+600 x+400 px'); ?>" alt="...">
                                                                  </div>
                                                                  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 400px; max-height: 300px;"></div>
                                                                  <div>
                                                                    <span class="btn btn-default btn-file">
                                                                        <span class="fileinput-new">Select image</span>
                                                                        <span class="fileinput-exists">Change</span>
                                                                        <?php echo Form::file('image'); ?>

                                                                    </span>
                                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                                  </div>
                                                                </div>
                                    
                                                                <?php if($errors->has('image')): ?>
                                                                    <span class="help-block"><?php echo e($errors->first('image')); ?></span>
                                                                <?php endif; ?>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('link', 'Link: '); ?>

                                                        <?php echo Form::text('link', null , ['class'=>'form-control','placeholder'=>'Give product link']); ?>

                            
                                                        <?php if($errors->has('link')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('link')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    
                                                    <div class="form-group <?php echo e($errors->has('slider_position') ? 'has-error' : ''); ?>">
                                                    
                    					              <?php echo Form::select('slider_position', 
                    					                  [
                    					                      '1' => 'First Slider', 
                    					                      '2' => 'Secend Slider',
                    					                    ]
                    					                    , null,
                    					                    ['class' => 'form-control', 'placeholder' => 'Select Slider Position','required']); ?>

                    					               
                                                        <?php if($errors->has('slider_position')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('slider_position')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <?php echo Form::submit('Submit', ['class'=>'form-control btn btn-info']); ?>

                                                    </div>