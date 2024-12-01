<?php $__env->startSection('css'); ?>

<?php $__env->startSection('title'); ?>
    تقرير الحضور والغياب
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    تقارير الحضور والغياب
<?php $__env->stopSection(); ?>
<!-- breadcrumb -->

<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="post"  action="<?php echo e(route('attendance.search')); ?>" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <h6 style="font-family: 'Cairo', sans-serif;color: blue">معلومات البحث</h6><br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="student">الطلاب</label>
                                <select class="custom-select mr-sm-2" name="student_id">
                                    <option value="0">الكل</option>
                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($student->id); ?>"><?php echo e($student->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="card-body datepicker-form">
                            <div class="input-group" data-date-format="yyyy-mm-dd">
                                <input type="text"  class="form-control range-from date-picker-default" placeholder="تاريخ البداية" required name="from">
                                <span class="input-group-addon">الي تاريخ</span>
                                <input class="form-control range-to date-picker-default" placeholder="تاريخ النهاية" type="text" required name="to">
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit"><?php echo e(trans('Students_trans.submit')); ?></button>
                </form>
                <?php if(isset($Students)): ?>
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                           style="text-align: center">
                        <thead>
                        <tr>
                            <th class="alert-success">#</th>
                            <th class="alert-success"><?php echo e(trans('Students_trans.name')); ?></th>
                            <th class="alert-success"><?php echo e(trans('Students_trans.Grade')); ?></th>
                            <th class="alert-success"><?php echo e(trans('Students_trans.section')); ?></th>
                            <th class="alert-success">التاريخ</th>
                            <th class="alert-warning">الحالة</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $Students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index+1); ?></td>
                                <td><?php echo e($student->students->name); ?></td>
                                <td><?php echo e($student->grade->Name); ?></td>
                                <td><?php echo e($student->section->Name_Section); ?></td>
                                <td><?php echo e($student->attendence_date); ?></td>
                                <td>

                                    <?php if($student->attendence_status == 0): ?>
                                        <span class="btn-danger">غياب</span>
                                    <?php else: ?>
                                        <span class="btn-success">حضور</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php echo $__env->make('pages.Students.Delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/dashboard/students/attendance_report.blade.php ENDPATH**/ ?>