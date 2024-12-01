
@extends('layouts.master')
@section('css')
    @toastr_css
    @section('title')
        قائمة المحاضرات الدراسية
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        قائمة المحاضرات الدراسية
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الكلية</th>
                                            <th>التخصص</th>
                                            <th>المادة</th>
                                            <th>الأستاذ</th>
                                            <th>عنوان المحاضرة</th>
                                            {{-- <th>المادة الدراسية</th> --}}
                                            <th>نوع المحاضرة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Lectures as $Lecture)
                                            <tr>
                                                {{--  --}}
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$Lecture->grade->Name}}</td>
                                                <td>{{$Lecture->classroom->Name_Class}}</td>
                                                <td>{{$Lecture->subject->name}}</td>
                                                <td>{{$Lecture->teacher->Name}}</td>
                                                <td>{{$Lecture->title}}</td>
                                                <td>
                                                    @if ($Lecture->tyep_lecture == 'video')
                                                        <i  class="fa fa-video-camera">
                                                        @elseif($Lecture->tyep_lecture == 'pdf')
                                                        <i  class="fa fa-file-pdf-o">
                                                        @elseif($Lecture->tyep_lecture == 'ppt')
                                                        <i  class="fa fa-file-powerpoint-o">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('downloadvid/' . $Lecture->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a target="_blank" href="{{url('attachments/Lecture/' . $Lecture->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render

        <script>
            function alertAbuse() {
                alert("برجاء عدم إعادة تحميل الصفحة بعد دخول الاختبار - في حال تم تنفيذ ذلك سيتم الغاء الاختبار بشكل اوتوماتيك ");
            }
        </script>

@endsection
