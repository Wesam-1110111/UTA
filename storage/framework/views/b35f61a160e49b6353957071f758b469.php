<?php $__env->startSection('css'); ?>
    
<?php $__env->startSection('title'); ?>
    اضافة محاضرة جديدة
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
اضافة محاضرة جديدة<?php $__env->stopSection(); ?>
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
                            <form action="<?php echo e(route('ALectures.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">عنوان المحاضرة<span class="text-danger">*</span></label>
                                        <input type="text" required name="title" class="form-control">
                                    </div>

                                </div>
                                <br>

                                

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">نوع المحاضرة <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" required name="lecture_type">
                                                <option value="video" selected >فيديو</option>
                                                <option value="pdf" >شيت</option>
                                                <option value="ppt">عرض مرئي</option>

                                            </select>
                                        </div>
                                    </div>

                                    

                                </div><br>

                                
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Grade_id">عضو هيئة التدريس : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" required name="Teacher_id">
                                                <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                                <?php $__currentLoopData = $Teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option  value="<?php echo e($Teacher->id); ?>"><?php echo e($Teacher->Name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Classroom_id">المادة : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" required name="Subject_id">
        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <br>
                                
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="academic_year">المرفقات : <span class="text-danger">*</span></label>
                                            <input type="file" required accept="application/pdf,video/mp4,video/x-m4v,application/vnd.ms-powerpoint," name="file_name" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
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
            $('select[name="Teacher_id"]').on('change', function () {
                var Teacher_id = $(this).val();
                if (Teacher_id) {
                    $.ajax({
                        url: "<?php echo e(URL::to('sub')); ?>/" + Teacher_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Subject_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Subject_id"]').append('<option value="' + key + '">' + value + '</option>');
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/lecture/create.blade.php ENDPATH**/ ?>