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
         <title><?php echo e($elemento->visitante); ?></title>

        <meta name="description" content="<?php echo e(Str::limit(strip_tags($elemento->resumen),135),'...'); ?>">
        <meta name="keywords" content="<?php echo e($elemento->name); ?>"/>
        <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('social'); ?>
         <meta property="og:title" content="<?php echo e($elemento->visitante); ?>"/>
         <meta property="og:type"  content="article"/>
         <meta property="og:url"   content="<?php echo e(URL::current()); ?>"/>
         <meta property="og:image" content="<?php echo e(asset('storage/portadas/'.$elemento->urlPortada)); ?>"/>
         <meta property="og:description" content="<?php echo e($elemento->seoDescription); ?>"/>
         <meta property="og:image:type" content="image/jpeg"/>
         <meta property="og:site_name" content="Catedral de Santiago de Compostela"/>
         <meta property="article:publisher" content="https://www.facebook.com/mascompostela/"/>

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:title" content="<?php echo e($elemento->visitante); ?>"/>
        <meta name="twitter:description" content="<?php echo e($elemento->seoDescription); ?>"/>
        <meta name="twitter:image" content="<?php echo e(asset('storage/portadas/'.$elemento->urlPortada)); ?>"/>
     <?php $__env->endSlot(); ?>

     



    

    <article itemscope itemtype="https://schema.org/Article">
        <meta itemprop="abstract" content="<?php echo e('Historia '.$elemento->prefijoH1.' '.$elemento->name); ?>" />
        <meta itemprop="image" content="<?php echo e(asset('/storage/portadas' . '/' . $elemento->urlPortada)); ?>" />
        <meta itemprop="thumbnailUrl" content="<?php echo e(asset('/storage/fotos/' . $elemento->id .'/thumbnail/' . $fotoPagina)); ?>" />



    <header>
        <meta itemprop="name" content="Catedral de Santiago de Compostela" />
        <meta itemprop="abstract" content="<?php echo e($elemento->name); ?>" />


        <div class="relative " >
            <figure >
                <img  alt="Catedral de Santiago de Compostela: <?php echo e($elemento->name); ?>" title="<?php echo e($elemento->name); ?>" class="h-3/4 w-full object-cover object-center"  src="<?php echo e(asset('/storage/portadas' . '/' . $elemento->urlPortada)); ?>">
                <figcaption class="bg-gray-100 text-center pb-2 italic text-gray-600">
                <span class="font-semibold"><?php echo e($elemento->name); ?></span><span> de la Catedral de Santiago</span>
                </figcaption>
            </figure>

           
            <h1 class="w-full  mt-4 text-center text-catedral tracking-widest textShadow3 uppercase  font-semibold text-base sm:text-xl  md:text-2xl lg:text-3xl">
                <span>Toda la historia <?php echo e($elemento->prefijoH1); ?>  <?php echo e($elemento->name); ?></span>
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

        
        <div id="historia" class="container mb-24">
            <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($loop->index !=0 || $elemento->id ==2 || $elemento->id ==44): ?>

                    <?php
                        $id = eliminar_tildes($item->titulo);
                        $id = str_replace(" ","_",$id);

                    ?>

                    <h2 id="<?php echo e($id); ?>" class="mt-4 text-base md:text-xl font-semibold text-catedral scroll-mt-56 lg:scroll-mt-44" itemprop="headline" ><?php echo e($item->titulo); ?></h2>
                <?php else: ?>
                <meta itemprop="headline" content="<?php echo e($elemento->name); ?>" />
                <?php endif; ?>
                <div class="mt-3 indent-8 text-base md:text-xl text-black" itemprop="articleBody" >
                    <?php echo $item->respuesta; ?>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







            <?php if($elemento->id == 44): ?>

                <div
                    class="max-w-7xl mx-auto px-4  pb-4 sm:px-6 lg:px-8 grid grid-cols-1  md:grid-cols-3  gap-x-6 gap-y-8 pt-8">
                    <?php $__currentLoopData = $planos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="mx-auto">
                            <a href="<?php echo e(asset('storage/planos/' . $item->url)); ?>" data-fancybox="group"
                                data-caption="<?php echo e($item->piePlano); ?>">
                                <img loading="lazy" class="rounded" width="150" height="100"
                                    src="<?php echo e(asset('storage/planos/' . $item->url)); ?>" alt="<?php echo e($item->piePlano); ?>">
                            </a>
                            <p class="text-center text-black font-semibold"><?php echo e($item->piePlano); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>

    </article>
   


    <hr class="h-1 mt-4 bg-gray-200">
    <?php $__env->slot('footer'); ?>
        <?php if (isset($component)) { $__componentOriginal60b295928c889414caf64e0dc8844eab4871b174 = $component; } ?>
<?php $component = App\View\Components\CatedralFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('catedral-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\CatedralFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['slug' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($elemento->slug)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal60b295928c889414caf64e0dc8844eab4871b174)): ?>
<?php $component = $__componentOriginal60b295928c889414caf64e0dc8844eab4871b174; ?>
<?php unset($__componentOriginal60b295928c889414caf64e0dc8844eab4871b174); ?>
<?php endif; ?>



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
            // Fetch all the details element.
            const details = document.querySelectorAll("details");

            // Add the onclick listeners.
            details.forEach((targetDetail) => {
                targetDetail.addEventListener("click", () => {
                    // Close all the details that are not targetDetail.
                    details.forEach((detail) => {
                        if (detail !== targetDetail) {
                            detail.removeAttribute("open");
                        }
                    });
                });
            });
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
<?php /**PATH C:\laragon2\www\catedral\resources\views/welcome/showCatedralPostNew.blade.php ENDPATH**/ ?>