@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    طلبات أعضاء هيئة التدريس
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
طلبات أعضاء هيئة التدريس
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
                                            <th>الأسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>النوع</th>
                                            <th>الكلية</th>
                                            <th>القسم</th>
                                            <th>العمليات</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Teachers as $Teacher)
                                            <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$Teacher->Name}}</td>
                                            <td>{{$Teacher->email}}</td>
                                            <td>{{$Teacher->genders->Name}}</td>
                                            <td>{{$Teacher->grade->Name}}</td>
                                            <td>{{$Teacher->classroom->Name_Class}}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-success btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        العمليات
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('R_Teachers.show',[$Teacher->id])}}"><i style="color: green" class="fa fa-check"></i>&nbsp;  الموافقة على الطلب</a>
                                                        <a class="dropdown-item" href="{{route('R_Teachers.edit',$Teacher->id)}}"><i style="color:rgb(202, 62, 62)" class="fa fa-times"></i>&nbsp;  إلغاء الطلب</a>
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
