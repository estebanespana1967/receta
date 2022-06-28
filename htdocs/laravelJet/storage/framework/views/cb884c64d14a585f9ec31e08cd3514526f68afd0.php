

<?php $__env->startSection('title', 'EDITAR MATERIA PRIMA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>EDITAR MATERIA PRIMA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>EDITAR MATERIA PRIMA</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('cotizacioncapsula.actualizarMP', $cotizacion->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                  <div class="form-group">
                  <label for="numero_interno">Numero cotizacion</label>
                  <input type="text" class="form-control" id="cotizacion_detalle_id" name="cotizacion_detalle_id" value="<?php echo e($cotizacion->cotizacion_detalle_id); ?>" >
                </div>
                  
                
                <div class="form-group">
                  <label for="materia_prima_id">Materia prima</label>
                  
                  <select class="form-control" name="materia_prima_id">
                  <option selected disabled>Seleccionar</option>
                  <?php $__currentLoopData = $materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia_prima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($materia_prima->id == $cotizacion->materia_prima_id): ?>
                   <option value="<?php echo e($materia_prima->id); ?>" selected><?php echo e($materia_prima->nombre_mp); ?></option>
                  <?php else: ?>
                  <option value="<?php echo e($materia_prima->id); ?>"><?php echo e($materia_prima->nombre_mp); ?></option>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
                </select>
                </div>
                <div class="form-group">
                  <label for="cantidad_mp">cantidad materia prima</label>
                  <input type="text" class="form-control" value="<?php echo e($cotizacion->cantidad_materia_prima); ?>" id="cantidad_mp" name="cantidad_mp" placeholder="cantidad materia prima">
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/cotizacioncapsula/detalle_capsula/editar.blade.php ENDPATH**/ ?>