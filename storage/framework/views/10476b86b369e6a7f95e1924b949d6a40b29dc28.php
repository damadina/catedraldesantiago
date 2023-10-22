<?php if (isset($component)) { $__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378 = $component; } ?>
<?php $component = App\View\Components\EditorLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('editor-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\EditorLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('elemento', null, []); ?> 
        <?php echo e($elemento->slug); ?>

     <?php $__env->endSlot(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('editor.catedral-index-videos', ['elemento' => $elemento])->html();
} elseif ($_instance->childHasBeenRendered('2tbLwXj')) {
    $componentId = $_instance->getRenderedChildComponentId('2tbLwXj');
    $componentTag = $_instance->getRenderedChildComponentTagName('2tbLwXj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2tbLwXj');
} else {
    $response = \Livewire\Livewire::mount('editor.catedral-index-videos', ['elemento' => $elemento]);
    $html = $response->html();
    $_instance->logRenderedChild('2tbLwXj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->startPush('js'); ?>
        
        <script>
            Livewire.on('deleteVideoSwalert', videoId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar el video",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("En live");
                        Livewire.emitTo('editor.catedral-index-videos', 'deleteVideo', videoId);
                        Swal.fire(
                            'Borrado!',
                            'El video ha sido borrada.',
                            'success'
                        )
                    }
                })
            })
        </script>
    <?php $__env->stopPush(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378)): ?>
<?php $component = $__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378; ?>
<?php unset($__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378); ?>
<?php endif; ?>


<?php /**PATH C:\laragon2\www\catedral\resources\views/editor/catedral/videos/index.blade.php ENDPATH**/ ?>