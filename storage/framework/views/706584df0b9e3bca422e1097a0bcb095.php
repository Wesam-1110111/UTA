<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    قائمة المواد الدراسية
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    قائمة المواد الدراسية
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
                                <a href="<?php echo e(route('subjects.create')); ?>" class="btn btn-primary btn-sm" role="button"
                                   aria-pressed="true">اضافة مادة جديدة</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            
                                            <th>عضو هيئة التدريس</th>
                                            <th>اسم المادة</th>
                                            <th>رمز المادة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($subject->grade->Name); ?></td>
                                            <td><?php echo e($subject->classroom->Name_Class); ?></td>
                                            
                                            <td><?php echo e($subject->teacher->Name); ?></td>
                                            <td><?php echo e($subject->name); ?></td>
                                            <td><?php echo e($subject->sub_number); ?></td>

                                                <td>
                                                    <a href="<?php echo e(route('subjects.edit',$subject->id)); ?>" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_subject<?php echo e($subject->id); ?>" title="حذف"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="delete_subject<?php echo e($subject->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="<?php echo e(route('subjects.destroy','test')); ?>" method="post">
                                                        <?php echo e(method_field('delete')); ?>

                                                        <?php echo e(csrf_field()); ?>

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">حذف مادة دراسية</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> هل أنت متأكد من عملية الحذف ؟</p>
                                                            <input type="hidden" name="id"  value="<?php echo e($subject->id); ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal"><?php echo e(trans('My_Classes_trans.Close')); ?></button>
                                                                <button type="submit"
                                                                        class="btn btn-danger"><?php echo e(trans('Students_trans.submit')); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Subjects/index.blade.php ENDPATH**/ ?>