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
                                    <?php
                                        dd($data['Teacher']->id);
                                    ?>
                                    <label for="title"><?php echo e(trans('Teacher_trans.Email')); ?></label>
                                    <input type="hidden" value="<?php echo e($data['Teacher']->id); ?>" name="id">
                                    <input type="email" name="Email" value="<?php echo e($Teachers->email); ?>" class="form-control">
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
                                    <input type="password" name="Password" value="<?php echo e($Teachers->Password); ?>" class="form-control">
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
                                    <input type="text" name="Name_ar" value="<?php echo e($Teachers->getTranslation('Name', 'ar')); ?>" class="form-control">
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
                                
                                
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="col">
                                    <label for="title"><?php echo e(trans('Teacher_trans.Joining_Date')); ?></label>
                                    <div class='input-group date'>
                                        <input class="form-control" type="text"  id="datepicker-action"  value="<?php echo e($Teachers->Joining_Date); ?>" name="Joining_Date" data-date-format="yyyy-mm-dd"  required>
                                    </div>
                                    <?php $__errorArgs = ['Joining_Date'];
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

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"><?php echo e(trans('Teacher_trans.Address')); ?></label>
                                <textarea class="form-control" name="Address"
                                          id="exampleFormControlTextarea1" rows="4"><?php echo e($Teachers->Address); ?></textarea>
                                <?php $__errorArgs = ['Address'];
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

                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit"><?php echo e(trans('Parent_trans.Next')); ?></button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/Edit.blade.php ENDPATH**/ ?>