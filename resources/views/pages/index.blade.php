<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>eLEARNING - eLearning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('index/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('index/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('index/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('index/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary almarai-font"><i class="fa fa-book me-3"></i>منصة شيتاتي</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav m-auto p-4 p-lg-0">
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div> -->
                <a href="#contact-sec" class="nav-item nav-link">تواصل معنا</a>
                <a href="#universitys-sec" class="nav-item nav-link">الكليات</a>
                <a href="#about-us-sec" class="nav-item nav-link">عن شيتاتي</a>
                <a href="index.html" class="nav-item nav-link active">الرئيسية</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">إنشاء حساب<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('index/img/img_5ef85d4030c03_5492.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8" style="text-align: center">
                                <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5> -->
                                <h1 class="display-3 text-white animated slideInDown almarai-font mb-4">شيتاتي</h1>
                                <!-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> -->
                                <a href="{{route('selectionn')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">دخول</a>
                                <a href="{{route('rigesterr')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">إنشاء حساب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('index/img/close-up-still-life-hard-exams.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8" style="text-align: center">
                                <!-- <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Best Online Courses</h5> -->
                                <h1 class="display-3 text-white animated slideInDown almarai-font mb-4">شيتاتي</h1>
                                <!-- <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p> -->
                                <a  href="{{route('selectionn')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">دخول</a>
                                <a href="{{route('rigesterr')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">إنشاء حساب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="about-us-sec">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('index/img/still-life-documents-stack (1).jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" style="text-align: center;" data-wow-delay="0.3s">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">منصة شيتاتي</h6>
                        <h1 class="mb-5">عن شيتاتي</h1>
                    </div>
                    <p class="mb-4" style="text-align: right;">
                        في منصة شيتاتي ، نسعى لتمكين الطلاب والأعضاء الأكاديميين من الحصول على شيتات الجامعة بسهولة وفاعلية. نحن نؤمن بأهمية تنظيم الوقت وتحقيق التفوق الأكاديمي، ونعمل جاهدين على توفير أدوات وموارد تساعد الطلاب في تحقيق أهدافهم الأكاديمية
                    </p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">المزيد</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Courses Start -->
    <div class="container-xxl py-5" id="universitys-sec">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">منصة شيتاتي</h6>
                <h1 class="mb-5">الكليات</h1>
            </div>
            <div class="row g-4 justify-content-center">
            @foreach (App\Models\Grade::all() as $item)

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src={{asset('attachments/logo/' . $item->file_name)}} alt=""  style="max-width:200px; max-height:200px;">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a> -->
                                <a href="{{route('rigesterr')}}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px;">انظم</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-1">
                            <!-- <h3 class="mb-0">$149.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div> -->
                            <h5 class="mb-4">{{$item->Name}}</h5>
                        </div>
                        <!-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div> -->
                    </div>
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <!-- Courses End -->



    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Students Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->




        <!-- Contact Start -->
        <div class="container-xxl py-5" id="contact-sec">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">منصة شيتاتي</h6>
                    <h1 class="mb-5">نواصل معنا</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 style="text-align: center;">ابقى على تواصل</h5>
                        <p class="mb-4" style="text-align: center;">
                            نحن نرحب بأي استفسارات أو اقتراحات تود مشاركتها معنا. يمكنك التواصل معنا عبر نموذج الاتصال المتاح على الموقع. سنكون سعداء جدًا بمساعدتك والاستماع إلى ملاحظاتك لتحسين خدماتنا
                        </p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary">العنوان</h5>
                                <p class="mb-0">ليبيا . طرابلس . جامعة طرابلس</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary">رقم الهاتف</h5>
                                <p class="mb-0">+218 944 0000</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary">البريد الألكتروني</h5>
                                <p class="mb-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <iframe class="position-relative rounded w-100 h-100" \
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3351.4542390981755!2d13.223099584815866!3d32.85969908094711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a89353b73f447d%3A0xf90e094e46a8ca98!2z2KzYp9mF2LnYqSDYt9ix2KfYqNmE2LM!5e0!3m2!1sar!2sly!4v1720468513167!5m2!1sar!2sly"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                            </iframe>
                    </div>
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control inputs-frm" id="email" placeholder="Your Email">
                                        <label for="email" class="labels-frm">البريد الألكتروني</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control inputs-frm" id="name" placeholder="Your Name">
                                        <label for="name" class="labels-frm">الاسم</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control inputs-frm" id="subject" placeholder="Subject">
                                        <label for="subject" class="labels-frm">الموضوع</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control inputs-frm" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message" class="labels-frm">الرسالة</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">إرسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        

    <!-- Footer Start -->
    <div class="copyright pt-4 pb-4 ps-1 pe-1">
        <p class="text-center p-copy">جميع الحقوق محفوظة لدى <span style="color: #06bbcc;">منصة شيتاتي</span> ©</p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('index/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('index/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('index/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('index/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('index/js/main.js')}}"></script>
</body>

</html>