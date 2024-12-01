
<?php $__env->startSection('css'); ?>

<?php $__env->startSection('title'); ?>
    <?php echo e(trans('main_trans.Add_Parent')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- breadcrumb -->
<?php $__env->startSection('PageTitle'); ?>
    <?php echo e(trans('main_trans.Add_Parent')); ?>

<?php $__env->stopSection(); ?>
<!-- breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-chat', [])->html();
} elseif ($_instance->childHasBeenRendered('ASsjJlx')) {
    $componentId = $_instance->getRenderedChildComponentId('ASsjJlx');
    $componentTag = $_instance->getRenderedChildComponentTagName('ASsjJlx');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ASsjJlx');
} else {
    $response = \Livewire\Livewire::mount('create-chat', []);
    $html = $response->html();
    $_instance->logRenderedChild('ASsjJlx', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/livewire/chat/show_chat.blade.php ENDPATH**/ ?>