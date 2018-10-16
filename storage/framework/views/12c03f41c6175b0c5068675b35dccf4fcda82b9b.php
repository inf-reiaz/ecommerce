<?php $__env->startSection('content'); ?>

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Site Met Tag Settings</h1>
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
                                        Site Met Tag Settings
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
                                                            <td>Meta Author name</td>
                                                            <td><?php echo e($meta->author); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Meta Keywords</td>
                                                            <td><?php echo e($meta->keywords); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Meta Description</td>
                                                            <td><?php echo e($meta->description); ?></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Action</td>
                                                            <td>
                                                                <a href="<?php echo e(action('MetaSettingsController@edit',$meta->id)); ?>" class="btn btn-info btn-block">Edit</a>                
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