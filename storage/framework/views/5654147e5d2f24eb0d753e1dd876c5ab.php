<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


<!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
        
        <?php if(isset(Auth()->user()->Grade_id)): ?>
            <?php $__empty_1 = true; $__currentLoopData = \App\Models\Grade::where('id',Auth()->user()->Grade_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div
                    style="display: flex; flex-direction: row-reverse; align-items: center; justify-content: space-between;">
                    <h3 style="margin: 10px 0 0 0;"><?php echo e($info->Name); ?></h3>
                    <a class="navbar-brand brand-logo-mini" href="<?php echo e(route('dashboard.Students')); ?>"><img
                            src="<?php echo e(URL::asset('attachments/logo/' . $info->file_name)); ?>" alt=""></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
        <?php else: ?>
            <div
                style="display: flex; flex-direction: row-reverse; align-items: center; justify-content: center;">
                <!-- <h3 style="margin: 10px 0 0 0;">جامعة طرابلس</h3> -->
                <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('/dashboard')); ?>"><img
                        src="<?php echo e(URL::asset('attachments/logo/logoo.png')); ?>" alt=""></a>
            </div>
        <?php endif; ?>


    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto" style="align-items: center;">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i
                    class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        
        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto" style="align-items: center;">

        

        <?php if(isset(Auth()->user()->r_number)): ?>
            <li class="nav-item">
                <a class="nav-link top-nav" href="<?php echo e(route('showchat')); ?>"><i class="fa-regular fa-comment"></i></a>
            </li>
            <?php elseif(isset(Auth()->user()->status)): ?>
            <li class="nav-item">
                <a class="nav-link top-nav" href="<?php echo e(route('showchattc')); ?>"><i class="fa-regular fa-comment"></i></a>
            </li>
        <?php endif; ?>






            <?php if(isset(Auth()->user()->r_number)): ?>




                <li class="nav-item dropdown">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        <?php if(App\Models\Notification::where('rools', 2)->where('seen', 0)->count() >= 1): ?>
                            <span class="badge badge-danger notification-status"> </span>
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong class="main-title-nots"><?php echo e(trans('Sidebar_trans.Notifications')); ?></strong>
                            <span
                                class="badge badge-pill badge-warning" style="background-color: #03a9f4; color: #fff;"><?php echo e(App\Models\Notification::where('seen', 0)->where('classroom_id', Auth::user()->Classroom_id)->count()); ?></span>
                        </div>
                        <div class="dropdown-divider"></div>

                        <?php $__currentLoopData = \App\Models\Notification::where('classroom_id', Auth::user()->Classroom_id)->orderBy('id', 'DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                

                                <div class="icn-name-not-prt" style="display: flex; justify-content: space-around; align-items: center;">
                                    <div>
                                        <i class="fa-solid fa-layer-group  nots-icon"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="dropdown-item not-a-href-sty"><?php echo e($Notification->Notes); ?></a>
                                    </div>


                                    <div>
                                        <small class="float-right text-muted time"><?php echo e($Notification->created_at); ?></small>
                                    </div>
                                </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>
                </li>

            <?php elseif((isset(Auth()->user()->status))): ?>
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        <?php if(App\Models\Notification::where('rools', 1)->where('seen', 0)->count() >= 1): ?>
                            <span class="badge badge-danger notification-status"> </span>
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications" style="">
                        <div class="dropdown-header notifications">
                            <strong class="main-title-nots"><?php echo e(trans('Sidebar_trans.Notifications')); ?></strong>
                            <span
                                class="badge badge-pill badge-warning" style="background-color: #03a9f4; color: #fff;"><?php echo e(App\Models\Notification::where('seen', 0)->where('classroom_id', Auth::user()->Classroom_id)->count()); ?></span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <?php $__currentLoopData = \App\Models\Notification::where('classroom_id', Auth::user()->Classroom_id)->orderBy('id', 'DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                

                                <div class="icn-name-not-prt" style="display: flex; justify-content: space-around; align-items: center;">
                                    <div>
                                        <i class="fa-solid fa-layer-group  nots-icon"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="dropdown-item not-a-href-sty"><?php echo e($Notification->Notes); ?></a>
                                    </div>


                                    <div>
                                        <small class="float-right text-muted time"><?php echo e($Notification->created_at); ?></small>
                                    </div>
                                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </li>
            <?php endif; ?>




        

        <li class="nav-item">
            <?php if(isset(Auth()->user()->name)): ?>
                <h5><?php echo e(Auth()->user()->name); ?></h5>
            <?php else: ?>
                <h5><?php echo e(Auth()->user()->Name); ?></h5>
            <?php endif; ?>
        </li>

        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <?php if(isset(Auth::user()->r_number)): ?>

                <?php if(Auth()->user()->gender_id  == 1): ?>
                <img src="<?php echo e(URL::asset('assets/images/111.jpg')); ?>" alt="avatar">
                    <?php else: ?>
                    <img src="<?php echo e(URL::asset('assets/images/222.jpg')); ?>" alt="avatar">
                <?php endif; ?>

                <?php elseif(isset(Auth::user()->status)): ?>
                    <?php if(Auth::user()->Gender_id == 1): ?>
                    <img src="<?php echo e(URL::asset('assets/images/teacher.png')); ?>" alt="avatar">
                    <?php else: ?>
                    <img src="<?php echo e(URL::asset('assets/images/teacher.png')); ?>" alt="avatar">
                    <?php endif; ?>

                    <?php elseif(isset(Auth::user()->rools)): ?>
                    <img src="<?php echo e(URL::asset('assets/images/admin33.png')); ?>" alt="avatar">


                <?php endif; ?>


            </a>
            <div class="dropdown-menu dropdown-menu-right">
                
                
                
                <?php if(isset(Auth::user()->r_number)): ?>
                    <a class="dropdown-item" href="<?php echo e(url('profile-student')); ?>"><i
                            class="text-warning ti-user"></i>الملف الشخصي</a>
                <?php elseif(isset(Auth::user()->status)): ?>
                    <a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><i class="text-warning ti-user"></i>الملف
                        الشخصي</a>
                <?php elseif(isset(Auth::user()->rools)): ?>
                    <a class="dropdown-item" href="<?php echo e(route('Profile.index')); ?>"><i
                            class="text-warning ti-user"></i>الملف الشخصي</a>
                <?php endif; ?>



                
                <div class="dropdown-divider"></div>

                <?php if(isset(Auth::user()->rools) && Auth::user()->rools == 0): ?>
                    <a class="dropdown-item" href="<?php echo e(route('Profile.create')); ?>"><i
                            class="text-info ti-settings"></i>الإعدادات</a>
                <?php endif; ?>

                <?php if(auth('student')->check()): ?>
                    <form method="GET" action="<?php echo e(route('logout', 'student')); ?>">
                    <?php elseif(auth('teacher')->check()): ?>
                        <form method="GET" action="<?php echo e(route('logout', 'teacher')); ?>">
                        <?php elseif(auth('parent')->check()): ?>
                            <form method="GET" action="<?php echo e(route('logout', 'parent')); ?>">
                            <?php else: ?>
                                <form method="GET" action="<?php echo e(route('logout', 'web')); ?>">
                <?php endif; ?>

                <?php echo csrf_field(); ?>
                <a class="dropdown-item" href="#"
                    onclick="event.preventDefault();this.closest('form').submit();"><i class="bx bx-log-out"></i>تسجيل
                    الخروج</a>
                </form>

            </div>
        </li>
    </ul>
</nav>

<!--=================================
header End-->
<?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/layouts/main-header.blade.php ENDPATH**/ ?>