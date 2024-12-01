
<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    قائمة المقررات الدراسية
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
قائمة المقررات الدراسية 
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
                                <a href="<?php echo e(route('Summarys.create')); ?>" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة ملخص جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>عنوان الملخص</th>
                                            <th>اسم المادة</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            <th>الفصل</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $Summarys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Summary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo e($Summary->student_name); ?></td>
                                                <td><?php echo e($Summary->title); ?></td>
                                                <td><?php echo e($Summary->subject->name); ?></td>
                                                <td><?php echo e($Summary->grade->Name); ?></td>
                                                <td><?php echo e($Summary->classroom->Name_Class); ?></td>
                                                <td><?php echo e($Summary->section->Name_Section); ?></td>

                                                <td>
                                                    <a href="<?php echo e(url('download/' . $Summary->file_name)); ?>" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a target="_blank" href="<?php echo e(url('attachments/pdf/' . $Summary->file_name)); ?>" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a>

                                                    
                                                </td>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/dashboard/Summaries/index.blade.php ENDPATH**/ ?>