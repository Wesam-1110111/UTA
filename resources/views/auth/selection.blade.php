<!DOCTYPE html>
<html lang="en" dir="rtl">
@section('title')
{{'منصة شيتاتي'}}
@stop
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
@font-face {
  font-family: 'alfont';
  src: url(../fonts/alfont_com_QWxuYXNlZWItUmVndWxhci5vdGYxNjU2NDg4NDM5ODI3.otf);
}
@font-face {
  font-family: 'adoody';
  src: url(../fonts/alfont_com_adoody.ttf);
}
body {
  font-family: 'alfont' !important;
}
.btn-default {
    transition: 0.3s;
}
.btn-default:hover {
    background-color: #37b7c3;
    scale: 1.1;
}
.std-title {
    color: #37b7c3 !important;
    font-family: 'alfont' !important;
    text-align: center;
}
</style>


<body>
    <div id="pre-loader">
        <img src="{{ URL::asset('assets/images/pre-loader/Rolling@1x-1.0s-200px-200px.svg') }}" alt="">
    </div>
    <div class="wrapper">

        <section class="height-100vh d-flex align-items-center page-section-ptb login backg-login-img">
            <div class="container">
                <div class="row justify-content-center no-gutters vertical-align">





                    <div style="border-radius: 15px;" class="col-lg-8 col-md-8 bg-white">

                        <div class="login-fancy pb-40 clearfix">
                            <h3 class="mb-30 std-title">حدد طريقة الدخول</h3>
                            <div class="form-inline" style="justify-content: space-around;">
                                <a class="btn btn-default col-lg-3" title="طالب" href="{{route('login.show','student')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/student.png')}}">
                                </a>
                                {{-- <a class="btn btn-default col-lg-3" title="ولي امر" href="{{route('login.show','parent')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/family.png')}}">
                                </a> --}}
                                <a class="btn btn-default col-lg-3" title="معلم" href="{{route('login.show','teacher')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/classroom.png')}}">
                                </a>
                                <a class="btn btn-default col-lg-3" title="ادمن" href="{{route('login.show','admin')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/images/admin.png')}}">
                                </a>
                            </div>
                            @if (Session::has('sucss'))
                            <div class="alert alert-success" role="alert">
                                {{ session('sucss') }}
                            </div>

                            {{ session()->forget('sucss') }}
                        @endif
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


    <!-- toastr -->
    @yield('js')
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
