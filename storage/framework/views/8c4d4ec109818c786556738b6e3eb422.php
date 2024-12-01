<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    قائمة الحضور والغياب للطلاب
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    قائمة الحضور والغياب للطلاب
<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('status')): ?>
        <div class="alert alert-danger">
            <ul>
                <li><?php echo e(session('status')); ?></li>
            </ul>
        </div>
    <?php endif; ?>

    <h5 style="font-family: 'Cairo', sans-serif;color: red"> تاريخ اليوم : <?php echo e(date('Y-m-d')); ?></h5>
    <form method="post" action="<?php echo e(route('attendance')); ?>" autocomplete="off">

        <?php echo csrf_field(); ?>
        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
               style="text-align: center">
            <thead>
            <tr>
                <th class="alert-success">#</th>
                <th class="alert-success"><?php echo e(trans('Students_trans.name')); ?></th>
                <th class="alert-success"><?php echo e(trans('Students_trans.email')); ?></th>
                <th class="alert-success"><?php echo e(trans('Students_trans.gender')); ?></th>
                <th class="alert-success"><?php echo e(trans('Students_trans.Grade')); ?></th>
                <th class="alert-success"><?php echo e(trans('Students_trans.classrooms')); ?></th>
                <th class="alert-success"><?php echo e(trans('Students_trans.section')); ?></th>
                <th class="alert-success">الحضور والغياب</th>
            </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->index + 1); ?></td>
                        <td><?php echo e($student->name); ?></td>
                        <td><?php echo e($student->email); ?></td>
                        <td><?php echo e($student->gender->Name); ?></td>
                        <td><?php echo e($student->grade->Name); ?></td>
                        <td><?php echo e($student->classroom->Name_Class); ?></td>
                        <td><?php echo e($student->section->Name_Section); ?></td>
                        <td>
    
                            <?php if(isset($student->attendance()->where('attendence_date',date('Y-m-d'))->first()->student_id)): ?>
    
                                <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                                    <input name="attendences[<?php echo e($student->id); ?>]" disabled
                                           <?php echo e($student->attendance()->first()->attendence_status == 1 ? 'checked' : ''); ?>

                                           class="leading-tight" type="radio" value="presence">
                                    <span class="text-success">حضور</span>
                                </label>
    
                                <label class="ml-4 block text-gray-500 font-semibold">
                                    <input name="attendences[<?php echo e($student->id); ?>]" disabled
                                           <?php echo e($student->attendance()->first()->attendence_status == 0 ? 'checked' : ''); ?>

                                           class="leading-tight" type="radio" value="absent">
                                    <span class="text-danger">غياب</span>
                                </label>
    
                            <?php else: ?>
    
                                <label class="block text-gray-500 font-semibold sm:border-r sm:pr-4">
                                    <input name="attendences[<?php echo e($student->id); ?>]" class="leading-tight" type="radio"
                                           value="presence">
                                    <span class="text-success">حضور</span>
                                </label>
    
                                <label class="ml-4 block text-gray-500 font-semibold">
                                    <input name="attendences[<?php echo e($student->id); ?>]" class="leading-tight" type="radio"
                                           value="absent">
                                    <span class="text-danger">غياب</span>
                                </label>
    
                            <?php endif; ?>
    
                            <input type="hidden" name="student_id[]" value="<?php echo e($student->id); ?>">
                            <input type="hidden" name="grade_id" value="<?php echo e($student->Grade_id); ?>">
                            <input type="hidden" name="classroom_id" value="<?php echo e($student->Classroom_id); ?>">
                            <input type="hidden" name="section_id" value="<?php echo e($student->section_id); ?>">
    
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
        </table>
        <P>
            <button class="btn btn-success" type="submit"><?php echo e(trans('Students_trans.submit')); ?></button>
        </P>
    </form><br>
    <!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    @toastr_js
    @toastr_render
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/dashboard/students/index.blade.php ENDPATH**/ ?>