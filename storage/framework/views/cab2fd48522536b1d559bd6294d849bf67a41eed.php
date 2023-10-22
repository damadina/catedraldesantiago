<div class="container grid grid-1 md:grid-cols-4 gap-4 mt-8 mb-8" itemscope itemtype="https://schema.org/BreadcrumbList">
    <?php $__currentLoopData = $elementos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a itemprop="url" href="<?php echo e(route('catedral.show',$item)); ?>" title="<?php echo e($item->name); ?>" class=" py-0 px-4  border-2  hover:shadow-xl">
            <figure class="">
                <img loading="lazy" class="m-2 w-full rounded-lg" src="<?php echo e(asset('storage/portadas/'.$item->urlPortada)); ?>"/>
                <figcaption>
                    <h2 itemprop="name"   class="text-catedral text-center text-lg font-semibold"><?php echo e($item->name); ?></h2>
                    <p class="text-gray-700 font-normal"><?php echo e(Str::limit(strip_tags($item->resumen),200)); ?></p>
                </figcaption>
            </figure>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\catedral\resources\views/components/partes-catedral.blade.php ENDPATH**/ ?>