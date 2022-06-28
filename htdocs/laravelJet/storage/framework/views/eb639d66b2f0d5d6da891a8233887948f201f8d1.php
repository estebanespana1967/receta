

<?php $__env->startSection('title', 'RECETA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>EDITAR RECETA</h1>
<?php $__env->stopSection(); ?>
 

<?php $__env->startSection('content'); ?>
    <h1>RECETA Editar</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <form action="<?php echo e(route('receta.update', $receta->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                  <div class="form-group">
                  <label for="numero_interno">Numero interno</label>
                  <input type="text" class="form-control" id="numero_interno" name="numero_interno" placeholder="Ingresa el numero interno"  value="<?php echo e($receta->numero_interno); ?>" disabled >
                </div>
                  <div class="form-group">
                  <label for="tipo_preparado">tipo de preparado</label>
                  <input type="text" class="form-control" id="tipo_preparado" name="tipo_preparado" placeholder="tipo_preparado" value="<?php echo e($receta->tipo_preparado); ?>" >
                </div>
                <div class="form-group"
                <label for="paciente_id">paciente_id</label>
                  <select class="form-control" name="paciente_id">
                                                <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($paciente->id == $receta->paciente_id): ?>
                                            <option value="<?php echo e($paciente->id); ?>"  selected disabled><?php echo e($paciente->nombre_completo); ?></option>
                                            <?php endif; ?>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                </div>
                
                <div class="form-group">
                  <label for="doctor_id">doctor_id</label>
                  <select class="form-control" name="doctor_id">
                                                <option selected disabled>Seleccionar medico</option>
                                                <?php $__currentLoopData = $medicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($medico->id == $receta->doctor_id): ?>
                                            <option value="<?php echo e($medico->id); ?>"  selected><?php echo e($medico->nombre_medico); ?></option>
                                            <?php else: ?>
                                            <option value="<?php echo e($medico->id); ?>"><?php echo e($medico->nombre_medico); ?></option>
                                            <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                </div>
                
                <div class="form-group">
                  <label for="fecha_receta">fecha receta</label>
                  <input type="date" class="form-control" id="fecha_receta"  name="fecha_receta" placeholder="Ingresa fecha receta"   value="<?php echo e($receta->fecha_receta); ?>"  >
                </div>
                <div class="form-group">
                  <label for="fecha_recepcion">fecha_recepcion</label>
                  <input type="date" class="form-control" id="fecha_recepcion"  name="fecha_recepcion" placeholder="Ingresa fecha_recepcion"   value="<?php echo e($receta->fecha_recepcion); ?>" >
                </div>
                <div class="form-group">
                  <label for="cantidad_dias">cantidad dias tratamiento</label>
                  <input type="number" class="form-control" id="cantidad_dias" name="cantidad_dias" placeholder="Ingresa la cantidad de dias tratamiento"  value="<?php echo e($receta->cantidad_dias); ?>" >
                </div>
                <div class="form-group">
                  <label for="posologia_diaria">posologia diaria</label>
                  <input type="number" class="form-control" id="posologia_diaria" name="posologia_diaria" placeholder="Ingresa posologia diaria"   value="<?php echo e($receta->posologia_diaria); ?>" >
                </div>
                <div class="form-group">
                  <label for="serie">serie</label>
                  <input type="text" class="form-control" id="serie" name="serie" placeholder="Ingresa serie"  value="<?php echo e($receta->serie); ?>" >
                </div>
                <div class="form-group">
                  <label for="numero_controlado">numero serie controlado</label>
                  <input type="text" class="form-control" id="numero_controlado" name="numero_controlado" placeholder="Ingresa numero_serie"  value="<?php echo e($receta->numero_controlado); ?>" >
                </div>
                <div class="form-group">
                  <label for="rut_adquirente">rut_adquirente</label>
                  <input type="text" class="form-control" id="rut_adquirente" name="rut_adquirente" placeholder="Ingresa rut_adquirente"  value="<?php echo e($receta->rut_adquirente); ?>" >
                </div>
                <div class="form-group">
                  <label for="dv_adquirente">dv_adquirente</label>
                  <input type="text" class="form-control" id="dv_adquirente" name="dv_adquirente" placeholder="Ingresa dv_adquirente"  value="<?php echo e($receta->dv_adquirente); ?>" >
                </div>
                <div class="form-group">
                  <label for="nombre_completo_adquirente">nombre_completo_adquirente</label>
                  <input type="text" class="form-control" id="nombre_completo_adquirente" name="nombre_completo_adquirente" placeholder="Ingresa nombre_completo_adquirente" value="<?php echo e($receta->nombre_completo_adquirente); ?>">
                </div>
                <div class="form-group">
                  <label for="direccion_adquirente">direccion_adquirente</label>
                  <input type="text" class="form-control" id="direccion_adquirente" name="direccion_adquirente" placeholder="Ingresa direccion_adquirente"  value="<?php echo e($receta->direccion_adquirente); ?>">
                </div>
                <div class="form-group">
                  <label for="establecimiento">establecimiento</label>
                  <input type="text" class="form-control" id="establecimiento" name="establecimiento" placeholder="Ingresa establecimiento"  value="<?php echo e($receta->establecimiento); ?>">
                </div>
                <div class="form-group">
                  <label for="rut_establecimiento">rut_establecimiento</label>
                  <input type="text" class="form-control" id="rut_establecimiento" name="rut_establecimiento" placeholder="Ingresa rut_establecimiento"  value="<?php echo e($receta->rut_establecimiento); ?>">
                </div>
                <div class="form-group">
                  <label for="dv_establecimiento">dv_establecimiento</label>
                  <input type="text" class="form-control" id="dv_establecimiento" name="dv_establecimiento" placeholder="Ingresa dv_establecimiento" value="<?php echo e($receta->dv_establecimiento); ?>">
                </div>
                <div class="form-group">
                  <label for="cantidad_despachada">cantidad_despachada</label>
                  <input type="text" class="form-control" id="cantidad_despachada" name="cantidad_despachada" placeholder="Ingresa cantidad_despachada" value="<?php echo e($receta->cantidad_despachada); ?>">
                </div>
                <div class="form-group">
                  <label for="director_tecnico">director_tecnico</label>
                  <input type="text" class="form-control" id="director_tecnico" name="director_tecnico" placeholder="Ingresa director_tecnico" value="<?php echo e($receta->director_tecnico); ?>">
                </div>
                <div class="form-group">
                  <label for="rut_dt">rut_dt</label>
                  <input type="text" class="form-control" id="rut_dt" name="rut_dt" placeholder="Ingresa rut_dt" value="<?php echo e($receta->rut_dt); ?>">
                </div>
                <div class="form-group">
                  <label for="dv_dt">dv_dt</label>
                  <input type="text" class="form-control" id="dv_dt" name="dv_dt" placeholder="Ingresa dv_dt" value="<?php echo e($receta->dv_dt); ?>">
                </div>
                <div class="form-group">
                  <label for="fecha_entregado">fecha_entrega</label>
                  <input type="date" class="form-control" id="fecha_entregado" name="fecha_entregado" placeholder="Ingresa fecha entrega" value="<?php echo e($receta->fecha_entregado); ?>">
                </div>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
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
 -->
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/receta/editar.blade.php ENDPATH**/ ?>