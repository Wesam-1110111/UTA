@extends('layouts.master')
@section('css')
    
@section('title')
    قائمةالمحاضرات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
قائمةالمحاضرات
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
                                <a href="{{route('ALectures.create')}}" class="btn btn-primary btn-sm" role="button"
                                   aria-pressed="true">اضافة محاضرة جديدة</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم المادة</th>
                                            <th>عنوان المحاضرة</th>
                                            <th>نوع المحاضرة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Lectures as $Lecture)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$Lecture->subject->name}}</td>
                                                <td>{{$Lecture->title}}</td>
                                                <td>{{$Lecture->tyep_lecture}}</td>

                                                <td>
                                                    <a href="{{url('downloadvid/' . $Lecture->file_name)}}" title="تحميل الشيت" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i class="fas fa-download"></i></a>
                                                    <a href="{{route('ALectures.edit',$Lecture->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_book{{ $Lecture->id }}" title="حذف"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                        @include('pages.lecture.destroy')
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