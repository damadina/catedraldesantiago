<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php if(env('APP_ENV') == 'production'): ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJDWZKPEHZ"></script>
            <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-ZJDWZKPEHZ');
            </script>
        <?php else: ?>
            <meta name="robots" content="index">
        <?php endif; ?>


        <?php if(isset($masHead)): ?>
            <?php echo e($masHead); ?>

        <?php endif; ?>

        <?php if(isset($schema)): ?>
            <?php echo e($schema); ?>

        <?php endif; ?>
        <?php if(isset($social)): ?>
            <?php echo e($social); ?>

        <?php endif; ?>
    
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>

    <div itemscope itemtype="https://schema.org/WebSite">
        <meta itemprop="name" content="Catedral de Santiago de Compostela">
        <meta itemprop="url" content="<?php echo e(URL::to('/')); ?>">
    </div>


    <body class="font-sans antialiased"  >


        <?php echo $__env->make('cookie-consent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(isset($overMenu)): ?>
            <?php echo e($overMenu); ?>

        <?php endif; ?>
       
        <div class="flex justify-center items-center py-1 sticky top-0 z-50 bg-catedral">
            <a  href="<?php echo e(route('home')); ?>">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.application-mark','data' => ['class' => 'block h-9 ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-application-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-9 ']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </a>
            <div class="ml-2 text-center text-white tracking-widest font-semibold text-xs sm:text-xl">
                Catedral de Santiago de Compostela
            </div>
        </div>

        <div class="w-full">
        
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('T1ccyxm')) {
    $componentId = $_instance->getRenderedChildComponentId('T1ccyxm');
    $componentTag = $_instance->getRenderedChildComponentTagName('T1ccyxm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('T1ccyxm');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('T1ccyxm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>

        <!-- Page Heading -->
        <main>
            <!-- Page Content -->
            <?php echo e($slot); ?>

        </main>

        <?php if(isset($footer)): ?>
            <?php echo e($footer); ?>

        <?php endif; ?>





        <?php echo $__env->yieldPushContent('js'); ?>


        <?php if(isset($js)): ?>
             <?php echo e($js); ?>

        <?php endif; ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>

<?php /**PATH C:\laragon\www\catedral\resources\views/layouts/app.blade.php ENDPATH**/ ?>