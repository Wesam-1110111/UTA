<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
الإشعارات

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
الإشعارات

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="row">


<?php if($errors->any()): ?>
    <div class="error"><?php echo e($errors->first('Name')); ?></div>
<?php endif; ?>



<div class="col-xl-12 mb-30">
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

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                إضافة إشعار
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>بخصوص</th>
                            <th>موجه إلى</th>
                            <th>الكلية</th>
                            <th>القسم</th>
                            <th><?php echo e(trans('Grades_trans.Processes')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $Notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $i++; ?>
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($Notification->title); ?></td>
                                <td>
                                    <?php if($Notification->rools == 1): ?>
                                        <?php echo e('أعضاء هيئة التدريس'); ?>

                                        <?php else: ?>
                                        <?php echo e('الطلاب'); ?>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($Notification->grade->Name); ?></td>
                                <td><?php echo e($Notification->classroom->Name_Class); ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit<?php echo e($Notification->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Edit')); ?>"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete<?php echo e($Notification->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Delete')); ?>"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit<?php echo e($Notification->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                <?php echo e(trans('Grades_trans.edit_Grade')); ?>

                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="<?php echo e(route('Notifications.update', 'test')); ?>" method="post">
                                                <?php echo e(method_field('patch')); ?>

                                                <?php echo csrf_field(); ?>
                                                <div class="row">

                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">بخصوص
                                                            :</label>
                                                        <input id="Name" value="<?php echo e($Notification->title); ?>" type="text" name="title" class="form-control">
                                                    </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="gender">موجه إلى : <span class="text-danger">*</span></label>
                                                                <select class="custom-select mr-sm-2" name="rools">
                                                                    <option value="2">الطلاب</option>
                                                                    <option value="1">أعضاء هيئة التدريس</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="<?php echo e($Notification->id); ?>">
                            
                                                </div>

                                                <div class="form-group">
                                                    <label for="Grade_id"><?php echo e(trans('Students_trans.Grade')); ?> : <span class="text-danger">*</span></label>
                                                    <select class="custom-select mr-sm-2" name="Grade_id">
                                                        <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                                        <?php $__currentLoopData = $my_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_classe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($my_classe->id); ?>" <?php echo e($my_classe->id == $Notification->grade_id ? 'selected' : ""); ?>><?php echo e($my_classe->Name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                                    <select class="custom-select mr-sm-2" name="Classroom_id">
                                                        <option value="<?php echo e($Notification->classroom_id); ?>"><?php echo e($Notification->classroom->Name_Class); ?></option>
                                                    </select>
                                                </div>
                



                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">الإشعار
                                                        :</label>
                                                    <textarea class="form-control" name="Notes"
                                                        id="exampleFormControlTextarea1"
                                                        rows="3"><?php echo e($Notification->Notes); ?></textarea>
                                                </div>
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                    <button type="submit"
                                                        class="btn btn-success"><?php echo e(trans('Grades_trans.submit')); ?></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete<?php echo e($Notification->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                هل انت متاكد من عملية الحذف ؟
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('Notifications.destroy', 'test')); ?>" method="post">
                                                <?php echo e(method_field('Delete')); ?>

                                                <?php echo csrf_field(); ?>
                                                <?php echo e(trans('Grades_trans.Warning_Grade')); ?>

                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="<?php echo e($Notification->id); ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                    <button type="submit"
                                                        class="btn btn-danger"><?php echo e(trans('Grades_trans.submit')); ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    إضافة إشعار
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="<?php echo e(route('Notifications.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">

                        <div class="col">
                            <label for="Name" class="mr-sm-2">بخصوص
                                :</label>
                            <input id="Name" type="text" name="title" class="form-control">
                        </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">موجه إلى : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="rools">
                                        <option value="2">الطلاب</option>
                                        <option value="1">أعضاء هيئة التدريس</option>
                                    </select>
                                </div>
                            </div>

                    </div>

                                    <div class="form-group">
                                        <label for="Grade_id"><?php echo e(trans('Students_trans.Grade')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Grade_id">
                                            <option selected disabled><?php echo e(trans('Parent_trans.Choose')); ?>...</option>
                                            <?php $__currentLoopData = $my_classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option  value="<?php echo e($c->id); ?>"><?php echo e($c->Name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="Classroom_id"><?php echo e(trans('Students_trans.classrooms')); ?> : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Classroom_id">
    
                                        </select>
                                    </div>
    

                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الإشعار
                            :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                <button type="submit" class="btn btn-success"><?php echo e(trans('Grades_trans.submit')); ?></button>
            </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Notifications/Notifications.blade.php ENDPATH**/ ?>