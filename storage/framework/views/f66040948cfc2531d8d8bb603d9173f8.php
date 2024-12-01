<?php if(Auth::user()->rools == 0): ?>

<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="<?php echo e(url('/dashboard')); ?>">
                <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"><?php echo e(trans('main_trans.Dashboard')); ?></span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">منصة شيتاتي </li>

        <!-- Grades-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                <div class="pull-left"><i class="fas fa-school"></i><span
                        class="right-nav-text"><?php echo e(trans('main_trans.Grades')); ?></span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="<?php echo e(route('Grades.index')); ?>"><?php echo e(trans('main_trans.Grades_list')); ?></a></li>

            </ul>
        </li>
        <!-- classes-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                <div class="pull-left"><i class="fa fa-building"></i><span
                        class="right-nav-text"><?php echo e(trans('main_trans.classes')); ?></span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="<?php echo e(route('Classrooms.index')); ?>"><?php echo e(trans('main_trans.List_classes')); ?></a></li>
            </ul>
        </li>


        <!-- sections-->
        


        <!-- students-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i><?php echo e(trans('main_trans.students')); ?><div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div><div class="clearfix"></div></a>
            <ul id="students-menu" class="collapse">
                
                        <li> <a href="<?php echo e(route('Students.create')); ?>"><?php echo e(trans('main_trans.add_student')); ?></a></li>
                        <li> <a href="<?php echo e(route('Students.index')); ?>"><?php echo e(trans('main_trans.list_students')); ?></a></li>
                    

                

                
            </ul>
        </li>



        <!-- Teachers-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                        class="right-nav-text"><?php echo e(trans('main_trans.Teachers')); ?></span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                <li> <a href="<?php echo e(route('Teachers.index')); ?>"><?php echo e(trans('main_trans.List_Teachers')); ?></a> </li>
            </ul>
        </li>


        <!-- Parents-->

        

        <!-- Accounts-->
        

        <!-- Attendance-->
        

        <!-- Subjects-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">المواد الدراسية</span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                <li> <a href="<?php echo e(route('subjects.index')); ?>">قائمة المواد</a> </li>
            </ul>
        </li>

        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Lectures-icon">
                <div class="pull-left"><i class="fas fa-book"></i><span
                        class="right-nav-text"> المحاضرات</span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Lectures-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="<?php echo e(route('ALectures.index')); ?>">قائمة المحاضرات </a> </li>

            </ul>
        </li>

        <!-- Quizzes-->
        


        <!-- library-->
        


                <!-- requests summarise-->
                <li>
                    <a href="<?php echo e(route('Summaries.index')); ?>">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> ملخصات الطلبة (<span class="text-danger"><?php echo e(App\Models\Summary::where('status',0)->count()); ?></span>)</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('R_Teachers.index')); ?>">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">طلبات أعضاء هيئة التدريس (<span class="text-danger"><?php echo e(App\Models\Teacher::where('status',0)->count()); ?></span>)</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <!-- Notifications-->
                


        <!-- Online classes-->
        


        <!-- Settings-->
        



        <!-- Users-->
        

    </ul>
</div>



    <?php else: ?>




    <div class="scrollbar side-menu-bg" style="overflow: scroll">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="<?php echo e(url('/dashboard')); ?>">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"><?php echo e(trans('main_trans.Dashboard')); ?></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"><?php echo e(trans('main_trans.Programname')); ?> </li>




            <!-- students-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i class="fas fa-user-graduate"></i><?php echo e(trans('main_trans.students')); ?><div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div></a>
                <ul id="students-menu" class="collapse">
                    
                            <li> <a href="<?php echo e(route('Students.create')); ?>"><?php echo e(trans('main_trans.add_student')); ?></a></li>
                            <li> <a href="<?php echo e(route('Students.index')); ?>"><?php echo e(trans('main_trans.list_students')); ?></a></li>
                        

                    

                    
                </ul>
            </li>





            <!-- library-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Lectures-icon">
                    <div class="pull-left"><i class="fas fa-book"></i><span
                            class="right-nav-text">المحاضرات </span></div>
                    <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Lectures-icon" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="<?php echo e(route('ALectures.index')); ?>">قائمة المحاضرات </a> </li>

                </ul>
            </li>


            <!-- Online classes-->
            


            <!-- Settings-->
            



            <!-- Users-->
            

                            <!-- Notifications-->
                            

                            <li>
                                <a href="<?php echo e(route('Summaries.index')); ?>">
                                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> ملخصات الطلبة (<span class="text-danger"><?php echo e(App\Models\Summary::where('status',0)->count()); ?></span>)</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo e(route('R_Teachers.index')); ?>">
                                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> طلبات أعضاء هيئة التدريس (<span class="text-danger"><?php echo e(App\Models\Teacher::where('status',0)->count()); ?></span>)</span>
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </li>

        </ul>
    </div>






<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/layouts/main-sidebar/admin-main-sidebar.blade.php ENDPATH**/ ?>