<div class="modal fade" id="delete_book{{$Lecture->id}}" tabindex="-1"
     role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('ALectures.destroy','test')}}" method="post">
            @method('delete')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="font-family: 'Cairo', sans-serif;"
                        class="modal-title" id="exampleModalLabel">حذف  المحاضرة</h5>
                    <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    هل انت متأكد من عملية الحذف ؟
                    <input type="hidden" name="id" value="{{$Lecture->id}}">
                    <input type="hidden" name="file_name" value="{{$Lecture->file_name}}">
                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('My_Classes_trans.Close') }}</button>
                        <button type="submit"
                                class="btn btn-danger">{{trans('Students_trans.submit')}}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
