<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('main_trans.add_student')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('main_trans.add_student')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
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

                <form method="post"  action="<?php echo e(route('Students.store')); ?>" autocomplete="off" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <h6 style="font-family: 'Cairo', sans-serif;"><?php echo e(trans('Students_trans.personal_information')); ?></h6><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>اسم الطالب : <span class="text-danger">*</span></label>
                                    <input  type="text" required name="name_ar"  class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><?php echo e(trans('Students_trans.r_number')); ?> :</label>
                                    <input  type="number" required name="r_number" class="form-control" >
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            


                            



                            



                            

                            

                            

                        </div>

                    <h6 style="font-family: 'Cairo', sans-serif;"><?php echo e(trans('Students_trans.Student_information')); ?></h6><br>
                    <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Grade_id"><?php echo e(trans('Students_trans.Grade')); ?> : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" required name="Grade_id">
                                        <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                        <?php $__currentLoopData = $my_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option  value="<?php echo e($c->id); ?>"><?php echo e($c->Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" required name="Classroom_id">

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender"><?php echo e(trans('Students_trans.gender')); ?> : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" required  name="gender_id">
                                        <option  selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                        <?php $__currentLoopData = $Genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option   value="<?php echo e($Gender->id); ?>"><?php echo e($Gender->Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            

                        
                        </div><br>

                    



                    <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit"><?php echo e(trans('Students_trans.submit')); ?></button>
                </form>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Students/add.blade.php ENDPATH**/ ?>