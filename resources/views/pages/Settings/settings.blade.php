@extends('layouts.master')
@section('css')
   
@section('title')
    الإعدادات
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
الإعدادات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


@if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
@endif



<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                إضافة مسؤول
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الأسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>الصلاحية</th>
                            <th>{{ trans('Grades_trans.Processes') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($informations as $information)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $information->name }}</td>
                                <td>{{$information->email}}</td>
                                <td>
                                    @if ($information->rools == 0)
                                        {{'مدير النظام'}}
                                        @else
                                        {{'مشرف'}}
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $information->id }}"
                                        title="{{ trans('Grades_trans.Delete') }}"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit{{ $information->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('Grades_trans.edit_Grade') }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('Notifications.update', 'test') }}" method="post">
                                                {{ method_field('patch') }}
                                                @csrf
                                                <div class="row">

                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="gender">الصلاحية : <span class="text-danger">*</span></label>
                                                                <select class="custom-select mr-sm-2" name="rools">
                                                                    <option value="0">مدير نظام</option>
                                                                    <option value="1">مشرف</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="{{ $information->id }}">
                            
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label for="Grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                                    <select class="custom-select mr-sm-2" name="Grade_id">
                                                        <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                                        @foreach($my_classes as $my_classe)
                                                            <option value="{{ $my_classe->id }}" {{$my_classe->id == $Notification->grade_id ? 'selected' : ""}}>{{ $my_classe->Name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                
                                                <div class="form-group">
                                                    <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                                    <select class="custom-select mr-sm-2" name="Classroom_id">
                                                        <option value="{{$Notification->classroom_id}}">{{$Notification->classroom->Name_Class}}</option>
                                                    </select>
                                                </div>
                



                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">الإشعار
                                                        :</label>
                                                    <textarea class="form-control" name="Notes"
                                                        id="exampleFormControlTextarea1"
                                                        rows="3">{{ $Notification->Notes }}</textarea>
                                                </div> --}}
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-success">{{ trans('Grades_trans.submit') }}</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $information->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                هل انت متاكد من عملية الحذف ؟
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('Profile.destroy', 'test') }}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                {{ trans('Grades_trans.Warning_Grade') }}
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="{{ $information->id }}">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>


<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    إضافة مسؤول
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Profile.store') }}" method="POST">
                    @csrf

                    <div class="col">
                        <label for="name" class="mr-sm-2">الإسم
                            :<span class="text-danger">*</span></label>
                        <input id="name" required type="text" name="name" class="form-control" required>
                    </div>
                    
                    <div class="col">
                        <label for="email" class="mr-sm-2">البريد الإلكتروني
                            :<span class="text-danger">*</span></label>
                        <input id="email" required type="email" name="email" class="form-control" required>
                    </div>

                    
                    <div class="col">
                        <label for="password" class="mr-sm-2">كلمة السر
                            :<span class="text-danger">*</span></label>
                        <input id="password" required type="password" name="password" class="form-control" required>
                    </div>
                    <br>
    
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="gender">الصلاحية : <span class="text-danger">*</span></label>
                            <select class="custom-select mr-sm-2" required name="rools" required>
                                <option value="0">مدير نظام</option>
                                <option value="1">مشرف</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">{{ trans('Grades_trans.Close') }}</button>
                <button type="submit" class="btn btn-success">{{ trans('Grades_trans.submit') }}</button>
            </div>
            </form>

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
