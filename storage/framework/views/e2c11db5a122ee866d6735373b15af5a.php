<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    تعديل المحاضرة <?php echo e($Lecture->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
تعديل المحاضرة  <?php echo e($Lecture->title); ?>

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
                            <form action="<?php echo e(route('Lectures.update','test')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">عنوان المحاضرة</label>
                                        <input type="text" name="title" value="<?php echo e($Lecture->title); ?>" class="form-control">
                                        <input type="hidden" name="id" value="<?php echo e($Lecture->id); ?>" class="form-control">
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">نوع المحاضرة : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="tyep_lecture">
                                                <option selected ><?php echo e($Lecture->tyep_lecture); ?></option>
                                                <option value="video" >فيديو</option>
                                                <option value="pdf" >شيت</option>
                                                <option value="ppt">عرض مرئي</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                    
                                </div><br>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Subject_id">المادة الدراسية : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="Subject_id">
                                                <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                                <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option   value="<?php echo e($Subject->id); ?>" <?php echo e($Lecture->subject_id == $Subject->id ?'selected':''); ?>><?php echo e($Subject->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>





                                </div><br>
                                <div class="form-row">
                                    <div class="col">

                                        <?php if($Lecture->tyep_lecture == 'pdf'): ?>
                                        <embed src="<?php echo e(URL::asset('attachments/lecture/'.$Lecture->file_name)); ?>" type="application/pdf"   height="150px" width="100px"><br><br>
                                            <?php elseif($Lecture->tyep_lecture == 'video'): ?>
                                            
                                                <video type="video/mp4,video/x-m4v"   height="150px" width="150px" controls>
                                                    <source src="<?php echo e(URL::asset('attachments/lecture/'.$Lecture->file_name)); ?>" type="video/mp4">
                                                  Your browser does not support the video tag.
                                                  </video>
                                            <?php elseif($Lecture->tyep_lecture == 'ppt'): ?>
                                            
                                        <?php endif; ?>
                                        
                                        <div class="form-group">
                                            <label for="academic_year">المرفقات : <span class="text-danger">*</span></label>
                                            <input type="file" accept="application/pdf,video/mp4,video/x-m4v,application/vnd.ms-powerpoint,"  name="file_name">
                                        </div>

                                    </div>
                                </div>

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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/dashboard/lecture/edit.blade.php ENDPATH**/ ?>