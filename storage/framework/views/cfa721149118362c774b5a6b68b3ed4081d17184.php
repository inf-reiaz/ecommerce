<?php $__env->startSection('title'); ?>
Login 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="banner-bottom">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                
                <div class="widget account-details">
                    <h2 class="widget-title">Login</h2>
                </div>
                
                <form class="form-horizontal" action="<?php echo e(action('PublicPagesController@postLogin')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?> 
                  
                  <div class="form-group<?php echo e($errors->has('user_email') ? ' has-error' : ''); ?>">
                    <div class="col-sm-12">
                        
                        <label for="email">Eamil</label>
                        
                      <input type="email" class="form-control" name="user_email"  placeholder="Email"/>
                      
                        <?php if($errors->has('user_email')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('user_email')); ?></strong>
                            </span>
                        <?php endif; ?>
                        
                    </div>
                  </div>
                  <div class="form-group<?php echo e($errors->has('user_password') ? ' has-error' : ''); ?>">
                    <div class="col-sm-12">
                        
                        <label for="password">Password</label>
                        
                      <input type="password" class="form-control" name="user_password" placeholder="Password"/>

                        <?php if($errors->has('user_password')): ?>
                            <span class="help-block">
                                <strong><?php echo e($errors->first('user_password')); ?></strong>
                            </span>
                        <?php endif; ?>
                        
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-default button-1 check-ct">Log In </button>
                      <span> <a href="<?php echo e(action('PublicPagesController@forgotPassword')); ?>">   Forgot password ?  </a></span>
                    </div>
                  </div>
                </form>	
            </div>
            
            <div class="col-md-6">
                <div class="widget account-details">
                    <h2 class="widget-title">Registration</h2>
                </div>
                <form class="form-horizontal" action="<?php echo e(action('PublicPagesController@postReg')); ?>" method="POST">
                          <?php echo e(csrf_field()); ?> 
                          
                          <div class="form-group<?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Name</label>
                        
                              <input type="text" class="form-control" name="firstname"  placeholder="Name"/>
                              
                                <?php if($errors->has('firstname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                          </div>
                          
                          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Email</label>
                              <input type="email" class="form-control" name="email"  placeholder="Email"/>
                              
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                          </div>
                          
                          <div class="form-group<?php echo e($errors->has('contact') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Phone Number</label>
                              <input type="number" class="form-control" name="contact"  placeholder="01768-000000"/>
                              
                                <?php if($errors->has('contact')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('contact')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                          </div>
                          
                          <div class="form-group<?php echo e($errors->has('city_id') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Choose your City</label>
                            
                              <?php echo Form::select('city_id', App\City::pluck('name', 'id'),null, ['class' => 'form-control mb-10', 'placeholder' => 'Choose your City']); ?>

                              
                                <?php if($errors->has('city_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('city_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                          </div>
                          
                          
                          <div class="form-group<?php echo e($errors->has('address') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Address</label>
                            
                              <textarea class="form-control" rows="5" name="address" rows="10"  placeholder="Address" ></textarea>
                              
                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
                            </div>
                          </div>
                                        
                          
                          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <div class="col-sm-12">
                        
                            <label for="password">Password</label>
                            
                              <input type="password" class="form-control" name="password" placeholder="Password"/>
                              
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.layout.app_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>