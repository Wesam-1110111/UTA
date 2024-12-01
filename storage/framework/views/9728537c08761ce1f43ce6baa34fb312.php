<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    <?php echo e(trans('Sections_trans.title_page')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('Sections_trans.title_page')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a class="button x-small" href="#" data-toggle="modal" data-target="#exampleModal">
                        <?php echo e(trans('Sections_trans.add_section')); ?></a>
                </div>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="accordion gray plus-icon round">

                            <?php $__currentLoopData = $Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="acd-group">
                                    <a href="#" class="acd-heading"><?php echo e($Grade->Name); ?></a>
                                    <div class="acd-des">

                                        <div class="row">
                                            <div class="col-xl-12 mb-30">
                                                <div class="card card-statistics h-100">
                                                    <div class="card-body">
                                                        <div class="d-block d-md-flex justify-content-between">
                                                            <div class="d-block">
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-15">
                                                            <table class="table center-aligned-table mb-0">
                                                                <thead>
                                                                <tr class="text-dark">
                                                                    <th>#</th>
                                                                    <th>الفصل
                                                                    </th>
                                                                    <th><?php echo e(trans('Sections_trans.Name_Class')); ?></th>
                                                                    <th><?php echo e(trans('Sections_trans.Status')); ?></th>
                                                                    <th><?php echo e(trans('Sections_trans.Processes')); ?></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php $i = 0; ?>
                                                                <?php $__currentLoopData = $Grade->Sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_Sections): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <tr>
                                                                        <?php $i++; ?>
                                                                        <td><?php echo e($i); ?></td>
                                                                        <td><?php echo e($list_Sections->Name_Section); ?></td>
                                                                        <td><?php echo e($list_Sections->My_classs->Name_Class); ?>

                                                                        </td>
                                                                        <td>
                                                                            <?php if($list_Sections->Status === 1): ?>
                                                                                <label
                                                                                    class="badge badge-success"><?php echo e(trans('Sections_trans.Status_Section_AC')); ?></label>
                                                                            <?php else: ?>
                                                                                <label
                                                                                    class="badge badge-danger"><?php echo e(trans('Sections_trans.Status_Section_No')); ?></label>
                                                                            <?php endif; ?>

                                                                        </td>
                                                                        <td>

                                                                            <a href="#"
                                                                               class="btn btn-outline-info btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#edit<?php echo e($list_Sections->id); ?>"><?php echo e(trans('Sections_trans.Edit')); ?></a>
                                                                            <a href="#"
                                                                               class="btn btn-outline-danger btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#delete<?php echo e($list_Sections->id); ?>"><?php echo e(trans('Sections_trans.Delete')); ?></a>
                                                                        </td>
                                                                    </tr>


                                                                    <!--تعديل قسم جديد -->
                                                                    <div class="modal fade"
                                                                         id="edit<?php echo e($list_Sections->id); ?>"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title"
                                                                                        style="font-family: 'Cairo', sans-serif;"
                                                                                        id="exampleModalLabel">
                                                                                        <?php echo e(trans('Sections_trans.edit_Section')); ?>

                                                                                    </h5>
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">

                                                                                    <form
                                                                                        action="<?php echo e(route('Sections.update', 'test')); ?>"
                                                                                        method="POST">
                                                                                        <?php echo e(method_field('patch')); ?>

                                                                                        <?php echo e(csrf_field()); ?>

                                                                                        <div class="row">
                                                                                            <div class="col">
                                                                                                <input type="text"
                                                                                                       name="Name_Section_Ar"
                                                                                                       class="form-control"
                                                                                                       value="<?php echo e($list_Sections->getTranslation('Name_Section', 'ar')); ?>">
                                                                                            </div>

                                                                                            <div class="col">
                                                                                                <input type="text"
                                                                                                       name="Name_Section_En"
                                                                                                       class="form-control"
                                                                                                       value="<?php echo e($list_Sections->getTranslation('Name_Section', 'en')); ?>">
                                                                                                <input id="id"
                                                                                                       type="hidden"
                                                                                                       name="id"
                                                                                                       class="form-control"
                                                                                                       value="<?php echo e($list_Sections->id); ?>">
                                                                                            </div>

                                                                                        </div>
                                                                                        <br>


                                                                                        <div class="col">
                                                                                            <label for="inputName"
                                                                                                   class="control-label"><?php echo e(trans('Sections_trans.Name_Grade')); ?></label>
                                                                                            <select name="Grade_id"
                                                                                                    class="custom-select"
                                                                                                    onclick="console.log($(this).val())">
                                                                                                <!--placeholder-->
                                                                                                <option
                                                                                                    value="<?php echo e($Grade->id); ?>">
                                                                                                    <?php echo e($Grade->Name); ?>

                                                                                                </option>
                                                                                                <?php $__currentLoopData = $list_Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <option
                                                                                                        value="<?php echo e($list_Grade->id); ?>">
                                                                                                        <?php echo e($list_Grade->Name); ?>

                                                                                                    </option>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="col">
                                                                                            <label for="inputName"
                                                                                                   class="control-label"><?php echo e(trans('Sections_trans.Name_Class')); ?></label>
                                                                                            <select name="Class_id"
                                                                                                    class="custom-select">
                                                                                                <option
                                                                                                    value="<?php echo e($list_Sections->My_classs->id); ?>">
                                                                                                    <?php echo e($list_Sections->My_classs->Name_Class); ?>

                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <br>

                                                                                        <div class="col">
                                                                                            <div class="form-check">

                                                                                                <?php if($list_Sections->Status === 1): ?>
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        checked
                                                                                                        class="form-check-input"
                                                                                                        name="Status"
                                                                                                        id="exampleCheck1">
                                                                                                <?php else: ?>
                                                                                                    <input
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"
                                                                                                        name="Status"
                                                                                                        id="exampleCheck1">
                                                                                                <?php endif; ?>
                                                                                                <label
                                                                                                    class="form-check-label"
                                                                                                    for="exampleCheck1"><?php echo e(trans('Sections_trans.Status')); ?></label><br>

                                                                                                    <div class="col">
                                                                                                        <label for="inputName" class="control-label"><?php echo e(trans('Sections_trans.Name_Teacher')); ?></label>
                                                                                                        <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                                                                                            <?php $__currentLoopData = $list_Sections->teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                <option selected value="<?php echo e($teacher['id']); ?>"><?php echo e($teacher['Name']); ?></option>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                                                            <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->Name); ?></option>
                                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                        </select>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>


                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-dismiss="modal"><?php echo e(trans('Sections_trans.Close')); ?></button>
                                                                                    <button type="submit"
                                                                                            class="btn btn-danger"><?php echo e(trans('Sections_trans.submit')); ?></button>
                                                                                </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <!-- delete_modal_Grade -->
                                                                    <div class="modal fade"
                                                                         id="delete<?php echo e($list_Sections->id); ?>"
                                                                         tabindex="-1" role="dialog"
                                                                         aria-labelledby="exampleModalLabel"
                                                                         aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 style="font-family: 'Cairo', sans-serif;"
                                                                                        class="modal-title"
                                                                                        id="exampleModalLabel">
                                                                                        <?php echo e(trans('Sections_trans.delete_Section')); ?>

                                                                                    </h5>
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                    <span
                                                                                        aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <form
                                                                                        action="<?php echo e(route('Sections.destroy', 'test')); ?>"
                                                                                        method="post">
                                                                                        <?php echo e(method_field('Delete')); ?>

                                                                                        <?php echo csrf_field(); ?>
                                                                                        <?php echo e(trans('Sections_trans.Warning_Section')); ?>

                                                                                        <input id="id" type="hidden"
                                                                                               name="id"
                                                                                               class="form-control"
                                                                                               value="<?php echo e($list_Sections->id); ?>">
                                                                                        <div class="modal-footer">
                                                                                            <button type="button"
                                                                                                    class="btn btn-secondary"
                                                                                                    data-dismiss="modal"><?php echo e(trans('Sections_trans.Close')); ?></button>
                                                                                            <button type="submit"
                                                                                                    class="btn btn-danger"><?php echo e(trans('Sections_trans.submit')); ?></button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>




                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                        </div>
                    </div>

                    <!--اضافة قسم جديد -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" style="font-family: 'Cairo', sans-serif;"
                                        id="exampleModalLabel">
                                        <?php echo e(trans('Sections_trans.add_section')); ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form action="<?php echo e(route('Sections.store')); ?>" method="POST">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" name="Name_Section_Ar" class="form-control"
                                                       placeholder=" اسم الفصل ">
                                            </div>

                                            

                                        </div>
                                        <br>


                                        <div class="col">
                                            <label for="inputName"
                                                   class="control-label"><?php echo e(trans('Sections_trans.Name_Grade')); ?></label>
                                            <select name="Grade_id" class="custom-select"
                                                    onchange="console.log($(this).val())">
                                                <!--placeholder-->
                                                <option value="" selected
                                                        disabled><?php echo e(trans('Sections_trans.Select_Grade')); ?>

                                                </option>
                                                <?php $__currentLoopData = $list_Grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list_Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($list_Grade->id); ?>"> <?php echo e($list_Grade->Name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <br>

                                        <div class="col">
                                            <label for="inputName"
                                                   class="control-label"><?php echo e(trans('Sections_trans.Name_Class')); ?></label>
                                            <select name="Class_id" class="custom-select">

                                            </select>
                                        </div><br>

                                        <div class="col">
                                            <label for="inputName" class="control-label">اسم عضو هيئة التدريس</label>
                                            <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->Name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal"><?php echo e(trans('Sections_trans.Close')); ?></button>
                                    <button type="submit"
                                            class="btn btn-danger"><?php echo e(trans('Sections_trans.submit')); ?></button>
                                </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Sections/Sections.blade.php ENDPATH**/ ?>