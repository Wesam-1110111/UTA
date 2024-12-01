
<?php $__env->startSection('css'); ?>
   
<?php $__env->startSection('title'); ?>
    الإعدادات
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
الإعدادات
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
                إضافة مسؤول
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الأسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الصلاحية</th>
                            <th><?php echo e(trans('Grades_trans.Processes')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $i++; ?>
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($information->name); ?></td>
                                <td><?php echo e($information->email); ?></td>
                                <td>
                                    <?php if($information->rools == 0): ?>
                                        <?php echo e('مدير النظام'); ?>

                                        <?php else: ?>
                                        <?php echo e('مشرف'); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete<?php echo e($information->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Delete')); ?>"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit<?php echo e($information->id); ?>" tabindex="-1" role="dialog"
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

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="gender">الصلاحية : <span class="text-danger">*</span></label>
                                                                <select class="custom-select mr-sm-2" name="rools">
                                                                    <option value="0">مدير نظام</option>
                                                                    <option value="1">مشرف</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="<?php echo e($information->id); ?>">
                            
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
                            <div class="modal fade" id="delete<?php echo e($information->id); ?>" tabindex="-1" role="dialog"
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
                                            <form action="<?php echo e(route('Profile.destroy', 'test')); ?>" method="post">
                                                <?php echo e(method_field('Delete')); ?>

                                                <?php echo csrf_field(); ?>
                                                <?php echo e(trans('Grades_trans.Warning_Grade')); ?>

                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="<?php echo e($information->id); ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                    <button type="submit"
                                                        class="btn btn-danger"><?php echo e(trans('Students_trans.submit')); ?></button>
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
                    إضافة مسؤول
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="<?php echo e(route('Profile.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="col">
                        <label for="name" class="mr-sm-2">الإسم
                            :<span class="text-danger">*</span></label>
                        <input id="name" required type="text" name="name" class="form-control" required>
                    </div>
                    
                    <div class="col">
                        <label for="email" class="mr-sm-2">البريد الإلكتروني
                            :<span class="text-danger">*</span></label>
                        <input id="email" required type="email" name="email" class="form-control" required>
                    </div>

                    
                    <div class="col">
                        <label for="password" class="mr-sm-2">كلمة السر
                            :<span class="text-danger">*</span></label>
                        <input id="password" required type="password" name="password" class="form-control" required>
                    </div>
                    <br>
    
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="gender">الصلاحية : <span class="text-danger">*</span></label>
                            <select class="custom-select mr-sm-2" required name="rools" required>
                                <option value="0">مدير نظام</option>
                                <option value="1">مشرف</option>
                            </select>
                        </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Settings/settings.blade.php ENDPATH**/ ?>