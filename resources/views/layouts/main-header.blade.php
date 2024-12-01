<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


<!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
        {{-- <a class="navbar-brand brand-logo" href="{{ url('/dashboard') }}"><img src="{{ URL::asset('index/img/future-logo.jpg') }}" alt=""></a> --}}
        @if (isset(Auth()->user()->Grade_id))
            @forelse (\App\Models\Grade::where('id',Auth()->user()->Grade_id)->get() as $info)
                <div
                    style="display: flex; flex-direction: row-reverse; align-items: center; justify-content: space-between;">
                    <h3 style="margin: 10px 0 0 0;">{{ $info->Name }}</h3>
                    <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard.Students') }}"><img
                            src="{{ URL::asset('attachments/logo/' . $info->file_name) }}" alt=""></a>
                </div>
            @empty
            @endforelse
        @else
            <div
                style="display: flex; flex-direction: row-reverse; align-items: center; justify-content: center;">
                <!-- <h3 style="margin: 10px 0 0 0;">جامعة طرابلس</h3> -->
                <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                        src="{{ URL::asset('attachments/logo/logoo.png') }}" alt=""></a>
            </div>
        @endif


    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto" style="align-items: center;">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i
                    class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        {{-- <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input type="text" class="not-click form-control" placeholder="Search" value=""
                        name="search">
                    <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li> --}}
        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto" style="align-items: center;">

        {{-- <div class="btn-group mb-1">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              @if (App::getLocale() == 'ar')
              {{ LaravelLocalization::getCurrentLocaleName() }}
             <img src="{{ URL::asset('assets/images/flags/libya.png') }}" alt="" width="23px">
              @else
              {{ LaravelLocalization::getCurrentLocaleName() }}
              <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
              @endif
              </button>
            <div class="dropdown-menu">
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
            </div>
        </div> --}}

        @if (isset(Auth()->user()->r_number))
            <li class="nav-item">
                <a class="nav-link top-nav" href="{{ route('showchat') }}"><i class="fa-regular fa-comment"></i></a>
            </li>
            @elseif(isset(Auth()->user()->status))
            <li class="nav-item">
                <a class="nav-link top-nav" href="{{ route('showchattc') }}"><i class="fa-regular fa-comment"></i></a>
            </li>
        @endif






            @if (isset(Auth()->user()->r_number))




                <li class="nav-item dropdown">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        @if (App\Models\Notification::where('rools', 2)->where('seen', 0)->count() >= 1)
                            <span class="badge badge-danger notification-status"> </span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong class="main-title-nots">{{ trans('Sidebar_trans.Notifications')}}</strong>
                            <span
                                class="badge badge-pill badge-warning" style="background-color: #03a9f4; color: #fff;">{{ App\Models\Notification::where('seen', 0)->where('classroom_id', Auth::user()->Classroom_id)->count() }}</span>
                        </div>
                        <div class="dropdown-divider"></div>

                        @foreach (\App\Models\Notification::where('classroom_id', Auth::user()->Classroom_id)->orderBy('id', 'DESC')->get() as $Notification)



                                {{-- <a href="#" class="dropdown-item not-a-href-sty">{{$Notification->Notes}}<small class="float-right text-muted time">{{$Notification->created_at}}</small> </a> --}}

                                <div class="icn-name-not-prt" style="display: flex; justify-content: space-around; align-items: center;">
                                    <div>
                                        <i class="fa-solid fa-layer-group  nots-icon"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="dropdown-item not-a-href-sty">{{$Notification->Notes}}</a>
                                    </div>


                                    <div>
                                        <small class="float-right text-muted time">{{$Notification->created_at}}</small>
                                    </div>
                                </div>

                        @endforeach



                    </div>
                </li>

            @elseif((isset(Auth()->user()->status)))
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ti-bell"></i>
                        @if (App\Models\Notification::where('rools', 1)->where('seen', 0)->count() >= 1)
                            <span class="badge badge-danger notification-status"> </span>
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications" style="">
                        <div class="dropdown-header notifications">
                            <strong class="main-title-nots">{{ trans('Sidebar_trans.Notifications') }}</strong>
                            <span
                                class="badge badge-pill badge-warning" style="background-color: #03a9f4; color: #fff;">{{ App\Models\Notification::where('seen', 0)->where('classroom_id', Auth::user()->Classroom_id)->count() }}</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        @foreach (\App\Models\Notification::where('classroom_id', Auth::user()->Classroom_id)->orderBy('id', 'DESC')->get() as $Notification)

                                {{-- <a href="#" class="dropdown-item not-a-href-sty">{{$Notification->Notes}}<small class="float-right text-muted time">{{$Notification->created_at}}</small> </a> --}}

                                <div class="icn-name-not-prt" style="display: flex; justify-content: space-around; align-items: center;">
                                    <div>
                                        <i class="fa-solid fa-layer-group  nots-icon"></i>
                                    </div>
                                    <div>
                                        <a href="#" class="dropdown-item not-a-href-sty">{{$Notification->Notes}}</a>
                                    </div>


                                    <div>
                                        <small class="float-right text-muted time">{{$Notification->created_at}}</small>
                                    </div>
                                </div>

                @endforeach
                    </div>
                </li>
            @endif




        {{-- <li class="nav-item dropdown ">
            <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-big">
                <div class="dropdown-header">
                    <strong>Quick Links</strong>
                </div>
                <div class="dropdown-divider"></div>
                <div class="nav-grid">
                    <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
                        <h5>New Task</h5>
                    </a>
                    <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                        <h5>Assign Task</h5>
                    </a>
                </div>
                <div class="nav-grid">
                    <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                        <h5>Add Orders</h5>
                    </a>
                    <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i>
                        <h5>New Orders</h5>
                    </a>
                </div>
            </div>
        </li> --}}

        <li class="nav-item">
            @if (isset(Auth()->user()->name))
                <h5>{{ Auth()->user()->name }}</h5>
            @else
                <h5>{{ Auth()->user()->Name }}</h5>
            @endif
        </li>

        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                @if (isset(Auth::user()->r_number))

                @if (Auth()->user()->gender_id  == 1)
                <img src="{{ URL::asset('assets/images/111.jpg') }}" alt="avatar">
                    @else
                    <img src="{{ URL::asset('assets/images/222.jpg') }}" alt="avatar">
                @endif

                @elseif(isset(Auth::user()->status))
                    @if (Auth::user()->Gender_id == 1)
                    <img src="{{ URL::asset('assets/images/teacher.png') }}" alt="avatar">
                    @else
                    <img src="{{ URL::asset('assets/images/teacher.png') }}" alt="avatar">
                    @endif

                    @elseif(isset(Auth::user()->rools))
                    <img src="{{ URL::asset('assets/images/admin33.png') }}" alt="avatar">


                @endif


            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{ Auth::user()->name }}</h5>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="dropdown-divider"></div> --}}
                {{-- <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>Activity</a> --}}
                @if (isset(Auth::user()->r_number))
                    <a class="dropdown-item" href="{{ url('profile-student') }}"><i
                            class="text-warning ti-user"></i>الملف الشخصي</a>
                @elseif(isset(Auth::user()->status))
                    <a class="dropdown-item" href="{{ url('profile') }}"><i class="text-warning ti-user"></i>الملف
                        الشخصي</a>
                @elseif(isset(Auth::user()->rools))
                    <a class="dropdown-item" href="{{ route('Profile.index') }}"><i
                            class="text-warning ti-user"></i>الملف الشخصي</a>
                @endif



                {{-- <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>Projects <span
                        class="badge badge-info">6</span> </a> --}}
                <div class="dropdown-divider"></div>

                @if (isset(Auth::user()->rools) && Auth::user()->rools == 0)
                    <a class="dropdown-item" href="{{ route('Profile.create') }}"><i
                            class="text-info ti-settings"></i>الإعدادات</a>
                @endif

                @if (auth('student')->check())
                    <form method="GET" action="{{ route('logout', 'student') }}">
                    @elseif(auth('teacher')->check())
                        <form method="GET" action="{{ route('logout', 'teacher') }}">
                        @elseif(auth('parent')->check())
                            <form method="GET" action="{{ route('logout', 'parent') }}">
                            @else
                                <form method="GET" action="{{ route('logout', 'web') }}">
                @endif

                @csrf
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
