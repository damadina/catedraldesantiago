<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->slot('masHead'); ?>
        <title>Interior de la Catedral de Santiago de Compostela</title>

        <meta name="description" content="Todos los espacios y elementos del interior de la Catedral de Santiago: Pórtico de la Gloria, Botafumeiro, Claustro, Cripta Apostólica, excavaciones arqueológicas …
        ">
        <meta name="keywords" content="Interior de la Catedral de Santiago"/>
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <?php $__env->endSlot(); ?>
   
    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        INTERIOR DE LA CATEDRAL DE SANTIAGO
    </h1>



    



    <?php if (isset($component)) { $__componentOriginal7b98ad289a29989b2b1aed181f48d96d8970d31b = $component; } ?>
<?php $component = App\View\Components\PartesCatedral::resolve(['elementos' => $otros] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('partes-catedral'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\PartesCatedral::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b98ad289a29989b2b1aed181f48d96d8970d31b)): ?>
<?php $component = $__componentOriginal7b98ad289a29989b2b1aed181f48d96d8970d31b; ?>
<?php unset($__componentOriginal7b98ad289a29989b2b1aed181f48d96d8970d31b); ?>
<?php endif; ?>






    <?php if (isset($component)) { $__componentOriginal60b295928c889414caf64e0dc8844eab4871b174 = $component; } ?>
<?php $component = App\View\Components\CatedralFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('catedral-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CatedralFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60b295928c889414caf64e0dc8844eab4871b174)): ?>
<?php $component = $__componentOriginal60b295928c889414caf64e0dc8844eab4871b174; ?>
<?php unset($__componentOriginal60b295928c889414caf64e0dc8844eab4871b174); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\laragon\www\catedral\resources\views/welcome/interiorCatedral.blade.php ENDPATH**/ ?>