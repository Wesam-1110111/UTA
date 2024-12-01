<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div class="wrapper" style="font-family: 'Cairo', sans-serif">

        <!--=================================
 preloader -->

 <div id="pre-loader">
    <img src="<?php echo e(URL::asset('assets/images/pre-loader/Rolling@1x-1.0s-200px-200px.svg')); ?>" alt="">
</div>

        <!--=================================
 preloader -->

        <?php echo $__env->make('layouts.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

          <?php echo $__env->yieldContent('page-header'); ?>
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="font-family: 'Cairo', sans-serif"><?php echo $__env->yieldContent('PageTitle'); ?></h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard')); ?>" class="default-color"><?php echo e(trans('main_trans.Dashboard')); ?></a></li>
                <li class="breadcrumb-item active"><?php echo $__env->yieldContent('PageTitle'); ?></li>
            </ol>
        </div>
    </div>

            <?php echo $__env->yieldContent('content'); ?>

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    <?php echo $__env->make('layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/layouts/master.blade.php ENDPATH**/ ?>