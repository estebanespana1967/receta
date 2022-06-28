

<?php $__env->startSection('title', 'HISTORIAL DE RECETAS'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>HISTORIAL DE RECETAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('receta.create',$paciente->id)); ?>"> Crear receta</a>
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
<th>S.No pagina</th>
<th>rut</th>
<th>dv</th>
<th>nombre_completo</th>
<th>telefono</th>
<th>direccion</th>
<th>email</th>
</tr>
<tr>
<td><?php echo e($paciente->id); ?></td>
<td><?php echo e($paciente->rut); ?></td>
<td><?php echo e($paciente->dv); ?></td>
<td><?php echo e($paciente->nombre_completo); ?></td>
<td><?php echo e($paciente->telefono); ?></td>
<td><?php echo e($paciente->direccion); ?></td>
<td><?php echo e($paciente->email); ?></td>
</tr>
</table>

<table class="table table-bordered">
    <tr>
    <th>Id</th>
    <th>Número interno</th>
    <th>Tipo de preparado</th>
    <th>Médico</th>
    <th width="280px">Accion</th>
    </tr>
    
    <?php $__currentLoopData = $recetas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($receta->id); ?></td>
    <td><?php echo e($receta->numero_interno); ?></td>
    <td><?php echo e($receta->tipo_preparado); ?></td>
    <td><?php echo e($receta->medico->nombre_medico); ?></td>
    <td>
    <a class="btn btn-warning" href="<?php echo e(route('receta.preparadocapsula.index',$receta->id)); ?>">Preparado</a>
    <form action="<?php echo e(route('receta.destroy',$receta->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('receta.edit',$receta->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>    
       
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/receta/showHistorial.blade.php ENDPATH**/ ?>