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

    <h1 class="text-2xl font-bold">Textos del elemento</h1>
                        <hr class="mt-2 mb-6">


        <?php echo Form::model($elemento, ['route' => ['editor.catedrals.update', $elemento], 'method' => 'put', 'files'  => true]); ?>

            <?php echo $__env->make('editor.catedral.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="flex justify-end">
                <?php echo Form::submit('Actualizar información', ['class' => 'btn btn-primary cursor-pointer']); ?>

            </div>
        <?php echo Form::close(); ?>



     <?php $__env->slot('js', null, []); ?> 
        <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
        <script src="<?php echo e(asset('js/editor/catedral/form.js')); ?>"></script>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378)): ?>
<?php $component = $__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378; ?>
<?php unset($__componentOriginal3c0448b937bbb1f49ef7cd1a6dd57c31a9deb378); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\catedral\resources\views/editor/catedral/edit.blade.php ENDPATH**/ ?>