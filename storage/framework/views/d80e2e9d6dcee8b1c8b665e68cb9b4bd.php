<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Teacher_trans.Edit_Teacher')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('Teacher_trans.Edit_Teacher')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    <?php if(session()->has('error')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><?php echo e(session()->get('error')); ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="col-xs-12">
                        <div class="col-md-12">

                            <br>
                            <form action="<?php echo e(route('Teachers.update','test')); ?>" method="post">
                             <?php echo e(method_field('patch')); ?>

                             <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col">

                                    <label for="title"><?php echo e(trans('Teacher_trans.Email')); ?></label>
                                    <input type="hidden" value="<?php echo e($Teachers['0']->id); ?>" name="id">
                                    <input type="email" name="Email" value="<?php echo e($Teachers['0']->email); ?>" class="form-control">
                                    <?php $__errorArgs = ['Email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col">
                                    <label for="title"><?php echo e(trans('Teacher_trans.Password')); ?></label>
                                    <input type="password" name="Password" value="<?php echo e($Teachers['0']->Password); ?>" class="form-control">
                                    <?php $__errorArgs = ['Password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <br>


                            <div class="form-row">
                                <div class="col">
                                    <label for="title"><?php echo e(trans('Teacher_trans.Name_ar')); ?></label>
                                    <input type="text" name="Name_ar" value="<?php echo e($Teachers['0']->Name); ?>" class="form-control">
                                    <?php $__errorArgs = ['Name_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                
                            </div>
                            <br>
                            <div class="form-row">
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="Grade_id"><?php echo e(trans('Students_trans.Grade')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Grade_id">
                                            <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                            <?php $__currentLoopData = $Teachers['1']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($Grade->id); ?>" <?php echo e($Grade->id == $Teachers['0']->Grade_id ? 'selected' : ""); ?>><?php echo e($Grade->Name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Classroom_id">
                                            <option value="<?php echo e($Teachers['0']->Classroom_id); ?>"><?php echo e($Teachers['0']->classroom->Name_Class); ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="gender"><?php echo e(trans('Students_trans.gender')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="gender_id">
                                            <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                            <?php $__currentLoopData = $Teachers['2']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($Gender->id); ?>" <?php echo e($Gender->id == $Teachers['0']->Gender_id ? 'selected' : ""); ?>><?php echo e($Gender->Name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>

                            
                            <br>

                            

                            <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit"><?php echo e(trans('Parent_trans.Next')); ?></button>
                    </form>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/edit.blade.php ENDPATH**/ ?>