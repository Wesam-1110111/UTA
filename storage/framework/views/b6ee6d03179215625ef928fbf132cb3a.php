<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">





        <!-- menu item Dashboard-->
        <li>
            <a href="<?php echo e(url('/teacher/dashboard')); ?>">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text"><?php echo e(trans('main_trans.Dashboard')); ?></span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">منصة شيتاتي </li>

        <!-- الطلاب-->
        

        <!-- library-->
        

                <!-- Lectures-->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Lectures-icon">
                        <div class="pull-left"><i class="fas fa-book"></i><span
                                class="right-nav-text"> المحاضرات</span></div>
                        <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="Lectures-icon" class="collapse" data-parent="#sidebarnav">
                        <li> <a href="<?php echo e(route('Lectures.index')); ?>">قائمة المحاضرات </a> </li>

                    </ul>
                </li>

                <li>
                    <a href="<?php echo e(route('viewers.index')); ?>">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">  الطلبة المتابعين للمنهج </span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('Summaries_teacher.index')); ?>">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> ملخصات الطلبة (<span class="text-danger"><?php echo e(App\Models\Summary::where('status',0)->count()); ?></span>)</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>




        <!-- الاقسام-->
        



        <!-- الاختبارات-->
        


        <!-- Online classes-->
        





        <!-- sections-->
        

                                <!-- الدردشة-->
                                

        <!-- الملف الشخصي-->
        

    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/layouts/main-sidebar/teacher-main-sidebar.blade.php ENDPATH**/ ?>