<?php $__env->startSection('title', 'Catedral de Santiago'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Usuarios</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.users-index')->html();
} elseif ($_instance->childHasBeenRendered('3BID8tQ')) {
    $componentId = $_instance->getRenderedChildComponentId('3BID8tQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('3BID8tQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3BID8tQ');
} else {
    $response = \Livewire\Livewire::mount('admin.users-index');
    $html = $response->html();
    $_instance->logRenderedChild('3BID8tQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon2\www\catedral\resources\views/admin/users/index.blade.php ENDPATH**/ ?>