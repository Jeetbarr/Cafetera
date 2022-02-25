<?php $__env->startSection('content'); ?>
    <div class="container text-light">

            <?php if(Session::has('mensaje')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(Session::get('mensaje')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <?php endif; ?>

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Venta</th>
                    <th>Precio del Servicio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $Servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($serv->id); ?></td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage') . '/' . $serv->fotoServicio); ?>"
                                width="150" alt="">

                        </td>
                        <td><?php echo e($serv->ventaServicio); ?></td>
                        <td><?php echo e($serv->precioServicio); ?></td>
                        <td>

                            <a class="btn btn-warning text-light" style="width: 80px; height: 35px;"
                                href="<?php echo e(route('Servicios.edit', $serv->id)); ?>">
                                Modificar
                            </a>

                            |

                            <form action="<?php echo e(url('/Servicios/' . $serv->id)); ?>" class="d-inline" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo e(method_field('DELETE')); ?>

                                <input class="btn btn-danger" style="width: 80px; height: 35px;" type="submit"
                                    onclick="return confirm('¿Eliminar definitivo?')" value="Eliminar">
                            </form>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

            <a class="btn btn-info text-white" style="margin-left: 450px;margin-bottom: 10px"
                href="<?php echo e(url('Servicios/create')); ?>">Registrar Nueva Orden</a>
        </table>
        {<?php echo $Servicios->links(); ?>}


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Servicios/index.blade.php ENDPATH**/ ?>