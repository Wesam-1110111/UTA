<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Teacher_trans.Add_Teacher')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('Teacher_trans.Add_Teacher')); ?>

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
                            <form action="<?php echo e(route('Teachers.store')); ?>" method="post">
                             <?php echo csrf_field(); ?>
                            <div class="form-row">
                                <div class="col">
                                    <label for="title"><?php echo e(trans('Teacher_trans.Email')); ?></label>
                                    <input type="email" required name="Email" class="form-control">
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
                                    <input type="password" required name="Password" class="form-control">
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
                                    <label for="title">اسم عضو هيئة التدريس</label>
                                    <input type="text" required name="Name_ar" class="form-control">
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
                                        <select class="custom-select mr-sm-2" required name="Grade_id">
                                            <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                            <?php $__currentLoopData = App\Models\Grade::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option  value="<?php echo e($Grade->id); ?>"><?php echo e($Grade->Name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Classroom_id">
    
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="inputState"><?php echo e(trans('Teacher_trans.Gender')); ?></label>
                                    <select class="custom-select my-1 mr-sm-2" required name="Gender_id">
                                        <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                        <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($gender->id); ?>"><?php echo e($gender->Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['Gender_id'];
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

                            
                            <br>
                            <input type="hidden" name="status" value="1">

                            

                            <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit">حفظ</button>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Teachers/create.blade.php ENDPATH**/ ?>