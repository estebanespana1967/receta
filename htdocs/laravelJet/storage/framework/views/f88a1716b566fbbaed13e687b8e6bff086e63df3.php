

<?php $__env->startSection('title', 'PREPARADO CAPSULAS'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>PREPARADO CAPSULAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('receta.createMateriaPrima',$receta->id)); ?>">Agregar Materia prima</a>
</div>
</div>
</div>
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
<table class="table table-bordered">
<tr>
<th>nro_receta</th>
<th>id</th>
<th>nombre_paciente</th>
<th>nombre_doctor</th>
<th>fecha_receta</th>
</tr>
<tr>
<td><?php echo e($receta->numero_interno); ?></td>
<td><?php echo e($receta->id); ?></td>
<td><?php echo e($paciente->nombre_completo); ?></td>
<td><?php echo e($medico->nombre_medico); ?></td>
<td><?php echo e($receta->fecha_receta); ?></td>
</tr>
</table>

<table class="table table-bordered">
    <tr>
    <th>Id</th>
    <th>Materia_id</th>
    <th>cantidad</th>
    <th>Costo</th>
    <th>subtotal</th>
    
    <th width="280px">Accion</th>
    </tr>
    <?php
    $resultado=0;
$cantidad_capsulas=($receta->cantidad_dias*$receta->posologia_diaria);
?>
    <?php $__currentLoopData = $receta->materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $preparado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
    <td><?php echo e($preparado->pivot->id); ?></td>
    <td><?php echo e($preparado->nombre_mp); ?></td>
    <td><?php echo e($preparado->pivot->cantidad_materia_prima); ?></td>
    <td><?php echo e($preparado->pivot->costo_materia_prima); ?></td>
    <td><?php echo e($preparado->pivot->cantidad_materia_prima*$preparado->pivot->costo_materia_prima); ?></td>
    <?php
    $resultado= ($resultado+($preparado->pivot->cantidad_materia_prima*$preparado->pivot->costo_materia_prima));
    $resultado=(int)($resultado);
    ?>
    <td>
<form action="<?php echo e(route('receta.preparadocapsula.destroyMateriaPrima',['preparado_id' => $preparado,'receta_id' => $receta])); ?>" method="Post">
    <!-- <form action='<?php echo e(url("/receta/indexpreparadocapsula/{$preparado->id}/{$receta->id}")); ?>' method="Post">
 -->
 
 <a class="btn btn-primary" href="<?php echo e(route('receta.editMateriaPrima',['preparado_id' => $preparado,'receta_id' => $receta])); ?>">Edit</a>

 <?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>cantidad de capsulas</td>
    <td><?php echo e($cantidad_capsulas); ?></td>
    <td>
    </td>
    </tr><tr>
    <td></td>
    <td></td>
    <td></td>
    <td>valor capsula</td>
    <td>50</td>
    <td>
    </td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>subtotal por capsula</td>
    <td><?php echo e($resultado+50); ?></td>
    <td>
    </td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>total</td>
    <?php
    $parcial= ($resultado+50)*($receta->cantidad_dias*$receta->posologia_diaria);
    ?>
    <td><?php echo e(number_format($parcial, 2)); ?></td>
    <td>
    </td>
    </tr>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/receta/preparadocapsula/index.blade.php ENDPATH**/ ?>