<?php echo e(__('mostrar servicios')); ?>

 <table class="table table-dark">
     <thead class="thead-dark">
         <tr>
             <th>#</th>
             <th>Foto</th>
             <th>Tipo de Servicio</th>
             <th>Descripcion</th>
             <th>Precio del Servicio</th>
             <th>Acciones</th>
         </tr>
     </thead>

     <tbody>
         <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
             <td><?php echo e($servicio->idServicio); ?></td>
             <td><?php echo e($servicio->fotoServicio); ?></td>
             <td><?php echo e($servicio->nombreServicio); ?></td>
             <td><?php echo e($servicio->descripcionServicio); ?></td>
             <td><?php echo e($servicio->precioServicio); ?></td>
             <td>Modificar | Eliminar</td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </tbody>
 </table>
<?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Servicio/indexser.blade.php ENDPATH**/ ?>