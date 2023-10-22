<div>
    <form class="flex flex-col w-full px-8 md:px-0 md:w-1/2 pt-2 relative mx-auto text-gray-600" autocomplete="off" >
        
        <input id="siteSearch" wire:model="buscar"  class="w-full border-2 border-gray-300 bg-white h-8 md:h-10 px-5  rounded-lg text-xs md:text-sm focus:outline-none"
        type="search" name="buscar" placeholder="¿Qúe buscas de la Catedral de Santiago?">

        



        <?php if($buscar): ?>
            <ul class="left-0 bg-gray-100 mt-1 rounded-lg overflow-auto h-72 w-full z-50">
                <?php $__empty_1 = true; $__currentLoopData = $this->results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <li class="leading-10 text-left ml-2 text-xs sm:text-sm cursor-pointer hover:bg-gray-300">
                       <a href="<?php echo e(env('APP_URL')); ?>/<?php echo e($result['slug']); ?>" wire:click="clickBuscar()"><?php echo e($result['name']); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <li class="leading-10 px-5 text-xs cursor-pointer hover:bg-gray-300">
                    No hemos encontardo ninguna coincidencia

                </li>
                <?php endif; ?>

            </ul>
        <?php endif; ?>

    </form>
</div>



<?php /**PATH C:\laragon2\www\catedral\resources\views/livewire/search.blade.php ENDPATH**/ ?>