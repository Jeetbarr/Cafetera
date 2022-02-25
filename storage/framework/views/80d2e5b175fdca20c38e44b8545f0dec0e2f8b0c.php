<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row g-1 text-light"
            style="background-color: teal;width: 700px;height: 570px;margin-left: 200px;">
            <form action="<?php echo e(route('Servicios.update', $Servici->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <?php echo $__env->make('Servicios.frms',['mod'=>'Modificar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Servicios/editar.blade.php ENDPATH**/ ?>