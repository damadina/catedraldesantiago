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
    <title>Historia de la Catedral de Santiago de Compostela</title>

    <meta name="description" content="  ">
    <meta name="keywords" content="Historia de la Catedral de Santiago"/>
    <link rel="icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <link rel=“canonical” href=”https://catedraldesantiago.online/”/>
<?php $__env->endSlot(); ?>
<?php $__env->slot('overMenu'); ?>
    <div class="bg-catedral mb-2">
        <p class="text-white font-bold py-2 text-center ">Catedral de Santiago de Compostela</p>
    </div>
<?php $__env->endSlot(); ?>


<article itemscope itemtype="https://schema.org/Article">

    <header class="bg-catedral h-60 mt-2 flex" style="background-image: url(<?php echo e(asset('images/BannerHistoria.jpg')); ?>)">
        <h1 class="m-auto text-center text-white uppercase textShadow3 font-semibold text-base sm:text-xl  md:text-3xl lg:text-4xl tracking-[.15em] " itemprop="abstract">
            HISTORIA DE LA CATEDRAL DE SANTIAGO
        </h1>
    </header>

    <div id="historia" class="container mb-24 mt-8">
        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <h2 class="mt-4 text-base md:text-2xl font-semibold underline text-catedral" itemprop="headline"><?php echo e($item->titulo); ?></h2>

            <div class="mt-3 indent-8 text-base md:text-xl text-black " itemprop="articleBody">

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
<?php /**PATH C:\laragon2\www\catedral\resources\views/welcome/historia.blade.php ENDPATH**/ ?>