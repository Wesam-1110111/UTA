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
                                <a href="{{route('Summarys.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة ملخص جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم الطالب</th>
                                            <th>عنوان الملخص</th>
                                            <th>اسم المادة</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            <th>الفصل</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Summarys as $Summary)
                                            <tr>
                                                <td></td>
                                                <td>{{$Summary->student_name}}</td>
                                                <td>{{$Summary->title}}</td>
                                                <td>{{$Summary->subject->name}}</td>
                                                <td>{{$Summary->grade->Name}}</td>
                                                <td>{{$Summary->classroom->Name_Class}}</td>
                                                <td>{{$Summary->section->Name_Section}}</td>

                                                <td>
                                                    <a href="{{url('download/' . $Summary->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a target="_blank" href="{{url('attachments/pdf/' . $Summary->file_name)}}" title="تحميل الكتاب" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a>

                                                    {{-- <a href="{{route('Lectures.edit',$Summary->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_book{{ $Summary->id }}" title="حذف"><i class="fa fa-trash"></i></button> --}}
                                                </td>
                                            </tr>

                                        {{-- @include('pages.Teachers.dashboard.lecture.destroy') --}}
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
@endsection
