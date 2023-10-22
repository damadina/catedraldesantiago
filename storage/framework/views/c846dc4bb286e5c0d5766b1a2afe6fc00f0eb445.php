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
        <title>Catedral de Santiago de Compostela</title>

        <meta name="description" content="La Catedral de Santiago de Compostela es la obra más sobresaliente del arte románico en España. Es, además, la meta final de todos los Caminos de Santiago, que durante siglos han llevado a los peregrinos de la Cristiandad hacia la tumba de un apóstol.">
        <meta name="keywords" content="Catedral de Santiago"/>
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('social'); ?>
        <meta property="og:title" content="<?php echo e($elemento->name); ?>"/>
        <meta property="og:type"  content="article"/>
        <meta property="og:url"   content="<?php echo e(URL::current()); ?>"/>

        <meta property="og:image" content="<?php echo e(asset('storage/portadas/'.$elemento->urlPortada)); ?>"/>
        <meta property="og:description" content="<?php echo e($elemento->seoDescription); ?>"/>
        <meta property="og:image:type" content="image/jpeg"/>
        <meta property="og:image:width" content="950" />
		<meta property="og:image:height" content="600" />

        <meta property="og:site_name" content="Catedral de Santiago de Compostela"/>
        <meta property="article:publisher" content="https://www.facebook.com/mascompostela/"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?php echo e($elemento->visitante); ?>"/>
        <meta name="twitter:description" content="<?php echo e($elemento->seoDescription); ?>"/>
        <meta name="twitter:image" content="<?php echo e(asset('storage/portadas/'.$elemento->urlPortada)); ?>"/>

    <?php $__env->endSlot(); ?>


    <article itemprop="mainEntity" itemscope itemtype="http://schema.org/Article">
        <meta itemprop="abstract" content="Toda la Historia de la Catedral de Santiago de Compostela" />
        <meta itemprop="name" content="Catedral de Santiago de Compostela">
        <meta itemprop="image" content="<?php echo e(asset('/storage/portadas' . '/' . $elemento->urlPortada)); ?>">
        <meta itemprop="thumbnailUrl" content="<?php echo e(URL(asset('/storage/fotos/' . $elemento->id .'/thumbnail/' . $fotoPagina))); ?>">

        <header>
            <meta itemprop="name" content="Catedral de Santiago de Compostela" />
            <meta itemprop="abstract" content="<?php echo e($elemento->name); ?>" />


            <div >
                <figure >
                    <img  alt="<?php echo e($elemento->name); ?>" title="<?php echo e($elemento->name); ?>" class="h-3/4 w-full object-cover object-center"  src="<?php echo e(asset('/storage/portadas' . '/' . $elemento->urlPortada)); ?>">
                    <figcaption class="bg-gray-100 text-center pb-2 italic text-gray-600">
                    <span class="font-semibold">Fachada del Obradoiro</span><span> de la Catedral de Santiago</span>
                    </figcaption>
                </figure>

                <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
                    Toda la historia de la Catedral de santiago de Compostela
                </h1>

            </div>
            <div class="container">
                <div class="border-l-4 pl-4 border-catedral indent-8 text-gray-600 italic text-lg mt-6 sm:text-xl tracking-wide">
                    <?php echo $elemento->resumen; ?>

                </div>
            </div>

        </header>

        <hr class="h-1 mt-4  bg-gray-200">
        <?php

            function eliminar_tildes($cadena){

                //Codificamos la cadena en formato utf8 en caso de que nos de errores
                /* $cadena = utf8_encode($cadena); */

                //Ahora reemplazamos las letras
                $cadena = str_replace(
                    array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
                    array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
                    $cadena
                );

                $cadena = str_replace(
                    array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
                    array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
                    $cadena );

                $cadena = str_replace(
                    array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
                    array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
                    $cadena );

                $cadena = str_replace(
                    array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
                    array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
                    $cadena );

                $cadena = str_replace(
                    array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
                    array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
                    $cadena );

                $cadena = str_replace(
                    array('ñ', 'Ñ', 'ç', 'Ç'),
                    array('n', 'N', 'c', 'C'),
                    $cadena
                );

                return $cadena;
            }
        ?>

        <div id="historia" class="container mb-24 mt-8">
            <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php

                    $id = eliminar_tildes($item->titulo);
                    $id = str_replace(" ","_",$id);


                ?>
                <h2 id="<?php echo e($id); ?>" class="mt-4 text-base md:text-2xl font-semibold underline text-catedral scroll-mt-56 lg:scroll-mt-44" itemprop="headline"><?php echo e($item->titulo); ?></h2>

                <div class="mt-3 indent-8 text-base md:text-xl text-black" itemprop="articleBody">

                    <?php echo $item->respuesta; ?>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </article>
    <?php $__env->slot('footer'); ?>
        <button id="btnScrollToTop" aria-label="Center Align" class="top"></button>
        <div id="fb-root"></div>

        <div class="fixed bottom-16 right-2  ">
            <!-- Your share button code -->
            <div class="fb-share-button" data-href="<?php echo e(URL::current()); ?>" data-layout="button">
            </div>
            <div class="mt-2">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                    data-show-count="false"></a>
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
    <?php $__env->endSlot(); ?>

    <?php $__env->slot('js'); ?>


        <script>
            setTimeout(btnTop,5000);
            function btnTop() {
                const btnScrollToTop = document.querySelector('#btnScrollToTop');
                btnScrollToTop.addEventListener('click', function() {
                    window.scrollTo({
                        top: 0,
                        left: 0,
                        behavior: "smooth"
                    })
                });
            }
        </script>

        <script>
            setTimeout(loadFacebook,10000);

            function loadFacebook() {
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    /* console.log("crago facebook"); */
            }
        </script>


        <script>
            // Retrasa la carga twiter 10 segundos
            var linkTwiter = document.createElement('link');
            linkTwiter.href ='https://platform.twitter.com/widgets.js';
            linkTwiter.as = 'script';
            linkTwiter.rel = 'preload';
            document.head.appendChild(linkTwiter);
            setTimeout(loadScript,10000);
            function loadScript() {
                var scriptTwiter = document.createElement('script');
                scriptTwiter.src = 'https://platform.twitter.com/widgets.js';
                document.body.appendChild(scriptTwiter);
                /* console.log("crago twiter"); */

            }
        </script>

    <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\laragon2\www\catedral\resources\views/welcome/inicio.blade.php ENDPATH**/ ?>