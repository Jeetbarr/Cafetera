<?php echo e(__('Crear servicio')); ?>


<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<div class="row g-1" style="background-color: teal;width: 700px;height: 400px;margin-left: 337px">
    <br>
    <form action="<?php echo e(url('/Servicio')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="container" style="width: 600px">
            <select id="frmS" class="form-select form-control" style="width:100%"  aria-label="Default select example" name="tipoServicio">
                <option selected>Tipo de Servicio</option>
                <option value="Cafeteria">Cafeteria</option>
                <option value="Te">Afternoon Tea</option>
                <option value="Pasteleria">Pasteleria</option>
            </select>
            <br>
            <div class="row mb">
                <label for="descripcionServicio" style="width: 205px" class="col-sm-2 col-form-label">Descripcion del servicio</label>
                <div class="col-sm-8" >
                  <input type="text" class="form-control" id="descripcionServicio" name="descripcionServicio">
                </div>
            </div>
            <br>
            <div class="row mb">
                <label for="precioServicio" style="width: 205px" class="col-sm-2 col-form-label">Precio del Servicio</label>
                <div class="col-sm-8" >
                  <input type="number" class="form-control" id="precioServicio" name="precioServicio">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="fotoServicio" style="width: 205px" class="col-sm-2 col-form-label">Inserte una foto del Servicio</label>
                <div class="col-sm-8">
                <input class="form-control" type="file" id="fotoServicio" name="fotoServicio">
                </div>
            </div>
            <br>
            <div class="row xs">
            <input type="submit" class="btn btn-outline-success" value="Enviar datos">
            </div>
            <br>
        </div>
    </form>
</div>
<?php /**PATH C:\xampp\htdocs\Practica\Cafetera\resources\views/Servicio/create.blade.php ENDPATH**/ ?>