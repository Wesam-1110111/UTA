<!DOCTYPE html>
<html lang="en" dir="rtl">

<link rel="icon" type="image/x-icon" href="{{ URL::asset('attachments/logo/logoo.ico') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{'منصة شيتاتي'}}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <!-- css -->
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>

<style>
    body {
        font-family: 'alfont' !important;
    }

    .sgn-btns {
        background-color: #37b7c3;
        border-color: #37b7c3;
        transition: 0.3s;
        border-radius: 23px;
    }

    .sgn-btns:hover {
        background-color: #219faa;
        border-color: #219faa;
    }

    .std-title {
        color: #37b7c3 !important;
        font-family: 'alfont' !important;
        text-align: center;
    }

    label {
        font-size: 20px;
    }

    .form-control {
        font-size: 17px;
    }
</style>

<body>

<div class="wrapper">
    <!--=================================
preloader -->

<div id="pre-loader">
    <img src="{{ URL::asset('assets/images/pre-loader/loader-02.svg') }}" alt="">
</div>

    <!--=================================
preloader -->

    <!--=================================
login-->

    <section class="height-100vh d-flex align-items-center page-section-ptb login backg-login-img">
        <div class="container">
            <div class="row justify-content-center no-gutters vertical-align">
                {{-- <div class="col-lg-4 col-md-6 login-fancy-bg bg"
                     style="background-image: url('{{ asset('assets/images/login-inner-bg.jpg')}}');">
                    <div class="login-fancy">
                        <h2 class="text-white mb-20">Hello world!</h2>
                        <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose
                            responsive template along with powerful features.</p>
                        <ul class="list-unstyled  pos-bot pb-30">
                            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
                            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-5 col-md-6 bg-white" style="border-radius: 6px;">



                    <div class="login-fancy pb-40 clearfix">
                        <div style=" display: block; margin-left: auto; margin-right: auto; width: 50%; text-align: center;">
                            <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                                src="{{ URL::asset('attachments/logo/logoo.png') }}" alt="" style="margin: 26px; max-width: 146px;"></a>
                        </div>
                            

                            @if (\Session::has('message'))
                                <div class="alert alert-danger">
                                 <li>{!! \Session::get('message') !!}</li>
                                </div>
                            @endif

                            @if (\Session::has('error'))
                                <div class="alert alert-danger">
                                 <li>{!! \Session::get('error') !!}</li>
                                </div>
                            @endif


                        <form method="POST" action="{{route('insertuser')}}">
                            @csrf

                            <div class="section-field mb-20">
                                <label class="mb-10" for="name">البريدالالكتروني*</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <input type="hidden" value="" name="type">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="section-field mb-20">
                                <label class="mb-10" for="name">رقم القيد</label>
                                <input id="email" type="number"
                                       class="form-control @error('r_number') is-invalid @enderror" name="r_number"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <input type="hidden" value="" name="type">
                                @error('r_number')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="section-field mb-20">
                                <label class="mb-10" for="Password">كلمة المرور * </label>
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror

                            </div>

                            <div class="section-field">
                                <div class="remember-checkbox mb-30">
                                </div>
                            </div>
                            <button class="button sgn-btns"><span>تسجيل</span><i class="fa fa-check"></i></button>
                            <br>
                            <br>
                            <br>
                            <a href="{{route('login.show','student')}}" style="color: #219faa; text-align: center; font-size: 18px;"  class="float-left"><span style="color: #393737">هل لديك حساب؟</span> تسجيل الدخول </a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
login-->

</div>
<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

</script>

<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
