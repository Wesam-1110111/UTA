<div class="modal fade" id="ddd<?php echo e($Notification->id); ?>" tabindex="-1" role="dialog"
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
                <form action="<?php echo e(route('Grades.destroy', 'test')); ?>" method="post">
                    <?php echo e(method_field('Delete')); ?>

                    <?php echo csrf_field(); ?>
                    <?php echo e(trans('Grades_trans.Warning_Grade')); ?>

                    <input id="id" type="hidden" name="id" class="form-control"
                        value="<?php echo e($Notification->id); ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"></button>
                        <button type="submit"
                            class="btn btn-danger"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/layouts/notf.blade.php ENDPATH**/ ?>