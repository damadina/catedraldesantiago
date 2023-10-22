<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="container py-8">
    <div class="card">
        <div class="card-body">
            <h1 class="text-2xl text-bold">Crear nuevo elemento</h1>
            <hr class="mt2 mb-6">
            <?php echo Form::open(['route' => 'editor.catedrals.store','files' => true, 'autocomplete' => 'off']); ?>

            <?php echo $__env->make('editor.catedral.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="flex justify-end">
                <a class ="btn btn-danger mr-6" href="<?php echo e(route('editor.catedrals.index')); ?>">Cancelar</a>
                <?php echo Form::submit('Crear elemento', ['class' => 'btn btn-primary cursor-pointer']); ?>


            </div>
           <?php echo Form::close(); ?>


        </div>
    </div>


</div>
 <?php $__env->slot('js', null, []); ?> 
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <script src="<?php echo e(asset('js/editor/catedral/form.js')); ?>"></script>
 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon2\www\catedral\resources\views/editor/catedral/create.blade.php ENDPATH**/ ?>