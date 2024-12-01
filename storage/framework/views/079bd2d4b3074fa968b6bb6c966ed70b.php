<div class="modal fade" id="delete<?php echo e($Notification->id); ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    الإشعار
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('Notifications.destroy', 'test')); ?>" method="post">
                    <?php echo e($Notification->Notes); ?>

                    <?php echo csrf_field(); ?>
                    
                    <input id="id" type="hidden" name="id" class="form-control"
                        value="<?php echo e($Notification->id); ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal"><?php echo e(trans('Grades_trans.Close')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Teachers/dashboard/not.blade.php ENDPATH**/ ?>