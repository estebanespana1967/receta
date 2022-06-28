

<?php $__env->startSection('title', 'MATERIA_PRIMA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>MATERIA MATERIA_PRIMA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>materia_prima Editar</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('materia_prima.update', $materia_prima->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                 <div class="form-group">
                  <label for="nombre">id</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="Ingresa el id" value="<?php echo e($materia_prima->id); ?>" disabled >
                </div>
                <div class="form-group">
                  <label for="nombre">nombre_mp</label>
                  <input type="text" class="form-control" id="nombre_mp" name="nombre_mp" placeholder="Ingresa el nombre mp" value="<?php echo e($materia_prima->nombre_mp); ?>"  >
                </div>
                <div class="form-group">
                  <label for="nombre">fecha venci</label>
                  <input type="text" class="form-control" id="fecha_venci" name="fecha_venci" placeholder="Ingresa fecha vencim" value="<?php echo e($materia_prima->fecha_venci); ?>" >
                </div>
                <div class="form-group">
                  <label for="nombre">lote</label>
                  <input type="text" class="form-control" id="lote" name="lote" placeholder="Ingresa el lote" value="<?php echo e($materia_prima->lote); ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">serie</label>
                  <input type="text" class="form-control" id="serie"  name="serie" placeholder="Ingresa la serie" value="<?php echo e($materia_prima->serie); ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">proveedor</label>
                  <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="Ingresa proveedor" value="<?php echo e($materia_prima->proveedor); ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">costo</label>
                  <input type="text" class="form-control" id="costo" name="costo" placeholder="Ingresa costo" value="<?php echo e($materia_prima->costo); ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">venta</label>
                  <input type="text" class="form-control" id="venta" name="venta" placeholder="Ingresa valor venta" value="<?php echo e($materia_prima->venta); ?>">
                </div><div class="form-group">
                  <label for="nombre">stock</label>
                  <input type="text" class="form-control" id="stock" name="stock" placeholder="Ingresa stock" value="<?php echo e($materia_prima->stock); ?>">
                </div>
                <button type="submit" class="btn btn-primary">Editar</button>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/materia_prima/editar.blade.php ENDPATH**/ ?>