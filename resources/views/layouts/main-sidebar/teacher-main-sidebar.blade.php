<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">





        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/teacher/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{ trans('main_trans.Dashboard') }}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">منصة شيتاتي </li>

        <!-- الطلاب-->
        {{-- <li>
            <a href="{{route('student.index')}}"><i class="fas fa-user-graduate"></i><span
                    class="right-nav-text">الطلاب</span></a>
        </li> --}}

        <!-- library-->
        {{-- <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                <div class="pull-left"><i class="fas fa-book"></i><span
                        class="right-nav-text">شيتات</span></div>
                <div class="pull-right"><i class="ti-plus" style="color: #777;"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('Techlibrary.index') }}">قائمة الشيتات </a> </li>
            </ul>
        </li> --}}

                <!-- Lectures-->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#Lectures-icon">
                        <div class="pull-left"><i class="fas fa-book"></i><span
                                class="right-nav-text"> المحاضرات</span></div>
                        <div class="pull-right"><i class="ti-plus" style="color: #222;"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="Lectures-icon" class="collapse" data-parent="#sidebarnav">
                        <li> <a href="{{ route('Lectures.index') }}">قائمة المحاضرات </a> </li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('viewers.index') }}">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">  الطلبة المتابعين للمنهج </span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('Summaries_teacher.index') }}">
                        <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text"> ملخصات الطلبة (<span class="text-danger">{{App\Models\Summary::where('status',0)->count()}}</span>)</span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>




        <!-- الاقسام-->
        {{-- <li>
            <a href="{{route('sections')}}"><i class="fas fa-chalkboard"></i><span
                    class="right-nav-text">الاقسام</span></a>
        </li> --}}



        <!-- الاختبارات-->
        {{-- <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i><span
                        class="right-nav-text">الاختبارات</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('quizzes.index')}}">قائمة الاختبارات</a></li>
                <li><a href="#">قائمة الاسئلة</a></li>
            </ul>

        </li> --}}


        <!-- Online classes-->
        {{-- <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                <div class="pull-left"><i class="fas fa-video"></i><span
                        class="right-nav-text">{{ trans('main_trans.Onlineclasses') }}</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                <li> <a href="{{ route('online_zoom_classes.index') }}">حصص اونلاين مع زوم</a> </li>
            </ul>
        </li> --}}





        <!-- sections-->
        {{-- <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu1">
                <div class="pull-left"><i class="fas fa-chalkboard"></i><span
                        class="right-nav-text">التقارير</span></div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu1" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{route('attendance.report')}}">تقرير الحضور والغياب</a></li>
            </ul>

        </li> --}}

                                <!-- الدردشة-->
                                {{-- <li>
                                    <a href="{{ route('showchattc') }}"><i class="fa-solid fa-comment"></i><span
                                            class="right-nav-text">الدردشة</span></a>
                                </li> --}}

        <!-- الملف الشخصي-->
        {{-- <li>
            <a href="{{ route('profile.show') }}"><i class="fas fa-id-card-alt"></i><span class="right-nav-text">الملف
                    الشخصي</span></a>
        </li> --}}

    </ul>
</div>
