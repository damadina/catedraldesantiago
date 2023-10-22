<div class="mb-4">
    <?php echo Form::label('name','nombre del elemento'); ?>

    <?php echo Form::text('name', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('name') ? ' border-red-600' : '')]); ?>

    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<div class="mb-4">
    <?php echo Form::label('slug','slug del elemento'); ?>

    <?php echo Form::text('slug', null, ['readonly'=>'readonly','class' =>'form-input block w-full mt-1'. ($errors->has('slug') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php if(isset($elemento->categoria)): ?>
    <?php
        if($elemento->categoria == 21 or $elemento->categoria ==20) {
            $tipo ="monumento";
        } else {
            $tipo = "catedral";
        }
    ?>
<?php endif; ?>


<div class="form-group mb-4"> <?php echo e(Form::label('categoria' , 'Categoria')); ?>

    <br>

    <?php if($tipo=='catedral'): ?>
        <div class="flex border border-gray-600 py-4 pl-4">
            <div class ="mr-4">
                <label> <?php echo e(Form::radio('categoria', '1', true, ['class'=>'with-gap'])); ?> <span>Fachadas</span> </label>
            </div>
            <div class="mr-4">
                <label> <?php echo e(Form::radio('categoria', '2', false, ['class'=>'with-gap'])); ?> <span>Capilla del interior</span> </label>
            </div>
            <div class="mr-4">
                <label> <?php echo e(Form::radio('categoria', '3', false, ['class'=>'with-gap'])); ?> <span>Otros elementos</span> </label>
            </div>
            <div class="mr-4">
                <label> <?php echo e(Form::radio('categoria', '4', false, ['class'=>'with-gap'])); ?> <span>Pórtico de la Gloria</span> </label>
            </div>
            <div class="mr-4">
                <label> <?php echo e(Form::radio('categoria', '5', false, ['class'=>'with-gap'])); ?> <span>Museo de la Catedral</span> </label>
            </div>
            <div class="mr-4 text-red-800 font-bold">
                <label> <?php echo e(Form::radio('categoria', '6', false, ['class'=>'with-gap'])); ?> <span>HOME</span> </label>
            </div>
            
        </div>
    <?php else: ?>
        <div class="flex border border-gray-600 py-4 pl-4">
            <div class ="mr-4">
                <label> <?php echo e(Form::radio('categoria', '21', true, ['class'=>'with-gap'])); ?> <span>Monumento</span> </label>
            </div>
            <div class ="mr-4">
                <label> <?php echo e(Form::radio('categoria', '20', true, ['class'=>'with-gap'])); ?> <span>HOME</span> </label>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="form-group mb-4"> <?php echo e(Form::label('status' , 'Estado post')); ?>

    <br>
    <div class="flex border border-gray-600 py-4 pl-4">
        <div class ="mr-4">
            <label> <?php echo e(Form::radio('status', '1', true, ['class'=>'with-gap'])); ?> <span>Borrador</span> </label>
        </div>
        <div class="mr-4">
            <label> <?php echo e(Form::radio('status', '2', false, ['class'=>'with-gap'])); ?> <span>Revision</span> </label>
        </div>
        <div class="mr-4">
            <label> <?php echo e(Form::radio('status', '3', false, ['class'=>'with-gap'])); ?> <span>Publicado</span> </label>
        </div>
    </div>
</div>

<div class="mb-4">
    <?php echo Form::label('orden','Orden'); ?>

    <?php echo Form::number('orden', null, ['class' =>'block mt-1'. ($errors->has('orden') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['orden'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-4">

    <?php echo Form::label('prefijoH1','Antes h1 / Coordenadas'); ?>

    <?php echo Form::text('prefijoH1', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('prefijoH1') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['prefijoH1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>



<div class="mb-4">
    <?php echo Form::label('mensaje','Mensaje de información'); ?>

    <?php echo Form::textarea('mensaje', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('mensaje') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['mensaje'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>

<div class="mb-4">
    <?php echo Form::label('resumen','Resumen'); ?>

    <?php echo Form::textarea('resumen', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('resumen') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['resumen'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>

<div class="mb-4">
    <?php echo Form::label('historia','Historia'); ?>

    <?php echo Form::textarea('historia', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('historia') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['historia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>



<h1 class="text-2xl font-bold mt-8 mb-2">Imagen de portada (950 x 600)</h1>
<div class="grid grid-cols-2 gap-4">
    <figure>
        <?php if(isset($elemento->urlPortada)): ?>
            <img id="picture" class="object-cover object-center" src="<?php echo e(Storage::url('portadas/'.$elemento->urlPortada)); ?>" alt="">
        <?php else: ?>
            <img id="picture" class="object-cover object-center" src="<?php echo e(asset('images/NoFoto.png')); ?>" alt="">
        <?php endif; ?>
    </figure>
    <div>
        <?php echo Form::file('file', ['class' => 'form-input w-full', 'id' => 'file']); ?>

    </div>
</div>


<div class="mb-4 mt-4">
    <?php echo Form::label('visitante','SEO Titulo'); ?>

    <?php echo Form::textarea('visitante', null, ['class' =>'form-input block w-full mt-1 '. ($errors->has('visitante') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['visitante'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div>


<div class="mb-4">
    <?php echo Form::label('seoDescription','SEO Descripción'); ?>

    <?php echo Form::textarea('seoDescription', null, ['class' =>'form-input block w-full mt-1'. ($errors->has('seoDescription') ? ' border-red-600' : '') ]); ?>

    <?php $__errorArgs = ['seoDescription'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
       <strong class="text-xs text-red-600"><?php echo e($message); ?></strong>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>



<?php /**PATH C:\laragon\www\catedral\resources\views/editor/catedral/partials/form.blade.php ENDPATH**/ ?>