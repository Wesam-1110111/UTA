<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('main_trans.list_students')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('main_trans.list_students')); ?>

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
                                <a href="<?php echo e(route('Students.create')); ?>" class="btn button btn-sm" role="button"
                                   aria-pressed="true"><?php echo e(trans('main_trans.add_student')); ?></a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th><?php echo e(trans('Students_trans.name')); ?></th>
                                            <th><?php echo e(trans('Students_trans.email')); ?></th>
                                            <th><?php echo e(trans('Students_trans.gender')); ?></th>
                                            <th><?php echo e(trans('Students_trans.Grade')); ?></th>
                                            <th><?php echo e(trans('Students_trans.classrooms')); ?></th>
                                            
                                            <th><?php echo e(trans('Students_trans.Processes')); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->index+1); ?></td>
                                            <td><?php echo e($student->name); ?></td>
                                            <td><?php echo e($student->email); ?></td>
                                            <td><?php echo e($student->gender->Name); ?></td>
                                            <td><?php echo e($student->grade->Name); ?></td>
                                            <td><?php echo e($student->classroom->Name_Class); ?></td>
                                            
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="<?php echo e(route('Students.show',$student->id)); ?>"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  عرض بيانات الطالب</a>
                                                            <a class="dropdown-item" href="<?php echo e(route('Students.edit',$student->id)); ?>"><i style="color:green" class="fa fa-edit"></i>&nbsp;  تعديل بيانات الطالب</a>
                                                            
                                                            <a class="dropdown-item" data-target="#Delete_Student<?php echo e($student->id); ?>" data-toggle="modal" href="##Delete_Student<?php echo e($student->id); ?>"><i style="color: red" class="fa fa-trash"></i>&nbsp;  حذف بيانات الطالب</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php echo $__env->make('pages.Students.Delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/index.blade.php ENDPATH**/ ?>