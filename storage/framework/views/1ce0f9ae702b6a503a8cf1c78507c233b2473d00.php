<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('editor.catedral-index')->html();
} elseif ($_instance->childHasBeenRendered('XOZLb2n')) {
    $componentId = $_instance->getRenderedChildComponentId('XOZLb2n');
    $componentTag = $_instance->getRenderedChildComponentTagName('XOZLb2n');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XOZLb2n');
} else {
    $response = \Livewire\Livewire::mount('editor.catedral-index');
    $html = $response->html();
    $_instance->logRenderedChild('XOZLb2n', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\catedral\resources\views/editor/catedral/index.blade.php ENDPATH**/ ?>