

<?php $__env->startSection('title', 'PACIENTE'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>>EDITAR PACIENTE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>paciente Editar</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('paciente.update', $paciente->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                 <div class="form-group">
                  <label for="nombre">id</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="Ingresa el id" value="<?php echo e($paciente->id); ?>" disabled >
                </div>
                <div class="form-group">
                  <label for="nombre">rut</label>
                  <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingresa el rut del paciente" value="<?php echo e($paciente->rut); ?>"  >
                </div>
                <div class="form-group">
                  <label for="nombre">dv</label>
                  <input type="text" class="form-control" id="dv" name="dv" placeholder="Ingresa el dv del paciente" value="<?php echo e($paciente->dv); ?>" >
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre Completo</label>
                  <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Ingresa el nombre del paciente" value="<?php echo e($paciente->nombre_completo); ?>">
                </div>
                <div class="form-group">
                  <label for="descripcion">telefono</label>
                  <input type="text" class="form-control" id="telefono"  name="telefono" placeholder="Ingresa el telefono" value="<?php echo e($paciente->telefono); ?>">
                </div>
                <div class="form-group">
                  <label for="serial">direccion</label>
                  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la direccion" value="<?php echo e($paciente->direccion); ?>">
                </div>
                <div class="form-group">
                  <label for="serial">email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Ingresa su email" value="<?php echo e($paciente->email); ?>">
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/paciente/editar.blade.php ENDPATH**/ ?>