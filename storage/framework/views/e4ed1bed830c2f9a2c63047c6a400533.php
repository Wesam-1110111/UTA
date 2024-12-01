<!-- Title -->
<title><?php echo $__env->yieldContent("title"); ?></title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo e(URL::asset('index/img/future-logo.jpg')); ?>" type="image/x-icon" />

<!-- Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="<?php echo e(URL::asset('css/wizard.css')); ?>" rel="stylesheet" id="bootstrap-css">
<link rel="icon" type="image/x-icon" href="<?php echo e(URL::asset('attachments/logo/logoo.ico')); ?>">


<?php echo $__env->yieldContent('css'); ?>
<!--- Style css -->
<link href="<?php echo e(URL::asset('assets/css/style.css')); ?>" rel="stylesheet">

<!--- Style css -->
<?php if(App::getLocale() == 'en'): ?>
    <link href="<?php echo e(URL::asset('assets/css/ltr.css')); ?>" rel="stylesheet">
<?php else: ?>
    <link href="<?php echo e(URL::asset('assets/css/rtl.css')); ?>" rel="stylesheet">
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/layouts/head.blade.php ENDPATH**/ ?>