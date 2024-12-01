<?php $__env->startSection('css'); ?>
    @toastr_css


<?php $__env->startSection('title'); ?>
    <?php echo e(trans('My_Classes_trans.title_page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
<?php echo e(trans('My_Classes_trans.title_page')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="row">

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
                <?php echo e(trans('My_Classes_trans.add_class')); ?>

            </button>

                <button type="button" class="button x-small" id="btn_delete_all">
                    <?php echo e(trans('My_Classes_trans.delete_checkbox')); ?>

                </button>


            <br><br>

                <form action="<?php echo e(route('Filter_Classes')); ?>" method="POST">
                    <?php echo e(csrf_field()); ?>

                    <select class="selectpicker" style="padding: 5px; 15px; border-color: #c7c7c7;" data-style="btn-info" name="Grade_id" required
                            onchange="this.form.submit()">
                        <option value="" selected disabled><?php echo e(trans('My_Classes_trans.Search_By_Grade')); ?></option>
                        <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($Grade->id); ?>"><?php echo e($Grade->Name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </form>



            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th><input name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)" /></th>
                            <th>#</th>
                            <th>الأقسام</th>
                            <th><?php echo e(trans('My_Classes_trans.Name_Grade')); ?></th>
                            <th><?php echo e(trans('My_Classes_trans.Processes')); ?></th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php if(isset($details)): ?>

                        <?php $List_Classes = $details; ?>
                    <?php else: ?>

                        <?php $List_Classes = $My_Classes; ?>
                    <?php endif; ?>

                        <?php $i = 0; ?>

                        <?php $__currentLoopData = $List_Classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $My_Class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $i++; ?>
                                <td><input type="checkbox"  value="<?php echo e($My_Class->id); ?>" class="box1" ></td>
                                <td><?php echo e($i); ?></td>
                                <td><?php echo e($My_Class->Name_Class); ?></td>
                                <td><?php echo e($My_Class->Grades->Name); ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit<?php echo e($My_Class->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Edit')); ?>"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete<?php echo e($My_Class->id); ?>"
                                        title="<?php echo e(trans('Grades_trans.Delete')); ?>"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit<?php echo e($My_Class->id); ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                <?php echo e(trans('My_Classes_trans.edit_class')); ?>

                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- edit_form -->
                                            <form action="<?php echo e(route('Classrooms.update', 'test')); ?>" method="post">
                                                <?php echo e(method_field('patch')); ?>

                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name"
                                                               class="mr-sm-2">اسم القسم
                                                            :</label>
                                                        <input id="Name" required type="text" name="Name"
                                                               class="form-control"
                                                               value="<?php echo e($My_Class->getTranslation('Name_Class', 'ar')); ?>"
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="<?php echo e($My_Class->id); ?>">
                                                    </div>
                                                    
                                                </div><br>
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1"><?php echo e(trans('My_Classes_trans.Name_Grade')); ?>

                                                        :</label>
                                                    <select class="form-control form-control-lg" required
                                                            id="exampleFormControlSelect1" name="Grade_id">
                                                        <option value="<?php echo e($My_Class->Grades->id); ?>">
                                                            <?php echo e($My_Class->Grades->Name); ?>

                                                        </option>
                                                        <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($Grade->id); ?>">
                                                                <?php echo e($Grade->Name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>

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
                            <div class="modal fade" id="delete<?php echo e($My_Class->id); ?>" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                <?php echo e(trans('My_Classes_trans.delete_class')); ?>

                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('Classrooms.destroy', 'test')); ?>"
                                                  method="post">
                                                <?php echo e(method_field('Delete')); ?>

                                                <?php echo csrf_field(); ?>
                                                هل انت متاكد من عملية الحذف ؟
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="<?php echo e($My_Class->id); ?>">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><?php echo e(trans('My_Classes_trans.Close')); ?></button>
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


<!-- add_modal_class -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    <?php echo e(trans('My_Classes_trans.add_class')); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form class=" row mb-30" action="<?php echo e(route('Classrooms.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="repeater">
                            <div data-repeater-list="List_Classes">
                                <div data-repeater-item>
                                    <div class="row">

                                        <div class="col">
                                            <label for="Name"
                                                class="mr-sm-2">اسم القسم
                                                :</label>
                                            <input class="form-control" required type="text" name="Name" />
                                        </div>


                                        


                                        <div class="col">
                                            <label for="Name_en"
                                                class="mr-sm-2"><?php echo e(trans('My_Classes_trans.Name_Grade')); ?>

                                                :</label>

                                            <div class="box">
                                                <select class="fancyselect" required name="Grade_id">
                                                    <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($Grade->id); ?>"><?php echo e($Grade->Name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col">
                                            <label for="Name_en"
                                                class="mr-sm-2"><?php echo e(trans('My_Classes_trans.Processes')); ?>

                                                :</label>
                                            <input class="btn btn-danger btn-block" data-repeater-delete
                                                type="button" value="<?php echo e(trans('My_Classes_trans.delete_row')); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-12">
                                    <input class="button" data-repeater-create type="button" value="<?php echo e(trans('My_Classes_trans.add_row')); ?>"/>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                <button type="submit"
                                    class="btn"><?php echo e(trans('Grades_trans.submit')); ?></button>
                            </div>


                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>

</div>
</div>



<!-- حذف مجموعة صفوف -->
<div class="modal fade" id="delete_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    <?php echo e(trans('My_Classes_trans.delete_class')); ?>

                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="<?php echo e(route('delete_all')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <div class="modal-body">
                    <?php echo e(trans('My_Classes_trans.Warning_Grade')); ?>

                    <input class="text" type="hidden" id="delete_all_id" name="delete_all_id" value=''>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(trans('My_Classes_trans.Close')); ?></button>
                    <button type="submit" class="btn btn-danger"><?php echo e(trans('My_Classes_trans.submit')); ?></button>
                </div>
            </form>
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

<script type="text/javascript">
    $(function() {
        $("#btn_delete_all").click(function() {
            var selected = new Array();
            $("#datatable input[type=checkbox]:checked").each(function() {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_all').modal('show')
                $('input[id="delete_all_id"]').val(selected);
            }
        });
    });

</script>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/My_Classes/My_Classes.blade.php ENDPATH**/ ?>