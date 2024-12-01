<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Grades_trans.title_page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
<?php echo e(trans('main_trans.Grades')); ?>

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

            <button type="button" class="button x-small" style="" data-toggle="modal" data-target="#exampleModal">
                <?php echo e(trans('Grades_trans.add_Grade')); ?>

            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo e(trans('Grades_trans.Name')); ?></th>
                            <th><?php echo e(trans('Grades_trans.Notes')); ?></th>
                            <th><?php echo e(trans('Grades_trans.Processes')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $i++; ?>
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($Grade->Name); ?></td>
                                <td><?php echo e($Grade->Notes); ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit<?php echo e($Grade->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Edit')); ?>"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete<?php echo e($Grade->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Delete')); ?>"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit<?php echo e($Grade->id); ?>" tabindex="-1" role="dialog"
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
                                            <form action="<?php echo e(route('Grades.update', 'test')); ?>" method="post"  >
                                                <?php echo e(method_field('patch')); ?>

                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name"
                                                            class="mr-sm-2">أسم الكلية
                                                            :</label>
                                                        <input id="Name"  type="text" name="Name"
                                                            class="form-control"
                                                            value="<?php echo e($Grade->Name); ?>"
                                                            required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="<?php echo e($Grade->id); ?>">
                                                    </div>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1"><?php echo e(trans('Grades_trans.Notes')); ?>

                                                        :</label>
                                                    <textarea class="form-control" name="Notes"
                                                        id="exampleFormControlTextarea1"
                                                        rows="3"><?php echo e($Grade->Notes); ?></textarea>
                                                </div>
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                    <button type="submit"
                                                        class="btn"><?php echo e(trans('Grades_trans.submit')); ?></button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete<?php echo e($Grade->id); ?>" tabindex="-1" role="dialog"
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
                                            <form action="<?php echo e(route('Grades.destroy', 'test')); ?>" method="post">
                                                <?php echo e(method_field('Delete')); ?>

                                                <?php echo csrf_field(); ?>
                                                <?php echo e(trans('Grades_trans.Warning_Grade')); ?>

                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="<?php echo e($Grade->id); ?>">

                                                    
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
                    <?php echo e(trans('Grades_trans.add_Grade')); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="<?php echo e(route('Grades.store')); ?>" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col">
                            <label for="Name"  class="mr-sm-2">اسم الكلية
                                :</label>
                            <input id="Name" required type="text" name="Name" class="form-control">
                        </div>
                        
                    </div><br><br>
                    <div class="form-group">
                        <div class="col">
                        <label for="academic_year">شعار الكلية : <span class="text-danger">*</span></label>
                                <input type="file" accept="" required  name="file_name">
                        </div>
          
                </div>
                
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><?php echo e(trans('Grades_trans.Notes')); ?>

                            :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    
                    <br><br>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                <button type="submit" class="btn"><?php echo e(trans('Grades_trans.submit')); ?></button>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Grades/Grades.blade.php ENDPATH**/ ?>