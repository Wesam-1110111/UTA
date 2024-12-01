<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('attachments/logo/logoo.ico')); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>منصة شيتاتي</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href= "<?php echo e(asset('index/css/fontawesome.css')); ?>">
    <link rel="stylesheet" href= "<?php echo e(asset('index/css/templatemo-space-dynamic.css')); ?>">
    <link rel="stylesheet" href= "<?php echo e(asset('index/css/animated.css')); ?>">
    <link rel="stylesheet" href= "<?php echo e(asset('index/css/owl.css')); ?>">
<!--

TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a class="navbar-brand brand-logo-mini" href="<?php echo e(url('/dashboard')); ?>"><img
              src="<?php echo e(URL::asset('attachments/logo/logoo.png')); ?>" alt="" style="margin:26px; max-width:146px; "></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#contact">تواصل معنا</a></li>
              <li class="scroll-to-section"><a href="#portfolio">الكليات</a></li>
              <li class="scroll-to-section"><a href="#servicesss">عضو التدريس</a></li>
              <li class="scroll-to-section"><a href="#services">عن المنصة</a></li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="<?php echo e(route('rigesterr')); ?>">إنشاء حساب</a></div></li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row" style="flex-direction: row-reverse;">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h2 class="" style="text-align: center;">شيتاتي</h2>
                <p class="" style="font-size: 40px; text-align: center;">المحاضرات بين يديك بسهولة</p>
                <div style="display: flex; justify-content: center;">
                  <div class="main-red-button" style="margin: 0 5px"><a href="<?php echo e(route('rigesterr')); ?>">إنشاء حساب</a></div>
                  <div class="main-red-button" style="margin: 0 5px"><a href="<?php echo e(route('selectionn')); ?>">تسجيل دخول</a></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo e(asset('index/images/first_sec_img.jpg')); ?>" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <h2 class="" style="text-align: center; font-size: 48px; color: #fff;">في منصة شيتاتي</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="<?php echo e(asset('index/images/-5900010619514503757_120-removebg-preview.png')); ?>" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6 mb-3">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <i class="fa-solid fa-up-right-from-square" style="font-size: 36px;"></i>
                  </div>
                  <div class="right-text">
                    <h4 class="cairo-font">جودة التعليم عالية</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <i class="fa-solid fa-video"></i>
                  </div>
                  <div class="right-text">
                    <h4 class="cairo-font">المحاضرات كلها في مكان واحد</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <i class="fa-solid fa-chalkboard-user"></i>
                  </div>
                  <div class="right-text">
                    <h4 class="cairo-font">محتوى دائم</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-3">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <i class="fa-solid fa-person-chalkboard"></i>
                  </div>
                  <div class="right-text">
                    <h4 class="cairo-font">تقدر تتواصل مع الأستاذ مباشرة</h4>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="<?php echo e(asset('index/images/-5895702346409822322_120.jpg')); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="section-heading mb-4">
            <h2 style="font-size: 38px; text-align: center; margin: 0;">شن هيا <em style="color: #37b7c3;"> شيتاتي</em> ؟ </h2>
            
          </div>
          <div class="row">
            <div class="col-lg-12 mb-3">
              <div style="display: flex; justify-content: end;">
                <h5 style="text-align: right; color: #888888;">منصة بسيطة هدفها إنك تحصّل على محاضراتك و موادك الدراسية بكل سهولة وفي مكان واحد</h5>
                <span><i class="fa-solid fa-heart" style="background-color: #37b7c3; color: #fff; padding: 9px; border-radius: 50px; margin-left: 15px;"></i></span>
              </div>
            </div>
            <div class="col-lg-12 mb-3">
              <div style="display: flex; justify-content: end;">
                <h5 style="text-align: right; color: #888888;">تخليك مركز على دراستك من غير تعقيدات</h5>
                <span><i class="fa-solid fa-heart" style="background-color: #37b7c3; color: #fff; padding: 9px; border-radius: 50px; margin-left: 15px;"></i></span>
              </div>
            </div>
            <div class="col-lg-12 mb-3">
              <div style="display: flex; justify-content: end;">
                <h5 style="text-align: right; color: #888888;">تقدر تتواصل مع دكاترتك وتشارك ملخصاتك مع زملائك بسهولة</h5>
                <span><i class="fa-solid fa-heart" style="background-color: #37b7c3; color: #fff; padding: 9px; border-radius: 50px; margin-left: 15px;"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h4 class="mt-4" style="text-align: center;"><span style="color: #37b7c3;">شيتاتي</span> مش مجرد منصة، هي رفيقك الأكاديمي اللي يوقف معاك في رحلتك التعليمية</h4>

    </div>
  </div>



  <div id="servicesss" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="left-image">
            <img src="index/images/undraw_Teaching_re_g7e3.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
          <div class="accordion">
            <h2 class="accordion__heading" style="font-size: 38px; text-align: center; margin: 0;">دور عضو هيئة <em style="color: #37b7c3; font-weight: 600;"> التدريس</em> ؟ </h2>

            <div class="accordion__item">
              <button class="accordion__btn">

                <span class="accordion__caption"><i class="far fa-lightbulb"></i></span>
                <span class="accordion__caption">شن دور عضو هيئة التدريس في المنصة؟</span>
                <span class="accordion__icon"><i class="fa fa-plus"></i></span>
              </button>

              <div class="accordion__content">
                <p>
                  <span>يضيف المحتوى الخاص بالمواد اللي يدرسها  “ شيتات ,مقاطع فيديو, عروض تقديميه” باش يسهل على الطلاب الوصول ليه</span>
                  <span>︎يقدر يتفاعل مع الطلاب، يجاوب على أسئلتهم ويقدم توضيحات من خلال المنصة</span>
                  <span>بالنسبة للأساتذة اللي ما يقدروا يحمّلوا المحتوى، مدير النظام يقدر يساعد ويضمن إن المحاضرات تكون متوفرة للطلاب</span>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2 style="color: #37b7c3; font-size: 38px;">الكليات</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php $__currentLoopData = App\Models\Grade::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4><?php echo e($item->Name); ?></h4>
                <div><a href="<?php echo e(route('rigesterr')); ?>" style="display: inline-block; background-color: #fff; font-size: 15px; font-weight: 400; color: #37b7c3; text-transform: capitalize; padding: 12px 25px; border-radius: 23px; letter-spacing: 0.25px;">انظم الأن</a></div>
              </div>
              <div class="showed-content">
                <img src="<?php echo e(asset('attachments/logo/' . $item->file_name)); ?>" alt="">
              </div>
            </div>
          </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>لا تتردد في إرسال رسالة لنا حول احتياجات منصة شيتاتي</h2>
            <div class="phone-info">
              <h4 class="mb-3"><span><i style="color: #37b7c3" class="fa fa-phone"></i> <a href="#" style="font-size: 20px;">218-944000000</a></span></h4>
              <h4 class="mb-3"><span><i style="color: #37b7c3" class="fa-solid fa-location-dot"></i> <a href="#" style="font-size: 20px;">ليبيا - طرابلس</a></span></h4>
              <h4 class="mb-3"><span><i style="color: #37b7c3" class="fa-solid fa-envelope"></i> <a href="#" style="font-size: 20px;">Tripoli@gmail.com</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" class="inputs-frm" name="name" id="name" placeholder="اللقب" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" class="inputs-frm" name="surname" id="surname" placeholder="الأسم" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" class="inputs-frm" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="البريد الألكتروني" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control inputs-frm" id="message" placeholder="الرسالة" required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset style="text-align: right;">
                  <button type="submit" id="form-submit" class="main-button ">إرسال</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="index/images/contact-decoration.png" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p style="font-size: 22px;">© جميع الحقوق محفوظة لمنصة <span style="color: #37b7c3;">شيتاتي</span></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src= "<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
  <script src= "<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src= "<?php echo e(asset('index/js/owl-carousel.js')); ?>"></script>
  <script src= "<?php echo e(asset('index/js/animation.js')); ?>"></script>
  <script src= "<?php echo e(asset('index/js/imagesloaded.js')); ?>"></script>
  <script src= "<?php echo e(asset('index/js/templatemo-custom.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/index.blade.php ENDPATH**/ ?>