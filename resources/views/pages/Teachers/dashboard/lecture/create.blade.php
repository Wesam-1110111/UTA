@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
اضافة محاضرة جديدة
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
اضافة محاضرة جديدة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{route('Lectures.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">عنوان المحاضرة<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control">
                                    </div>

                                </div>
                                <br>

                                

                                <div class="form-row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">نوع المحاضرة <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="lecture_type">
                                                <option value="video" selected >فيديو</option>
                                                <option value="pdf" >شيت</option>
                                                <option value="ppt">عرض مرئي</option>

                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="col">
                                        <div class="form-group">
                                            <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="Classroom_id">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                            <select class="custom-select mr-sm-2" name="section_id">

                                            </select>
                                        </div>
                                    </div> --}}

                                </div><br>

                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Subject_id">المادة الدراسية : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="Subject_id">
                                                <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                                @foreach($subjects as $Subject)
                                                    <option  value="{{ $Subject->id }}">{{ $Subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <br>
                                
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="academic_year">المرفقات : <span class="text-danger">*</span></label>
                                            <input type="file" accept="application/pdf,video/mp4,video/x-m4v,application/vnd.ms-powerpoint," name="file_name" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-primary btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
                            </form>
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
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "{{ URL::to('classes') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Class_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Class_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });




    </script>
@endsection
