<?php $__env->startSection('content'); ?>
    <div class="container ">
        <div class="row">

            <div class="card ">
                <div class="card-header "><?php echo e(__('Menu Cafeteria')); ?></div>

                <div class="card-body ">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div style="margin-left: 450px"><h4 class=" card-title "><?php echo e(__('Ordenes ')); ?></h4></div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/home.blade.php ENDPATH**/ ?>