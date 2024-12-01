@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
قائمة الطلبة المتابعين للمنهج
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
قائمة الطلبة المتابعين للمنهج
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
                                            <th>الطالب</th>
                                            <th>رقم القيد</th>
                                            <th>تاريخ ووقت المتابعة</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($viewers as $viewer)
                                            <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$viewer->Student->name}}</td>
                                            <td>{{$viewer->Student->r_number}}</td>
                                            <td>{{$viewer->created_at}}</td>
                                                
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
@endsection
