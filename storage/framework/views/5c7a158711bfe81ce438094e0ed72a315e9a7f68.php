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
        <title>Misas en Santiago de Compostela</title>

        <meta name="description" content="Horarios de misa en la ciudad de Santiago de Compostela.">
        <meta name="keywords" content="Horarios de misas en la ciudad de Santiago de Compostela"/>
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <?php $__env->endSlot(); ?>

   

    

    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        MISAS EN SANTIAGO DE COMPOSTELA
     </h1>
    <div class="container ">
    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

        <?php echo $misas[0]->respuesta; ?>

        <div class="text-xs italic my-6">
            <a href="http://catedraldesantiago.es/liturgia/#horarios-misas"  target="_blank">Fuente: catedraldesantiago.es</a>
        </div>
    </div>

    </div>









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

<?php /**PATH C:\laragon\www\catedral\resources\views/welcome/misasSantiago.blade.php ENDPATH**/ ?>