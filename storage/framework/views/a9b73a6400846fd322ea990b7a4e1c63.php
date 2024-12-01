<?php $__env->startSection('css'); ?>
    
    <?php $__env->startSection('title'); ?>
        الملف الشخصي
    <?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
    <!-- breadcrumb -->
    <?php $__env->startSection('PageTitle'); ?>
        الملف الشخصي
    <?php $__env->stopSection(); ?>
    <!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- row -->



    <div class="card-body">

        <section style="background-color: #eee;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="<?php echo e(URL::asset('assets/images/admin33.png')); ?>"
                                 alt="avatar"
                                 class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 style="font-family: Cairo" class="my-3"><?php echo e($information->Name); ?></h5>
                            <p class="text-muted mb-1"><?php echo e($information->email); ?></p>
                            <?php if($information->rools == 0): ?>
                            <p class="text-muted mb-4">مدير النظام</p>
                                <?php else: ?>
                                <p class="text-muted mb-4">مشرف</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form action="<?php echo e(route('Profile.update',$information->id)); ?>" method="post">
                                <?php echo method_field('PUT'); ?>
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">الأسم</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="text" name="Name_ar"
                                                   value="<?php echo e($information->name); ?>"
                                                   class="form-control">
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">كلمة المرور</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            <input type="password" id="password" class="form-control" name="password">
                                        </p><br><br>
                                        <input type="checkbox" class="form-check-input" onclick="myFunction()"
                                               id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">اظهار كلمة المرور</label>
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-success">تعديل البيانات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    
    @toastr_render
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Profile/profile.blade.php ENDPATH**/ ?>