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
    <h2> <?php echo e($mod); ?> Servicio</h2>
</nav>
<div class="container" style="width: 600px; margin-top: 30px;">

    <div class="form-group">
        <label for="ventaServicio" style="width: 160px" class="col-sm-2 col-form-label">Venta</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" id="ventaServicio" name="ventaServicio"
                value="<?php echo e(isset($Servici->ventaServicio) ? $Servici->ventaServicio : old('ventaServicio')); ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="precioServicio" style="width: 160px" class="col-sm-2 col-form-label">Precio del Servicio</label>
        <div class="col-sm-12">
            <input type="number" class="form-control" id="precioServicio" name="precioServicio"
                value="<?php echo e(isset($Servici->precioServicio) ? $Servici->precioServicio : old('precioServicio')); ?>">
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="fotoServicio" style="width: 240px" class="col-sm-12 col-form-label"></label>
        <?php if(isset($Servici->fotoServicio)): ?>
            <img name="fotoServicio" id="fotoServicio" class="img-thumbnail img-fluid"
                src="<?php echo e(asset('storage') . '/' . $Servici->fotoServicio); ?>" alt=""
                style="width: 100px;height: 100px;">
        <?php endif; ?>
        <div class="col-sm-12">
            <input class="form-control" type="file" id="fotoServicio" name="fotoServicio">
        </div>
    </div><br>
    <div class="btn" style="margin-left: 150px">
        <input type="submit" style="width: 120px" class="btn btn-success" value="<?php echo e($mod); ?> datos">
        | <a class="btn btn-primary" style="width: 120px" href="<?php echo e(url('Servicios/')); ?>">Volver</a>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Servicios/frms.blade.php ENDPATH**/ ?>