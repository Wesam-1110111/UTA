@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    تعديل المقرر الدراسي {{$Lecture->title}}
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
تعديل المقرر الدراسي {{$Lecture->title}}
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
                            <form action="{{route('Lectures.update','test')}}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-row">

                                    <div class="col">
                                        <label for="title">اسم المقرر</label>
                                        <input type="text" name="title" value="{{$Lecture->title}}" class="form-control">
                                        <input type="hidden" name="id" value="{{$Lecture->id}}" class="form-control">
                                    </div>

                                </div>
                                <br>

                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="tyep_lecture">
                                                <option selected >{{$Lecture->tyep_lecture}}</option>
                                                {{-- @foreach($grades as $grade)
                                                    <option  value="{{ $grade->id }}" {{$book->Grade_id == $grade->id ?'selected':''}}>{{ $grade->Name }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="col">
                                        <div class="form-group">
                                            <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="Classroom_id">
                                              <option value="{{$book->Classroom_id}}">{{$book->classroom->Name_Class}}</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col">
                                        <div class="form-group">
                                            <label for="section_id">{{trans('Students_trans.section')}} : </label>
                                            <select class="custom-select mr-sm-2" name="section_id">
                                                <option value="{{$book->section_id}}">{{$book->section->Name_Section}}</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </div><br>
                                {{-- <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="Subject_id">المادة الدراسية : <span class="text-danger">*</span></label>
                                            <select class="custom-select mr-sm-2" name="Subject_id">
                                                <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                                @foreach($Subjects as $Subject)
                                                    <option   value="{{ $Subject->id }}" {{$book->subject_id == $Subject->id ?'selected':''}}>{{ $Subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>





                                </div><br> --}}
                                <div class="form-row">
                                    <div class="col">

                                        @if ($Lecture->tyep_lecture == 'pdf')
                                        <embed src="{{ URL::asset('attachments/lecture/'.$Lecture->file_name) }}" type="application/pdf"   height="150px" width="100px"><br><br>
                                            @elseif($Lecture->tyep_lecture == 'video')
                                            {{-- <embed src="{{ URL::asset('attachments/lecture/'.$Lecture->file_name) }}" type="application/pdf,video/mp4,video/x-m4v,application/vnd.ms-powerpoint,"   height="150px" width="100px"><br><br> --}}
                                                <video type="video/mp4,video/x-m4v"   height="150px" width="150px" controls>
                                                    <source src="{{ URL::asset('attachments/lecture/'.$Lecture->file_name) }}" type="video/mp4">
                                                  Your browser does not support the video tag.
                                                  </video>
                                            @elseif($Lecture->tyep_lecture == 'ppt')
                                            {{-- <iframe src='' width='80%' height='565px' frameborder='0'> </iframe> --}}
                                        @endif
                                        
                                        <div class="form-group">
                                            <label for="academic_year">المرفقات : <span class="text-danger">*</span></label>
                                            <input type="file" accept="application/pdf,video/mp4,video/x-m4v,application/vnd.ms-powerpoint,"  name="file_name">
                                        </div>

                                    </div>
                                </div>

                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">حفظ البيانات</button>
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
