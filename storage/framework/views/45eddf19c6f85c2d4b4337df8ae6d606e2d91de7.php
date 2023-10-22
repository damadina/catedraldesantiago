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
    $html = \Livewire\Livewire::mount('editor.catedral-index-fotos', ['elemento' => $elemento])->html();
} elseif ($_instance->childHasBeenRendered('bq9AYvS')) {
    $componentId = $_instance->getRenderedChildComponentId('bq9AYvS');
    $componentTag = $_instance->getRenderedChildComponentTagName('bq9AYvS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bq9AYvS');
} else {
    $response = \Livewire\Livewire::mount('editor.catedral-index-fotos', ['elemento' => $elemento]);
    $html = $response->html();
    $_instance->logRenderedChild('bq9AYvS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <?php $__env->startPush('js'); ?>
        
        <script>
            Livewire.on('deleteFotoSwalert', fotoId => {
                Swal.fire({
                    title: 'Esta seguro?',
                    text: "Vas ha eliminar la foto",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'SI'
                }).then((result) => {
                    if (result.isConfirmed) {
                        console.log("En live");
                        Livewire.emitTo('editor.catedral-index-fotos', 'deleteFoto', fotoId);
                        Swal.fire(
                            'Borrado!',
                            'La foto ha sido borrada.',
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

<?php /**PATH C:\laragon\www\catedral\resources\views/editor/catedral/fotos/index.blade.php ENDPATH**/ ?>