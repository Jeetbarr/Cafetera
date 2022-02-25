<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

<?php endif; ?>

<nav class="container-lg card-tittle" style="margin-left: 240px;margin-top:10px">
    <h2> <?php echo e($mod); ?> Cliente</h2>
</nav>
<div class="container" style="width: 600px; margin-top: 30px;">

    <div class="form-group">
        <label for="nombreCliente" style="width: 160px" class="col-sm-3 col-form-label">Nombre del Cliente</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="nombreCliente" name="nombreCliente"
                value="<?php echo e(isset($Client->nombreCliente) ? $Client->nombreCliente : old('nombreCliente')); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="id_servicios" style="width: 160px" class="col-sm-3 col-form-label">Venta(ID)</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="id_servicios" name="id_servicios"
                value="<?php echo e(isset($Client->id_servicios) ? $Client->id_servicios : old('id_servicios')); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="rutCliente" style="width: 160px" class="col-sm-2 col-form-label">Rut del Cliente</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="rutCliente" name="rutCliente"
                value="<?php echo e(isset($Client->rutCliente) ? $Client->rutCliente : old('rutCliente')); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="cantpedidoCliente" style="width: 160px" class="col-sm-2 col-form-label">Cantidad de pedidos</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="cantpedidoCliente" name="cantpedidoCliente"
                value="<?php echo e(isset($Client->cantpedidoCliente) ? $Client->cantpedidoCliente : old('cantpedidoCliente')); ?>">
        </div>
    </div>
    <br>
    <div class="btn" style="margin-left: 150px">
        <input type="submit" style="width: 120px" class="btn btn-success" value="<?php echo e($mod); ?> datos">
        | <a class="btn btn-primary" style="width: 120px" href="<?php echo e(url('Clientes/')); ?>">Volver</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Clientes/frm.blade.php ENDPATH**/ ?>