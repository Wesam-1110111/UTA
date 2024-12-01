@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    ملخصات الطلبة
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
ملخصات الطلبة
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
                                            <th>القسم</th>
                                            <th>المادة الدراسية</th>
                                            <th>الطالب</th>
                                            <th>عنوان الملخص</th>
                                            <th>الملخص</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Summaries as $Summary)
                                            <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$Summary->grade->Name}}</td>
                                            <td>{{$Summary->classroom->Name_Class}}</td>
                                            <td>{{$Summary->subject->name}}</td>
                                            <td>{{$Summary->student_name}}</td>
                                            <td>{{$Summary->title}}</td>
                                            <td><a target="_blank" href="{{url('attachments/pdf/' . $Summary->file_name)}}" title="عرض الملخص" class="btn btn-warning btn-sm" role="button" aria-pressed="true"><i  class="far fa-eye "></i></a></td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            العمليات
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('Summaries.show',[$Summary->id])}}"><i style="color: green" class="fa fa-check"></i>&nbsp;  الموافقة على الطلب</a>
                                                            <a class="dropdown-item" href="{{route('Summaries.edit',$Summary->id)}}"><i style="color:rgb(202, 62, 62)" class="fa fa-times"></i>&nbsp;  إلغاء الطلب</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        {{-- @include('pages.Students.Delete') --}}
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
