<?php $__env->startSection('content'); ?>

            <!--main content start-->
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
                                    
                                    
                                    <div class="text-center">
                                        <?php echo $__env->make('admin.partials.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions table-responsive">
                                                <tbody><tr>
                                                        <td width="200">Title</td>
                                                        <td>Details</td>
                                                    </tr>
                                                
                                                </tbody>
                                                <tbody>
                                                        
                                                        <tr>
                                                            <td>Application name</td>
                                                            <td><?php echo e($settings->app_name); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Application Author</td>
                                                            <td><?php echo e($settings->app_author); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Application Type</td>
                                                            <td><?php echo e($settings->app_type); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Application Vishon</td>
                                                            <td><?php echo e($settings->app_vishon); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Address</td>
                                                            <td><?php echo e($settings->address); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Postcode</td>
                                                            <td><?php echo e($settings->postcode); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>City</td>
                                                            <td><?php echo e($settings->city); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Country</td>
                                                            <td><?php echo e($settings->country); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Contact(Number)</td>
                                                            <td><?php echo e($settings->contact); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>E-mail</td>
                                                            <td><?php echo e($settings->mail); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Application Logo</td>
                                                            <td> <img src="<?php echo e($settings->logo); ?>" height="100px" width="auto"></td>
                                                        </tr>
                                                        
                                                        
                                                        <tr>
                                                            <td>Action</td>
                                                            <td>
                                                                <a href="<?php echo e(action('SettingsController@edit',$settings->id)); ?>" class="btn btn-info btn-block">Edit</a>                
                                                            </td>
                                                        </tr>
                                                        
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    </div>

                </div>
            </div>
            <!--main content end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>