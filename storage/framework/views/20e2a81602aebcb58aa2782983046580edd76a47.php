<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Site Settings</h1>
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
                                        Site Settings
                                    </header>
                                    
                                    <div class="panel-body">
                                                                                
                                        <section class="col-sm-12">
                                        
                                                  
                                        <?php echo Form::model($settings, [
                                            'method' => 'PUT',
                                            'action'  => ['SettingsController@update',$settings->id],
                                            'files'  => TRUE
                                        ]); ?>

                                        
                                                            
                                                <div class="box">
                                                    <div class="box-body text-center">
                                                        <div class="form-group <?php echo e($errors->has('logo_input') ? 'has-error' : ''); ?>">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                              <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="<?php echo e($settings->logo); ?>" alt="...">
                                                              </div>
                                                              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                              <div>
                                                                <span class="btn btn-default btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <?php echo Form::file('logo_input'); ?>

                                                                </span>
                                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                              </div>
                                                            </div>
                                
                                                            <?php if($errors->has('logo_input')): ?>
                                                                <span class="help-block"><?php echo e($errors->first('logo_input')); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            
                                                    <div class="form-group <?php echo e($errors->has('app_name') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('app_name', 'Application name: '); ?>

                                                        <?php echo Form::text('app_name', $settings->app_name , ['class'=>'form-control']); ?>

                            
                                                        <?php if($errors->has('app_name')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('app_name')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group <?php echo e($errors->has('app_author') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('app_author', 'Application slogan: '); ?>

                                                        <?php echo Form::text('app_author', $settings->app_author , ['class'=>'form-control']); ?>

                                                        
                                                        <?php if($errors->has('app_author')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('app_author')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group <?php echo e($errors->has('app_type') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('app_type', 'Business name: '); ?>

                                                        <?php echo Form::text('app_type', $settings->app_type , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('app_type')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('app_type')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group <?php echo e($errors->has('app_vishon') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('app_vishon', 'Application Vishon: '); ?>

                                                        <?php echo Form::text('app_vishon', $settings->app_vishon , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('app_vishon')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('app_vishon')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('address', 'Address: '); ?>

                                                        <?php echo Form::text('address', $settings->address , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('address')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('address')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group  <?php echo e($errors->has('postcode') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('postcode', 'Postcode: '); ?>

                                                        <?php echo Form::text('postcode', $settings->postcode , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('postcode')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('postcode')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group  <?php echo e($errors->has('postcode') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('city', 'City: '); ?>

                                                        <?php echo Form::text('city', $settings->city , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('city')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('city')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group  <?php echo e($errors->has('country') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('country', 'Country: '); ?>

                                                        <?php echo Form::text('country', $settings->country, ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('country')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('country')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group  <?php echo e($errors->has('contact') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('contact', 'Contact Number: '); ?>

                                                        <?php echo Form::text('contact', $settings->contact , ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('contact')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('contact')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                        
                                                    <div class="form-group  <?php echo e($errors->has('mail') ? 'has-error' : ''); ?>">
                                                        <?php echo Form::label('mail', 'E-mail: '); ?>

                                                        <?php echo Form::text('mail', $settings->mail, ['class'=>'form-control']); ?>

                                                        <?php if($errors->has('mail')): ?>
                                                            <span class="help-block"><?php echo e($errors->first('mail')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                    
                                                            
                                                <div class="form-group">
                                                    <?php echo Form::submit('Update Setting', ['class'=>'form-control btn btn-info']); ?>

                                                </div>
                                        
                                        <?php echo Form::close(); ?>

                                        
                                        
                                        </section>

                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    </div>

                </div>
            </div>
            
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>