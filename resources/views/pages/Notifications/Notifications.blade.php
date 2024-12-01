@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
الإشعارات

@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
الإشعارات

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
                إضافة إشعار
            </button>
            <br><br>

            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>بخصوص</th>
                            <th>موجه إلى</th>
                            <th>الكلية</th>
                            <th>القسم</th>
                            <th>{{ trans('Grades_trans.Processes') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($Notifications as $Notification)
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>{{ $Notification->title }}</td>
                                <td>
                                    @if ($Notification->rools == 1)
                                        {{'أعضاء هيئة التدريس'}}
                                        @else
                                        {{'الطلاب'}}
                                    @endif
                                </td>
                                <td>{{ $Notification->grade->Name }}</td>
                                <td>{{ $Notification->classroom->Name_Class }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $Notification->id }}"
                                        title="{{ trans('Grades_trans.Edit') }}"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $Notification->id }}"
                                        title="{{ trans('Grades_trans.Delete') }}"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                            <!-- edit_modal_Grade -->
                            <div class="modal fade" id="edit{{ $Notification->id }}" tabindex="-1" role="dialog"
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

                                                    <div class="col">
                                                        <label for="Name" class="mr-sm-2">بخصوص
                                                            :</label>
                                                        <input id="Name" value="{{$Notification->title}}" type="text" name="title" class="form-control">
                                                    </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="gender">موجه إلى : <span class="text-danger">*</span></label>
                                                                <select class="custom-select mr-sm-2" name="rools">
                                                                    <option value="2">الطلاب</option>
                                                                    <option value="1">أعضاء هيئة التدريس</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="{{ $Notification->id }}">
                            
                                                </div>

                                                <div class="form-group">
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
                                                </div>
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
                            <div class="modal fade" id="delete{{ $Notification->id }}" tabindex="-1" role="dialog"
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
                                            <form action="{{ route('Notifications.destroy', 'test') }}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                {{ trans('Grades_trans.Warning_Grade') }}
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                    value="{{ $Notification->id }}">
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
                    إضافة إشعار
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('Notifications.store') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col">
                            <label for="Name" class="mr-sm-2">بخصوص
                                :</label>
                            <input id="Name" type="text" name="title" class="form-control">
                        </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="gender">موجه إلى : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="rools">
                                        <option value="2">الطلاب</option>
                                        <option value="1">أعضاء هيئة التدريس</option>
                                    </select>
                                </div>
                            </div>

                    </div>

                                    <div class="form-group">
                                        <label for="Grade_id">{{trans('Students_trans.Grade')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Grade_id">
                                            <option selected disabled>{{trans('Parent_trans.Choose')}}...</option>
                                            @foreach($my_classes as $c)
                                                <option  value="{{ $c->id }}">{{ $c->Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
    
                                    <div class="form-group">
                                        <label for="Classroom_id">{{trans('Students_trans.classrooms')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="Classroom_id">
    
                                        </select>
                                    </div>
    

                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الإشعار
                            :</label>
                        <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
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
