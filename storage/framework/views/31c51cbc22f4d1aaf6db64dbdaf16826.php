<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">

            <?php if(auth('web')->check()): ?>
                <?php echo $__env->make('layouts.main-sidebar.admin-main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if(auth('student')->check()): ?>
                <?php echo $__env->make('layouts.main-sidebar.student-main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if(auth('teacher')->check()): ?>
                <?php echo $__env->make('layouts.main-sidebar.teacher-main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if(auth('parent')->check()): ?>
                <?php echo $__env->make('layouts.main-sidebar.parent-main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

        </div>

        <!-- Left Sidebar End-->

        <!--=================================
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/layouts/main-sidebar.blade.php ENDPATH**/ ?>