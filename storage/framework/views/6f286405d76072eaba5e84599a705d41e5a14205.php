<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row g-1 text-light"
            style="background-color: teal;width: 700px;height: 575px;margin-left: 200px;">
            <form action="<?php echo e(route('Clientes.update', $Client->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <?php echo $__env->make('Clientes.frm',['mod'=>'Modificar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Clientes/editar.blade.php ENDPATH**/ ?>