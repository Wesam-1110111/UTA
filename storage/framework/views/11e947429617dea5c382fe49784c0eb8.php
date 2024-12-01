<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Students_trans.Student_details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('Students_trans.Student_details')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">
                        <div class="tab nav-border">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" style="border-radius: 23px;" id="home-02-tab" data-toggle="tab" href="#home-02"
                                       role="tab" aria-controls="home-02"
                                       aria-selected="true"><?php echo e(trans('Students_trans.Student_details')); ?></a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home-02" role="tabpanel"
                                     aria-labelledby="home-02-tab">
                                    <table class="table table-striped table-hover" style="text-align:center">
                                        <tbody>
                                        <tr>
                                            <th scope="row"><?php echo e(trans('Students_trans.name')); ?></th>
                                            <td><?php echo e($Student->name); ?></td>
                                            <th scope="row"><?php echo e(trans('Students_trans.email')); ?></th>
                                            <td><?php echo e($Student->email); ?></td>
                                            <th scope="row"><?php echo e(trans('Students_trans.gender')); ?></th>
                                            <td><?php echo e($Student->gender->Name); ?></td>
                                            <th scope="row"><?php echo e(trans('Students_trans.r_number')); ?></th>
                                            <td><?php echo e($Student->r_number); ?></td>
                                        </tr>

                                        <tr>
                                            <th scope="row"><?php echo e(trans('Students_trans.Grade')); ?></th>
                                            <td><?php echo e($Student->grade->Name); ?></td>
                                            <th scope="row"><?php echo e(trans('Students_trans.classrooms')); ?></th>
                                            <td><?php echo e($Student->classroom->Name_Class); ?></td>
                                            
                                        </tr>

                                        
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="profile-02" role="tabpanel"
                                     aria-labelledby="profile-02-tab">
                                    <div class="card card-statistics">
                                        <div class="card-body">
                                            <form method="post" action="<?php echo e(route('Upload_attachment')); ?>" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label
                                                            for="academic_year"><?php echo e(trans('Students_trans.Attachments')); ?>

                                                            : <span class="text-danger">*</span></label>
                                                        <input type="file" accept="image/*" name="photos[]" multiple required>
                                                        <input type="hidden" name="student_name" value="<?php echo e($Student->name); ?>">
                                                        <input type="hidden" name="student_id" value="<?php echo e($Student->id); ?>">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <button type="submit" class="button button-border x-small">
                                                       <?php echo e(trans('Students_trans.submit')); ?>

                                                </button>
                                            </form>
                                        </div>
                                        <br>
                                        <table class="table center-aligned-table mb-0 table table-hover"
                                               style="text-align:center">
                                            <thead>
                                            <tr class="table-secondary">
                                                <th scope="col">#</th>
                                                <th scope="col"><?php echo e(trans('Students_trans.filename')); ?></th>
                                                <th scope="col"><?php echo e(trans('Students_trans.created_at')); ?></th>
                                                <th scope="col"><?php echo e(trans('Students_trans.Processes')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $Student->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attachment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr style='text-align:center;vertical-align:middle'>
                                                    <td><?php echo e($loop->iteration); ?></td>
                                                    <td><?php echo e($attachment->filename); ?></td>
                                                    <td><?php echo e($attachment->created_at->diffForHumans()); ?></td>
                                                    <td colspan="2">
                                                        <a class="btn btn-outline-info btn-sm"
                                                           href="<?php echo e(url('Download_attachment')); ?>/<?php echo e($attachment->imageable->name); ?>/<?php echo e($attachment->filename); ?>"
                                                           role="button"><i class="fas fa-download"></i>&nbsp; <?php echo e(trans('Students_trans.Download')); ?></a>

                                                        <button type="button" class="btn btn-outline-danger btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#Delete_img<?php echo e($attachment->id); ?>"
                                                                title="<?php echo e(trans('Grades_trans.Delete')); ?>"><?php echo e(trans('Students_trans.delete')); ?>

                                                        </button>

                                                    </td>
                                                </tr>
                                                <?php echo $__env->make('pages.Students.Delete_img', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/show.blade.php ENDPATH**/ ?>