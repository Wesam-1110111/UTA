<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    حصص اونلاين
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    حصص اونلاين
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
                                <a href="<?php echo e(route('online_zoom_classes.create')); ?>" class="btn btn-success" role="button" aria-pressed="true">اضافة حصة اونلاين جديدة</a>
                                <a class="btn btn-warning" href="<?php echo e(route('indirect.teacher.create')); ?>">اضافة حصة اوفلاين جديدة</a>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>المرحلة</th>
                                            <th>الصف</th>
                                            <th>القسم</th>
                                            <th>المعلم</th>
                                            <th>عنوان الحصة</th>
                                            <th>تاريخ البداية</th>
                                            <th>وقت الحصة</th>
                                            <th>رابط الحصة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $online_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $online_classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($online_classe->grade->Name); ?></td>
                                            <td><?php echo e($online_classe->classroom->Name_Class); ?></td>
                                            <td><?php echo e($online_classe->section->Name_Section); ?></td>
                                                <td><?php echo e($online_classe->created_by); ?></td>
                                                <td><?php echo e($online_classe->topic); ?></td>
                                                <td><?php echo e($online_classe->start_at); ?></td>
                                                <td><?php echo e($online_classe->duration); ?></td>
                                                <td class="text-danger"><a href="<?php echo e($online_classe->join_url); ?>" target="_blank">انضم الان</a></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Delete_receipt<?php echo e($online_classe->meeting_id); ?>" ><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php echo $__env->make('pages.Teachers.dashboard.online_classes.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/dashboard/online_classes/index.blade.php ENDPATH**/ ?>