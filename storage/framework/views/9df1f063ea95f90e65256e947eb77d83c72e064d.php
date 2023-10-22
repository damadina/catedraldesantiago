<div class="container py-8">

   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table-responsive','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table-responsive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <div class="bg-gray-200 py-4">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
                <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700" wire:click="catedral">
                    Elementos de la Catedral
                </button>
                <button class="ml-6 bg-white shadow h-12 px-4 rounded-lg text-gray-700" wire:click="monumentos">
                    Monumentos
                </button>
            </div>
        </div>

        


        <?php if($tipo=="catedral"): ?>
        <p class="mt-6 text-gray-600 text-xl text-center">ELEMENTOS DE LA CATEDRAL</p>
        <?php else: ?>
        <p class="mt-6 text-gray-600 text-xl text-center">MONUMENTOS DE SANTIAGO</p>
        <?php endif; ?>

        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

            <div class="px-6 py-4 flex">
                <input wire:model="search" wire:keydown="limpiar_page"  class=" form-input flex-1 shadow-sm" placeholder="Introduce el nombre de elemento ....">

                <a class="btn btn-danger ml-2" href="<?php echo e(route('editor.catedrals.create',$tipo)); ?>">Crear nuevo elemento</a>
            </div>
            <?php if($elementos->count()): ?>
                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Orden</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $__currentLoopData = $elementos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elemento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap ">
                                    <div class="flex items-center">

                                        <div class="flex-shrink-0 w-20  inline-block align-middle  ">
                                            <?php if(isset($elemento->urlPortada)): ?>
                                                <img class="object-cover object-center  " src="<?php echo e(Storage::url('portadas/'.$elemento->urlPortada)); ?>" alt="">
                                            <?php else: ?>
                                                <img class="object-cover object-center " src="<?php echo e(asset('images/NoFoto.png')); ?>" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-lg font-medium text-gray-900">
                                                <?php echo e($elemento->name); ?>

                                            </div>
                                            <div>
                                                <div class="text-sm text-gray-500"><?php echo e($elemento->categorianame); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500"><?php echo e($elemento->orden); ?></div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <?php switch($elemento->status):
                                        case (1): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> Borrador </span>
                                            <?php break; ?>
                                        <?php case (2): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"> Revisión </span>
                                            <?php break; ?>
                                        <?php case (3): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Publicado </span>
                                        <?php break; ?>

                                        <?php default: ?>

                                    <?php endswitch; ?>


                                </td>


                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <?php
                                        if($elemento->categoria == 6){
                                            $ruta = route('home') ;
                                        } else {
                                            $ruta = route('catedral.show',$elemento);
                                        }


                                    ?>

                                    <a  href= "<?php echo e($ruta); ?>" class="btn btn-primary mr-4">
                                        <i class="fas fa-eye"></i>
                                    </a>


                                    <a  href="<?php echo e(route('editor.catedrals.edit', $elemento)); ?>" class="btn btn-primary mr-4">

                                        <i class="fas fa-edit"></i>
                                    </a>



                                    


                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- More people... -->
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    <?php echo e($elementos->links()); ?>

                </div>
            <?php else: ?>
                <div class="px-6 py-4">
                    No hemos encontrado ningún elemento
                </div>
            <?php endif; ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

</div>
<?php /**PATH C:\laragon2\www\catedral\resources\views/livewire/editor/catedral-index.blade.php ENDPATH**/ ?>