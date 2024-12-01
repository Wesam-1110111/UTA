<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    اضافة مادة دراسية
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    اضافة مادة دراسية
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
                            <form action="<?php echo e(route('subjects.update','test')); ?>" method="post" autocomplete="off">
                                <?php echo e(method_field('patch')); ?>

                                <?php echo csrf_field(); ?>
                                <div class="form-row">
                                    <div class="col">
                                        <label for="title">اسم المادة باللغة العربية</label>
                                        <input type="text" name="Name_ar"
                                               value="<?php echo e($subject->getTranslation('name', 'ar')); ?>"
                                               class="form-control">
                                        <input type="hidden" name="id" value="<?php echo e($subject->id); ?>">
                                    </div>

                                    <div class="col">
                                        <label for="title">رمز المادة</label>
                                        <input type="text" name="sub_number"
                                               value="<?php echo e($subject->sub_number); ?>"
                                               class="form-control">
                                    </div>

                                    <div class="col">
                                        <label for="inputState">اسم عضو هيئة التدريس : <span class="text-danger">*</span></label>
                                        <select class="custom-select my-1 mr-sm-2" name="teacher_id">
                                            <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($teacher->id); ?>" <?php echo e($teacher->id == $subject->teacher_id ?'selected':''); ?>><?php echo e($teacher->Name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <br>


                                <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit">حفظ
                                    البيانات
                                </button>
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
    <script>
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "<?php echo e(URL::to('classes')); ?>/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Class_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Class_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Subjects/edit.blade.php ENDPATH**/ ?>