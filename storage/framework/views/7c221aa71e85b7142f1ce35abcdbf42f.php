<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Students_trans.Student_Edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('Students_trans.Student_Edit')); ?>

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

                    <form action="<?php echo e(route('Students.update','test')); ?>" method="post" autocomplete="off">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>
                    <h6 style="font-family: 'Cairo', sans-serif;"><?php echo e(trans('Students_trans.personal_information')); ?></h6><br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>اسم الطالب : <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($Students->getTranslation('name','ar')); ?>" type="text" name="name_ar"  class="form-control">
                                    <input type="hidden" name="id" value="<?php echo e($Students->id); ?>">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>رقم القيد : <span class="text-danger">*</span></label>
                                    <input value="<?php echo e($Students->r_number); ?>" class="form-control" name="r_number" type="number" >
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
                                    <select class="custom-select mr-sm-2" name="Grade_id">
                                        <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                        <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($Grade->id); ?>" <?php echo e($Grade->id == $Students->Grade_id ? 'selected' : ""); ?>><?php echo e($Grade->Name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="Classroom_id">
                                        <option value="<?php echo e($Students->Classroom_id); ?>"><?php echo e($Students->classroom->Name_Class); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender"><?php echo e(trans('Students_trans.gender')); ?> : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="gender_id">
                                        <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                        <?php $__currentLoopData = $Genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($Gender->id); ?>" <?php echo e($Gender->id == $Students->gender_id ? 'selected' : ""); ?>><?php echo e($Gender->Name); ?></option>
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
    <script>
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "<?php echo e(URL::to('Get_classrooms')); ?>/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Classroom_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Classroom_id"]').append('<option selected disabled ><?php echo e(trans('Parent_trans.Choose')); ?>...</option>');
                                $('select[name="Classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>


    <script>
        $(document).ready(function () {
            $('select[name="Classroom_id"]').on('change', function () {
                var Classroom_id = $(this).val();
                if (Classroom_id) {
                    $.ajax({
                        url: "<?php echo e(URL::to('Get_Sections')); ?>/" + Classroom_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="section_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });

                        },
                    });
                }

                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/edit.blade.php ENDPATH**/ ?>