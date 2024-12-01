
<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
قائمة الطلبة المتابعين للمنهج
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
قائمة الطلبة المتابعين للمنهج
<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الطالب</th>
                                            <th>رقم القيد</th>
                                            <th>تاريخ ووقت المتابعة</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $viewers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $viewer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->index+1); ?></td>
                                            <td><?php echo e($viewer->Student->name); ?></td>
                                            <td><?php echo e($viewer->Student->r_number); ?></td>
                                            <td><?php echo e($viewer->created_at); ?></td>
                                                
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    @toastr_js
    @toastr_render
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Teachers/dashboard/viewers/index.blade.php ENDPATH**/ ?>