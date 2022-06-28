

<?php $__env->startSection('title', 'MEDICO'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>EDITAR MEDICO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>medico Editar</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('medico.update', $medico->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                 <div class="form-group">
                  <label for="nombre">id</label>
                  <input type="text" class="form-control" id="id" name="id" placeholder="Ingresa el id" value="<?php echo e($medico->id); ?>" disabled >
                </div>
                <div class="form-group">
                  <label for="nombre">rut</label>
                  <input type="text" class="form-control" id="rut_medico" name="rut_medico" placeholder="Ingresa el rut del medico" value="<?php echo e($medico->rut_medico); ?>"  >
                </div>
                <div class="form-group">
                  <label for="nombre">dv</label>
                  <input type="text" class="form-control" id="dv_medico" name="dv_medico" placeholder="Ingresa el dv del medico" value="<?php echo e($medico->dv_medico); ?>" >
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre Medico</label>
                  <input type="text" class="form-control" id="nombre_medico" name="nombre_medico" placeholder="Ingresa el nombre del medico" value="<?php echo e($medico->nombre_medico); ?>">
                </div>
                <div class="form-group">
                  <label for="descripcion">telefono medico</label>
                  <input type="text" class="form-control" id="telefono_medico"  name="telefono_medico" placeholder="Ingresa el telefono" value="<?php echo e($medico->telefono_medico); ?>">
                </div>
                <div class="form-group">
                  <label for="serial">direccion medico</label>
                  <input type="text" class="form-control" id="direccion_medico" name="direccion_medico" placeholder="Ingresa la direccion medico" value="<?php echo e($medico->direccion_medico); ?>">
                </div>
                <div class="form-group">
                  <label for="serial">email</label>
                  <input type="text" class="form-control" id="email_medico" name="email_medico" placeholder="Ingresa su email" value="<?php echo e($medico->email_medico); ?>">
                </div>
		<div class="form-group">
                  <label for="serial">especialidad</label>
                  <input type="text" class="form-control" id="especialidad" name="especialiad" placeholder="Ingresa su especialiad" value="<?php echo e($medico->especialidad); ?>">
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/medico/editar.blade.php ENDPATH**/ ?>