<?php $__env->startSection('content'); ?>

    <div class="container text-light">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Venta</th>
                        <th>Nombre del Cliente</th>
                        <th>Cantidad de pedidos</th>
                        <th>Valor total</th>

                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $Clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td>
                                <img class="img-thumbnail img-fluid"
                                    src="<?php echo e(asset('storage') . '/' . $clien->servicios->fotoServicio); ?>" width="150"
                                    alt="">

                            </td>
                            <td><?php echo e($clien->servicios->ventaServicio); ?></td>
                            <td><?php echo e($clien->nombreCliente); ?></td>
                            <td><?php echo e($clien->cantpedidoCliente); ?></td>
                            <td><?php echo e($suma = $clien->servicios->precioServicio * $clien->cantpedidoCliente); ?></td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/relacion.blade.php ENDPATH**/ ?>