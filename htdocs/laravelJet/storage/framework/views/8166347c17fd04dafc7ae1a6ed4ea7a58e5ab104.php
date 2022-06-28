

<?php $__env->startSection('title', 'MEDICO'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>CREAR MEDICO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>medico Nuevo</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('medico.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="form-group">
                  <label for="nombre">rut_medico</label>
                  <input type="text" class="form-control" id="rut_medico" name="rut_medico" placeholder="Ingresa el rut del medico" >
                </div>
                <div class="form-group">
                  <label for="nombre">dv</label>
                  <input type="text" class="form-control" id="dv_medico" name="dv_medico" placeholder="Ingresa el dv del medico" >
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre _medico</label>
                  <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" placeholder="Ingresa el nombre del medico">
                </div>
                <div class="form-group">
                  <label for="descripcion">telefono</label>
                  <input type="text" class="form-control" id="telefono_medico"  name="telefono_medico" placeholder="Ingresa el telefono_medico">
                </div>
                <div class="form-group">
                  <label for="serial">direccion_medico</label>
                  <input type="text" class="form-control" id="direccion_medico" name="direccion_medico" placeholder="Ingresa la direccion_medico">
                </div>
                <div class="form-group">
                  <label for="serial">email_medico</label>
                  <input type="text" class="form-control" id="email_medico" name="email_medico" placeholder="Ingresa su email">
                </div>
 <div class="form-group">
                  <label for="serial">especialidad</label>
                  <input type="text" class="form-control" id="especialidad" name="especialidad" placeholder="Ingresa su email">
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/medico/crear.blade.php ENDPATH**/ ?>