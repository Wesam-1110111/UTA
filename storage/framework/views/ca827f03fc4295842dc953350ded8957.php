<?php $__env->startSection('css'); ?>
    @toastr_css
    <?php $__env->startSection('title'); ?>
        قائمة المحاضرات الدراسية
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <?php $__env->startSection('PageTitle'); ?>
        قائمة المحاضرات الدراسية
    <?php $__env->stopSection(); ?>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الكلية</th>
                                            <th>التخصص</th>
                                            <th>المادة</th>
                                            <th>الأستاذ</th>
                                            <th>عنوان المحاضرة</th>
                                            
                                            <th>نوع المحاضرة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $Lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                
                                                <td><?php echo e($loop->iteration); ?></td>
                                                <td><?php echo e($Lecture->grade->Name); ?></td>
                                                <td><?php echo e($Lecture->classroom->Name_Class); ?></td>
                                                <td><?php echo e($Lecture->subject->name); ?></td>
                                                <td><?php echo e($Lecture->teacher->Name); ?></td>
                                                <td><?php echo e($Lecture->title); ?></td>
                                                <td>
                                                    <?php if($Lecture->tyep_lecture == 'video'): ?>
                                                        <i  class="fa fa-video-camera">
                                                        <?php elseif($Lecture->tyep_lecture == 'pdf'): ?>
                                                        <i  class="fa fa-file-pdf-o">
                                                        <?php elseif($Lecture->tyep_lecture == 'ppt'): ?>
                                                        <i  class="fa fa-file-powerpoint-o">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo e(url('downloadvid/' . $Lecture->file_name)); ?>" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a target="_blank" href="<?php echo e(url('attachments/Lecture/' . $Lecture->file_name)); ?>" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a>


                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
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
            function alertAbuse() {
                alert("برجاء عدم إعادة تحميل الصفحة بعد دخول الاختبار - في حال تم تنفيذ ذلك سيتم الغاء الاختبار بشكل اوتوماتيك ");
            }
        </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/dashboard/lectures/index.blade.php ENDPATH**/ ?>