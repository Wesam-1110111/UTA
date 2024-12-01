<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('title'); ?>
<?php echo e('منصة شيتاتي'); ?>

<?php $__env->stopSection(); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    <?php echo $__env->make('layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body style="font-family: 'Cairo', sans-serif">

    <div class="wrapper" style="font-family: 'Cairo', sans-serif">

        <!--=================================
 preloader -->
        <div id="pre-loader">
            <img src="<?php echo e(URL::asset('assets/images/pre-loader/Rolling@1x-1.0s-200px-200px.svg')); ?>" alt="">
        </div>

        <!--=================================
 preloader -->

        <?php echo $__env->make('layouts.main-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('layouts.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0" style="font-family: 'Cairo', sans-serif">مرحبا بك :
                            <?php echo e(auth()->user()->name); ?></h4>
                    </div><br><br>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>



            <div class="calendar-main mb-30">

                <?php if(isset($id)): ?>

                    

                    <div class="row">

                        <div style="" class="col-xl-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body">
                                    <div class="tab nav-border" style="position: relative;">
                                        <div class="d-block d-md-flex justify-content-between">
                                            <?php $__empty_1 = true; $__currentLoopData = \App\Models\Subject::where('id',$id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <div class="d-block w-100">
                                                    <h5 style="font-family: 'Cairo', sans-serif" class="card-title">
                                                        <?php echo e($item->name); ?></h5>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>

                                            <div class="d-block d-md-flex nav-tabs-custom">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="students-tab"
                                                            data-toggle="tab" href="#students" role="tab"
                                                            aria-controls="students" aria-selected="true"> الرئسية</a>
                                                    </li>

                                                    

                                                    <li class="nav-item">
                                                        <a class="nav-link show" id="videos-tab" data-toggle="tab"
                                                            href="#videos" role="tab" aria-controls="videos"
                                                            aria-selected="true">المحاضرات</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pdf-tab" data-toggle="tab"
                                                            href="#pdf" role="tab" aria-controls="pdf"
                                                            aria-selected="true">شيتات</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="power-point-tab" data-toggle="tab"
                                                            href="#power-point" role="tab"
                                                            aria-controls="power-point" aria-selected="true">عروض مرئية</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="molakasat-tab" data-toggle="tab"
                                                            href="#molakasat" role="tab" aria-controls="molakasat"
                                                            aria-selected="false">الملخصات
                                                        </a>
                                                    </li>

                                                   
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="tab-content" id="myTabContent">

                                            
                                            <div class="tab-pane fade active show" id="students" role="tabpanel"
                                                aria-labelledby="students-tab">


                                                <?php $__empty_1 = true; $__currentLoopData = App\Models\Subject::where('id',$id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <div class="card-teatcher">


                                                            <?php if($teacher->teacher->Gender_id == 1): ?>
                                                            <img src="<?php echo e(asset('assets/images/t1.jpg')); ?>"
                                                            alt="Avatar" style="width:100%">
                                                            <?php else: ?>
                                                            <img src="<?php echo e(asset('assets/images/t2.jpg')); ?>"
                                                            alt="Avatar" style="width:100%">
                                                            <?php endif; ?>

                                                        <div class="container">
                                                            <h4 style="font-family: 'Cairo', sans-serif;"><b><?php echo e($teacher->teacher->Name); ?></b></h4>
                                                            <p><?php echo e('قسم' . ' ' . $teacher->classroom->Name_Class); ?></p>
                                                            <br>
                                                            <button type="button" class="btn btn-info btn-sm"
                                                                data-toggle="modal"
                                                                data-target="#edit<?php echo e($teacher->teacher->id); ?>"
                                                                title="إرسال رسالة">مراسلة</button>
                                                        </div>
                                                    </div>




                                                    <!-- send massge -->
                                                    <div class="modal fade" id="edit<?php echo e($teacher->teacher->id); ?>"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 style="font-family: 'Cairo', sans-serif;"
                                                                        class="modal-title" id="exampleModalLabel">
                                                                        مراسلة
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- add_form -->
                                                                    <form
                                                                        action="<?php echo e(route('sendchat', $teacher->teacher->id)); ?>"
                                                                        method="post">
                                                                        
                                                                        <?php echo csrf_field(); ?>
                                                                        <div class="row">
                                                                            <div class="col">

                                                                                <input id="id" type="hidden"
                                                                                    name="teacher_id"
                                                                                    class="form-control"
                                                                                    value="<?php echo e($teacher->teacher->id); ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label
                                                                                for="exampleFormControlTextarea1">أكتب
                                                                                رسالتك
                                                                                :</label>
                                                                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                        </div>
                                                                        <br><br>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">إرسال</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <?php endif; ?>


                                            </div>


                                            
                                            <div class="tab-pane fade show" id="videos" role="tabpanel"
                                                aria-labelledby="videos-tab">

                                                <div class="row" style="margin-top: 80px">

                                                    <?php $__currentLoopData = App\Models\lectures::where('subject_id', $id)->where('tyep_lecture', 'video')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card-teatcher">
                                                                <video width="250px" height="150px" controls
                                                                    poster="<?php echo e(asset('assets/images/pngtree-play-video-icon-graphic-design-template-vector-png-image_530837.jpg')); ?>"
                                                                    src="<?php echo e(asset('attachments/Lecture/' . $video->file_name)); ?>"></video>
                                                                <div class="container">
                                                                    <h4 style="font-family: 'Cairo', sans-serif">
                                                                        <b><?php echo e($video->title); ?></b>
                                                                    </h4>
                                                                    <div style="text-align: center;">
                                                                        <a href="<?php echo e(url('downloadvid/' . $video->file_name)); ?>"
                                                                            title="تحميل المحاضرة"
                                                                            style="margin: 0 3px; background: #167ed1; color: #fff; border-color: #167ed1;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="fas fa-download"></i></a>
                                                                        <a target="_blank"
                                                                            href="<?php echo e(url('attachments/Lecture/' . $video->file_name)); ?>"
                                                                            title="عرض المحاضرة"
                                                                            style="margin: 0 3px; background: #bf0e0ebf; color: #fff; border-color: #bf0e0ebf;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="far fa-eye "></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </div>

                                            </div>


                                            
                                            <div class="tab-pane fade" id="pdf" role="tabpanel"
                                                aria-labelledby="pdf-tab">

                                                <div class="row" style="margin-top: 80px">
                                                    <?php $__currentLoopData = App\Models\lectures::where('subject_id', $id)->where('tyep_lecture', 'pdf')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pdf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card-teatcher">
                                                                <img src="<?php echo e(asset('assets/images/pdf_109.webp')); ?>"
                                                                    alt="Avatar" style="width: 70%">
                                                                <div class="container"
                                                                    style="border-top: 2px solid #6f6f6f30;">
                                                                    <h4 style="font-family: 'Cairo', sans-serif">
                                                                        <b><?php echo e($pdf->title); ?></b>
                                                                    </h4>
                                                                    <div style="text-align: center;">
                                                                        <a href="<?php echo e(url('downloadvid/' . $pdf->file_name)); ?>"
                                                                            title="تحميل الكتاب"
                                                                            style="margin: 0 3px; background: #167ed1; color: #fff; border-color: #167ed1;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="fas fa-download"></i></a>
                                                                        <a target="_blank"
                                                                            href="<?php echo e(url('attachments/Lecture/' . $pdf->file_name)); ?>"
                                                                            title="عرض الكتاب"
                                                                            style="margin: 0 3px; background: #bf0e0ebf; color: #fff; border-color: #bf0e0ebf;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="far fa-eye "></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>


                                            
                                            <div class="tab-pane fade" id="power-point" role="tabpanel"
                                                aria-labelledby="power-point-tab">

                                                <div class="row" style="margin-top: 80px">
                                                    <?php $__currentLoopData = App\Models\lectures::where('subject_id', $id)->where('tyep_lecture', 'ppt')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ppt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card-teatcher">
                                                                <img src="<?php echo e(asset('assets/images/Microsoft_PowerPoint_2013-2019_logo.svg')); ?>"
                                                                    alt="Avatar" style="width: 70%">
                                                                <div class="container"
                                                                    style="border-top: 2px solid #6f6f6f30;">
                                                                    <h4 style="font-family: 'Cairo', sans-serif">
                                                                        <b><?php echo e($ppt->title); ?></b>
                                                                    </h4>
                                                                    <div style="text-align: center;">
                                                                        <a href="<?php echo e(url('downloadvid/' . $ppt->file_name)); ?>"
                                                                            title="تحميل العرض المرئي"
                                                                            style="margin: 0 3px; background: #167ed1; color: #fff; border-color: #167ed1;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="fas fa-download"></i></a>
                                                                        <a target="_blank"
                                                                            href="<?php echo e(url('attachments/Lecture/' . $ppt->file_name)); ?>"
                                                                            title="فتح العرض المرئي"
                                                                            style="margin: 0 3px; background: #bf0e0ebf; color: #fff; border-color: #bf0e0ebf;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="far fa-eye "></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="molakasat" role="tabpanel"
                                                aria-labelledby="molakasat-tab">

                                                <button type="button" class="btn btn-info btn-sm"
                                                    data-toggle="modal" data-target="#add<?php echo e($id); ?>"
                                                    title="<?php echo e(trans('Grades_trans.Edit')); ?>">إضافة ملخص</button>

                                                <div class="row">
                                                    <!-- edit_modal_Grade -->
                                                    <div class="modal fade" id="add<?php echo e($id); ?>"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 style="font-family: 'Cairo', sans-serif;"
                                                                        class="modal-title" id="exampleModalLabel">
                                                                        إضافة ملخص
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- add_form -->
                                                                    <form action="<?php echo e(route('Summarys.store')); ?>"
                                                                        method="post" enctype="multipart/form-data">

                                                                        <?php echo csrf_field(); ?>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <label for="Name"
                                                                                    class="mr-sm-2">عنوان الملخص
                                                                                    :</label>
                                                                                <input id="title" type="text"
                                                                                    name="title"
                                                                                    class="form-control" required>
                                                                                <input id="id" type="hidden"
                                                                                    name="id"
                                                                                    class="form-control"
                                                                                    value="<?php echo e($id); ?>">
                                                                            </div>

                                                                        </div><br><br>
                                                                        <div class="form-row">
                                                                            <div class="col">
                                                                                <div class="form-group">
                                                                                    <label for="academic_year">المرفق :
                                                                                        <span
                                                                                            class="text-danger">*</span></label>
                                                                                    <input type="file"
                                                                                        accept="application/pdf"
                                                                                        name="file_name" required>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br><br>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">إضافة</button>
                                                                        </div>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $__currentLoopData = App\Models\Summary::where('subject_id', $id)->where('status', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Summary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-md-6 col-lg-3">
                                                            <div class="card-teatcher">
                                                                <div style="text-align: center;">
                                                                    <img src="<?php echo e(asset('assets/images/pngwing.com.png')); ?>"
                                                                        alt="Avatar" style="width: 70%">
                                                                </div>
                                                                <div class="container"
                                                                    style="border-top: 2px solid #6f6f6f30;">
                                                                    <h4 style="font-family: 'Cairo', sans-serif">
                                                                        <b><?php echo e($Summary->title); ?></b>
                                                                    </h4>
                                                                    <div style="text-align: center;">
                                                                        <a href="<?php echo e(url('downloadvid/' . $Summary->file_name)); ?>"
                                                                            title="تحميل الكتاب"
                                                                            style="margin: 0 3px; background: #167ed1; color: #fff; border-color: #167ed1;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="fas fa-download"></i></a>
                                                                        <a target="_blank"
                                                                            href="<?php echo e(url('attachments/Lecture/' . $Summary->file_name)); ?>"
                                                                            title="تحميل الكتاب"
                                                                            style="margin: 0 3px; background: #bf0e0ebf; color: #fff; border-color: #bf0e0ebf;"
                                                                            class="btn btn-warning btn-sm"
                                                                            role="button" aria-pressed="true"><i
                                                                                class="far fa-eye "></i></a>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>



                                            
                                            <div class="tab-pane fade" id="nekashat" role="tabpanel"
                                                aria-labelledby="nekashat-tab">
                                                <div class="table-responsive mt-15">
                                                    <table style="text-align: center"
                                                        class="table center-aligned-table table-hover mb-0">
                                                        <thead>
                                                            <tr class="table-info text-danger">
                                                                <th>#</th>
                                                                <th>اسم عضو هيئة التدريس</th>
                                                                <th>النوع</th>
                                                                <th>تاريخ التعين</th>
                                                                <th>القسم</th>
                                                                <th>تاريخ الاضافة</th>
                                                            </tr>
                                                        </thead>

                                                        <?php $__empty_1 = true; $__currentLoopData = \App\Models\Teacher::latest()->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo e($loop->iteration); ?></td>
                                                                    <td><?php echo e($teacher->Name); ?></td>
                                                                    <td><?php echo e($teacher->genders->Name); ?></td>
                                                                    <td><?php echo e($teacher->Joining_Date); ?></td>
                                                                    <td><?php echo e($teacher->classroom->Name_Class); ?></td>
                                                                    <td class="text-success">
                                                                        <?php echo e($teacher->created_at); ?>

                                                                    </td>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                                    <td class="alert-danger" colspan="8">لاتوجد
                                                                        بيانات</td>
                                                                </tr>
                                                            </tbody>
                                                        <?php endif; ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php else: ?>
                    <?php if($Favorite == null): ?>




                        <h3 class="mb-5" style="font-family: 'Cairo', sans-serif">المواد الدراسية</h3>

                        <form action="<?php echo e(route('dashboard.Students.filter')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <select class="selectpicker" style="padding: 5px; 15px; border-color: #c7c7c7;"
                                data-style="btn-info" name="Grade_id" required onchange="this.form.submit()">
                                <option value="" selected disabled>
                                    <?php echo e(trans('My_Classes_trans.Search_By_Grade')); ?></option>
                                <?php $__currentLoopData = App\Models\Classroom::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Grade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <option value="<?php echo e($Grade->id); ?>"
                                        <?php echo e($Grade->id == $class_id ? 'selected' : ''); ?>><?php echo e($Grade->Name_Class); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>


                        <br>

                        
                        <div class="row">
                            <?php $__currentLoopData = \App\Models\Subject::where('classroom_id', $class_id)->paginate(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-3" data-role="recipe">
                                    <div class="box">
                                        <div class="card">
                                            <a
                                                href="<?php echo e(route('dashboard.Students', ['Favorite' => 'Favorite', 'id' => $item->id])); ?>">
                                                <div
                                                    style="background-color: rgba(<?php echo e(rand(1, 14)); ?>, <?php echo e(rand(1, 95)); ?>, <?php echo e(rand(1, 90)); ?>, 0.606); padding: 15px; height: 150px; display: flex; justify-content: center; align-items: center;">
                                                    <h5
                                                        style="color: #fff; text-align: center; font-family: 'Cairo', sans-serif;">
                                                        <?php echo e($item->name); ?>

                                                        <br>
                                                        <br>
                                                        <?php echo e($item->sub_number); ?>

                                                    </h5>
                                                </div>

                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-family: 'Cairo', sans-serif;">د.
                                                    <?php echo e($item->teacher->Name); ?></h5>
                                                
                                                <div class="mt-3">

                                                    <?php if(App\Models\My_Subjects::where('subject_id',$item->id)->where('student_id',Auth()->user()->id)->count() == 1): ?>
                                                    <i
                                                            class="fa-solid fa-heart"
                                                            style="font-size: 20px; color: rgb(174, 10, 10); cursor:pointer"></i>
                                                        <?php else: ?>
                                                        <a
                                                        href="<?php echo e(route('Students.Favorite', ['id' => $item->id, 'Favorite' => 1])); ?>"><i
                                                            class="fa-regular fa-heart"
                                                            style="font-size: 20px; cursor:pointer"></i></a>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>

                         <div class="paganation" style="text-align: center; margin: 0px auto;">
                        <?php echo e(App\Models\Subject::where('classroom_id', $class_id)->paginate(8)->links()); ?>

                        </div>

                    <?php else: ?>
                        <h3 class="mb-5" style="font-family: 'Cairo', sans-serif">موادي</h3>
                        <div class="row">
                            <?php $__currentLoopData = \App\Models\My_Subjects::where('student_id', Auth()->user()->id)->paginate(8); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-3">
                                    <div class="box">
                                        <div class="card">
                                            <a
                                                href="<?php echo e(route('dashboard.Students', ['Favorite' => 'Favorite', 'id' => $item->subject_id])); ?>">
                                                <div
                                                    style="background-color: rgba(<?php echo e(rand(1, 14)); ?>, <?php echo e(rand(1, 95)); ?>, <?php echo e(rand(1, 90)); ?>, 0.606); padding: 15px; height: 150px; display: flex; justify-content: center; align-items: center;">
                                                    <h5 style="color: #fff; text-align: center;"><?php echo e($item->name); ?>


                                                    </h5>
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-family: 'Cairo', sans-serif;">د.
                                                    <?php echo e($item->teacher->Name); ?></h5>
                                               
                                                <div class="mt-3">
                                                    <a
                                                        href="<?php echo e(route('Students.Favorite', ['id' => $item->subject_id, 'Favorite' => 0])); ?>"><i
                                                            class="fa-solid fa-heart"
                                                            style="font-size: 20px; color: rgb(174, 10, 10); cursor:pointer"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    <?php endif; ?>

                <?php endif; ?>
                <div class="paganation" style="text-align: center; margin: 0px auto;">
                    <?php echo e(App\Models\My_Subjects::where('student_id', Auth()->user()->id)->paginate(8)->links()); ?>

                    </div>


            </div>


            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    </div>
    </div>
    

    <?php echo $__env->make('layouts.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>


</body>

</html>



<style>

.pagination .page-item.active .page-link {
    border-color: #03a9f4 !important;
    background-color: #03a9f4 !important;
    color: #fff !important;
}


    .card-teatcher {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        transition: 0.3s;
        /* width: 15%; */
        width: 250px;
        margin: 25px 0;
    }

    .card-teatcher:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .card-teatcher .container {
        padding: 10px 16px;
    }



    .card .box {
        margin: 25px 0;
    }




    .teach-prt {
        text-align: center;
        padding: 20px;
        box-shadow: rgba(149, 165, 158, 0.2) 0px 8px 24px;
    }
</style>


<script>
    $(document).ready(function() {
        $("#searchbox").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $('div[data-role="recipe"]').filter(function() {
                $(this).toggle($(this).find('h5').text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/pages/Students/dashboard.blade.php ENDPATH**/ ?>