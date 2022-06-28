

<?php $__env->startSection('title', 'Materia_prima'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>MATERIA_PRIMA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>materia_prima Nuevo</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('materia_prima.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                  <label for="nombre">nombre_mp</label>
                  <input type="text" class="form-control" id="nombre_mp" name="nombre_mp" placeholder="Ingresa materia_prima" >
                </div>
                <div class="form-group">
                  <label for="nombre">fecha_venci</label>
                  <input type="text" class="form-control" id="fecha_venci" name="fecha_venci" placeholder="Ingresa fecha venci" >
                </div>
                <div class="form-group">
                  <label for="nombre">lote</label>
                  <input type="text" class="form-control" id="lote" name="lote" placeholder="Ingresa el lote">
                </div>
                <div class="form-group">
                  <label for="descripcion">serie</label>
                  <input type="text" class="form-control" id="serie"  name="serie" placeholder="Ingresa serie">
                </div>
                <div class="form-group">
                  <label for="serial">proveedor</label>
                  <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Ingresa proveedor">
                </div>
                <div class="form-group">
                  <label for="serial">costo por MG/ML</label>
                  <input type="text" class="form-control" id="costo" name="costo" placeholder="Ingresa costo">
                </div>
                <div class="form-group">
                  <label for="serial">venta por MG/ML</label>
                  <input type="text" class="form-control" id="venta" name="venta" placeholder="Ingresa venta">
                </div>
                <div class="form-group">
                  <label for="serial">stock</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingresa stock">
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
              </form>
        </div>
        <div class="col-1"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/materia_prima/crear.blade.php ENDPATH**/ ?>