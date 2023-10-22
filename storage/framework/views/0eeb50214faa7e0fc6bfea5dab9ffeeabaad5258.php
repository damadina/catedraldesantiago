<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="robots" content="noindex,nofollow">
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>


        <!-- Fonts -->
        

        <!-- Styles -->
       

        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <link rel="stylesheet" href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>">
        
        
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">

        <?php echo \Livewire\Livewire::styles(); ?>


        <style>
            h2 {

            color: #aa3b54;
            font-size: 24px;
            }
            h3 {
                font-weight: bold;
                color: #941431;
                font-size: 20px;
            }
            h4 {
                color: #941431;
                font-size: 18px;
                margin-left: 2em;
            }
            b, strong, a {
                color: #941431;
            }


        </style>



        <!-- Scripts -->
        

    </head>
    <body class="font-sans antialiased">


        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

        <div class="min-h-screen bg-gray-100">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('NqaF1sg')) {
    $componentId = $_instance->getRenderedChildComponentId('NqaF1sg');
    $componentTag = $_instance->getRenderedChildComponentTagName('NqaF1sg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NqaF1sg');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('NqaF1sg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <!-- Page Heading -->
            <?php if(isset($header)): ?>
                <header class="bg-gray-100 shadow">
                    <div class="max-w-7xl text-2xl text-center mx-auto py-2 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">
                <aside>

                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                     href="<?php echo e(route('editor.catedrals.index')); ?>">Volver</a>
                    <h1 class="pt-8 font-bold text-lg mb-4">Edicción elemento </h1>
                    <ul class="text-sm text-gray-600">
                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.catedrals.edit',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.catedrals.edit',$elemento)); ?>">Texto</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.fotos.index',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.fotos.index',$elemento)); ?>">Fotos</a>

                        </li>
                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.videos.index',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.videos.index',$elemento)); ?>">Videos</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.informations.index',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.informations.index',$elemento)); ?>">Informaciones</a>
                        </li>

                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.questions.index',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.questions.index',$elemento)); ?>">Preguntas frecuentes</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 <?php if(Request::url() == route('editor.planos.index',$elemento)): ?> border-indigo-400 <?php else: ?> border-transparent  <?php endif; ?>  pl-2">
                            <a href="<?php echo e(route('editor.planos.index',$elemento)); ?>">Ubicación</a>
                        </li>


                    </ul>
                </aside>

                <div class="col-span-4 card">
                    <main class="card-body text-gray-600">
                        <?php echo e($slot); ?>

                    </main>

                </div>

            </div>
        </div>

        <?php echo $__env->yieldPushContent('modals'); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo $__env->yieldPushContent('js'); ?>

        <?php if(isset($js)): ?>
             <?php echo e($js); ?>

        <?php endif; ?>

    </body>
</html>
<?php /**PATH C:\laragon2\www\catedral\resources\views/layouts/editor.blade.php ENDPATH**/ ?>