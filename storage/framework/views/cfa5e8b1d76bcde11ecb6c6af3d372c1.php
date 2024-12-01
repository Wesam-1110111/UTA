<button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showformadd" type="button"><?php echo e(trans('Parent_trans.add_parent')); ?></button><br><br>
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
           style="text-align: center">
        <thead>
        <tr class="table-success">
            <th>#</th>
            <th><?php echo e(trans('Parent_trans.Email')); ?></th>
            <th><?php echo e(trans('Parent_trans.Name_Father')); ?></th>
            <th><?php echo e(trans('Parent_trans.National_ID_Father')); ?></th>
            <th><?php echo e(trans('Parent_trans.Passport_ID_Father')); ?></th>
            <th><?php echo e(trans('Parent_trans.Phone_Father')); ?></th>
            <th><?php echo e(trans('Parent_trans.Job_Father')); ?></th>
            <th><?php echo e(trans('Parent_trans.Processes')); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 0; ?>
        <?php $__currentLoopData = $my_parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $my_parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php $i++; ?>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($my_parent->Email); ?></td>
                <td><?php echo e($my_parent->Name_Father); ?></td>
                <td><?php echo e($my_parent->National_ID_Father); ?></td>
                <td><?php echo e($my_parent->Passport_ID_Father); ?></td>
                <td><?php echo e($my_parent->Phone_Father); ?></td>
                <td><?php echo e($my_parent->Job_Father); ?></td>
                <td>
                    <button wire:click="edit(<?php echo e($my_parent->id); ?>)" title="<?php echo e(trans('Grades_trans.Edit')); ?>"
                            class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" wire:click="delete(<?php echo e($my_parent->id); ?>)" title="<?php echo e(trans('Grades_trans.Delete')); ?>"><i class="fa fa-trash"></i></button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/livewire/Parent_Table.blade.php ENDPATH**/ ?>