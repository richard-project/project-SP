<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
     <?php echo $__env->make('template.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>




<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <?php echo $__env->make('template.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </nav>

    <!--header-->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <!--/header-->

        <div class="clearfix"></div>

    <!-- [ Main Content ] start -->
    <!-- <div class="content"> -->
        <section class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </section>
    <!-- </div> -->
    <!-- [ Main Content ] end -->

    <!-- Scripts -->
    <script src="<?php echo e(URL::asset('js/vendor-all.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>    
    <script src="<?php echo e(URL::asset('js/pcoded.min.js')); ?>"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <?php echo $__env->yieldContent('script'); ?>

   
</body>
</html>
