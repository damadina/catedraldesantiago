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
        <title>Horarios de la Catedral de Santiago de Compostela</title>

        <meta name="description" content="Horarios de apertura y cierre de las distintas partes de la Catedral de Santiago de Compostela. ** Descargate el plano de la Catedral **">
        <meta name="keywords" content="Horarios de la Catedral de Santiago"/>
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <?php $__env->endSlot(); ?>

    

   

    <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
        FUNCIONAMIENTO DEL BOTAFUMEIRO
     </h1>
    <div class="container grid grid-1 md:grid-cols-2 gap-4">
    <div class="mt-3 indent-8 text-base md:text-xl text-black ">

        <?php echo $botafumeiro[0]->respuesta; ?>

        <div class="text-xs italic my-6">
            <a href="http://catedraldesantiago.es/liturgia/#botafumeiro"  target="_blank">Fuente: catedraldesantiago.es</a>
        </div>
    </div>
    <div class="my-auto">
        <div>
            <img loading="lazy" src="<?php echo e(asset('images/PlanoCatedral.jpg')); ?>" alt="Plano de la Catedral de Santiago de Compostela">
        </div>
        <a href="<?php echo e(route('download')); ?>"
                    class="mt-8 mb-6 bg-black hover:bg-catedral text-white font-bold py-2 px-4 border border-gray-700 rounded inline-flex items-center"
                    title="Descárgate el plano de la Catedral de Santiago">

                    <span class="text-xs md:text-base">Descárgate el plano de la Catedral</span>
                </a>
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

<?php /**PATH C:\laragon\www\catedral\resources\views/welcome/funcionamientoBotafumeiro.blade.php ENDPATH**/ ?>