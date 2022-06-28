

<?php $__env->startSection('title', 'AGREGAR MATERIA PRIMA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>AGREGAR MATERIA PRIMA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>AGREGAR MATERIA PRIMA</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('receta.storeMateriaPrima')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                  <label for="numero_interno">Numero Receta</label>
                  <input type="text" class="form-control" id="receta_id" name="receta_id" value="<?php echo e($receta->id); ?>" >
                </div>
                  
                
                <div class="form-group">
                  <label for="materia_prima_id">Materia prima</label>
                  <select class="form-control" name="materia_prima_id">
                  <option selected disabled>Seleccionar</option>
                  <?php $__currentLoopData = $materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia_prima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($materia_prima->id); ?>"><?php echo e($materia_prima->nombre_mp); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="cantidad_mp">cantidad materia prima</label>
                  <input type="text" class="form-control" id="cantidad_mp" name="cantidad_mp" placeholder="cantidad materia prima">
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/receta/preparadocapsula/crear.blade.php ENDPATH**/ ?>