

<?php $__env->startSection('title', 'COTIZACION'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>CREAR COTIZACION</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>Receta Nuevo</h1>
    <div class="row">
        <div class="col-1">cotizacion !!!!</div>
        <div class="col-10">
            <form action="<?php echo e(route('cotizacioncapsula.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                  <label for="persona_id">id persona</label>
                  <input type="text" class="form-control" id="persona_id" name="persona_id"  value="<?php echo e($persona->id); ?>"  readonly>
                </div>
                <div class="form-group">
                  <label for="nombre_completo">nombre completo</label>
                  <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="<?php echo e($persona->nombre_completo); ?>" >
                </div>
                  <div class="form-group">
                  <label for="cantidad_capsulas">cantidad de CAPSULAS/SEMISOLIDOS</label>
                  <input type="text" class="form-control" id="cantidad_capsulas" name="cantidad_capsulas" placeholder="Ingresa cantidad de capsulas">
                  </div>
                  <div class="form-group">
                  <label for="tipo_cotizacion">tipo de cotizacion</label>
                  <input type="number" class="form-control" id="tipo_cotizacion" name="tipo_cotizacion" placeholder="ingresa 1=capsula, 2=semisolido">
                  </div>
                  
                  <div class="form-group">
                  <label for="base_crema">base crema</label>
                  <select class="form-control" name="base_crema">
                  <option selected disabled>Seleccionar</option>
                  <?php $__currentLoopData = $base_cremas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $base_crema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($base_crema->id); ?>"><?php echo e($base_crema->nombre_base_crema); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select></div>
                <div class="form-group">
                  <label for="fecha_cotizacion">fecha cotizacion</label>
                  <input type="date" class="form-control" id="fecha_cotizacion"  name="fecha_cotizacion" placeholder="Ingresa fecha cotizacion">
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/cotizacioncapsula/crear.blade.php ENDPATH**/ ?>