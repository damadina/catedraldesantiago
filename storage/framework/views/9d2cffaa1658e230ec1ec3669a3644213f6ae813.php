<?php $__env->startSection('title', 'Catedral de Santiago'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Lista de Roles<h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if( session('info')): ?>
        <div class="alert alert-primary" role="alert">
            <strong>OK. </strong> <?php echo e(session('info')); ?>

        </div>

    <?php endif; ?>

    <div class="card">
        <div class="card-header">
            <a href="<?php echo e(route('admin.roles.create')); ?>">Nuevo Rol</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($role->id); ?></td>
                            <td><?php echo e($role->name); ?></td>

                            <td width="10px">
                                <a class="btn btn-primary" href="<?php echo e(route('admin.roles.edit',$role)); ?>">Edit</a>
                            </td>

                            <td width="10px">
                                <form action="<?php echo e(route('admin.roles.destroy', $role)); ?>" method="POST">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4">
                                    No hay ningun rol registrado
                            </td>
                        </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon2\www\catedral\resources\views/admin/roles/index.blade.php ENDPATH**/ ?>