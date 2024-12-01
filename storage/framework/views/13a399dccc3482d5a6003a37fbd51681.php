<!-- Deleted inFormation Student -->
<div class="modal fade" id="Delete_Student<?php echo e($student->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel"><?php echo e(trans('Students_trans.Deleted_Student')); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('Students.destroy','test')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <input type="hidden" name="id" value="<?php echo e($student->id); ?>">

                    <h5 style="font-family: 'Cairo', sans-serif;"><?php echo e(trans('Students_trans.Deleted_Student_tilte')); ?></h5>
                    <input type="text" readonly value="<?php echo e($student->name); ?>" class="form-control">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(trans('Students_trans.Close')); ?></button>
                        <button  class="btn btn-danger"><?php echo e(trans('Students_trans.submit')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/pages/Students/Delete.blade.php ENDPATH**/ ?>