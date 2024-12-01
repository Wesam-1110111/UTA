
<?php $__env->startSection('css'); ?>
    @toastr_css
<?php $__env->startSection('title'); ?>
    طلبات أعضاء هيئة التدريس
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
طلبات أعضاء هيئة التدريس
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
                                            <th>الأسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>النوع</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            <th>العمليات</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $Teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td><?php echo e($loop->index+1); ?></td>
                                            <td><?php echo e($Teacher->Name); ?></td>
                                            <td><?php echo e($Teacher->email); ?></td>
                                            <td><?php echo e($Teacher->genders->Name); ?></td>
                                            <td><?php echo e($Teacher->grade->Name); ?></td>
                                            <td><?php echo e($Teacher->classroom->Name_Class); ?></td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        العمليات
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="<?php echo e(route('R_Teachers.show',[$Teacher->id])); ?>"><i style="color: green" class="fa fa-check"></i>&nbsp;  الموافقة على الطلب</a>
                                                        <a class="dropdown-item" href="<?php echo e(route('R_Teachers.edit',$Teacher->id)); ?>"><i style="color:rgb(202, 62, 62)" class="fa fa-times"></i>&nbsp;  إلغاء الطلب</a>
                                                    </div>
                                                </div>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Requests_Teachers/requests_teachers.blade.php ENDPATH**/ ?>