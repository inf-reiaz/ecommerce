
<!DOCTYPE html>
<html>
    <head>
        <?php echo $__env->make('admin.partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>

        <div id="ui" class="ui">

            <!--header start-->
            <?php echo $__env->make('admin.navs.head_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--header end-->

            <!--sidebar start-->
            <?php echo $__env->make('admin.navs.sidebar_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--sidebar end-->

            <!--main content start-->
            <?php echo $__env->yieldContent('content'); ?>
            <!--main content start-->

            <!--footer start-->
            <?php echo $__env->make('admin.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--footer end-->

        </div>

        <!-- inject:js -->
        <script src="<?php echo e(asset('/public/admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/bower_components/autosize/dist/autosize.min.js')); ?>"></script>
        <!-- endinject -->

        <!--sparkline-->
        <script src="<?php echo e(asset('/public/admin/bower_components/bower-jquery-sparkline/dist/jquery.sparkline.retina.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/assets/js/init-sparkline.js')); ?>"></script>


        <!--horizontal-timeline-->
        <script src="<?php echo e(asset('/public/admin/assets/js/horizontal-timeline/js/jquery.mobile.custom.min.js')); ?>"></script>
        <script src="<?php echo e(asset('/public/admin/assets/js/horizontal-timeline/js/main.js')); ?>"></script>
        <!-- Common Script   -->
        <script src="<?php echo e(asset('/public/admin/dist/js/main.js')); ?>"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
        
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment-with-locales.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    
        $('#d1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });
        
        $('#d2').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            showClear: true
        });
        
</script>
        <?php echo $__env->yieldContent('js'); ?>
        
    </body>
</html>
