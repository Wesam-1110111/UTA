
<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    قائمة المناهج الدراسية
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
قائمة المناهج الدراسية 
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
                                <a href="<?php echo e(route('Lectures.create')); ?>" class="btn btn-primary btn-sm" role="button"
                                   aria-pressed="true">اضافة محاضرة جديدة</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم المادة</th>
                                            <th>عنوان المحاضرة </th>
                                            <th>نوع المحاضرة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $Lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($Lecture->subject->name); ?></td>
                                                <td><?php echo e($Lecture->title); ?></td>
                                                <td><?php echo e($Lecture->tyep_lecture); ?></td>

                                                <td>
                                                    <a href="<?php echo e(url('downloadvid/' . $Lecture->file_name)); ?>" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a href="<?php echo e(route('Lectures.edit',$Lecture->id)); ?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_book<?php echo e($Lecture->id); ?>" title="حذف"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                        <?php echo $__env->make('pages.Teachers.dashboard.lecture.destroy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<style>
    .pagination .page-item.active .page-link {
    border-color: #03a9f4 !important;
    background-color: #03a9f4 !important;
    color: #fff !important;
}
</style>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Teachers/dashboard/lecture/index.blade.php ENDPATH**/ ?>