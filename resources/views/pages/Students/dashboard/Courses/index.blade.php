
@extends('layouts.master')
@section('css')
    @toastr_css
    @section('title')
        قائمة المقررات الدراسية
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        قائمة المقررات الدراسية
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
                                            <th>الفصل</th>
                                            <th>الأستاذ</th>
                                            <th>المادة الدراسية</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($librarys as $library)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$library->grade->Name}}</td>
                                                <td>{{$library->classroom->Name_Class}}</td>
                                                <td>{{$library->section->Name_Section}}</td>
                                                <td>{{$library->teacher->Name}}</td>
                                                <td>{{$library->subject->name}}</td>
                                                <td>
                                                    <a href="{{url('download/' . $library->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a target="_blank" href="{{url('attachments/pdf/' . $library->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a>


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
