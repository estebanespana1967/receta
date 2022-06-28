

<?php $__env->startSection('title', 'MEDICO'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>MEDICOS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('medico.create')); ?>"> Crear medico</a>
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
<th>S.No</th>
<th>rut_medico</th>
<th>dv_medico</th>
<th>nombre_medico</th>
<th>telefono_medico</th>
<th>direccion_medico</th>
<th>email_medico</th>
<th>especialidad</th>

<th width="280px">Accion</th>hOLA !!!!!!!!!!!!!!
</tr>
<?php $__currentLoopData = $medicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($medico->id); ?></td>
<td><?php echo e($medico->rut_medico); ?></td>
<td><?php echo e($medico->dv_medico); ?></td>
<td><?php echo e($medico->nombre_medico); ?></td>
<td><?php echo e($medico->telefono_medico); ?></td>
<td><?php echo e($medico->direccion_medico); ?></td>
<td><?php echo e($medico->email_medico); ?></td>
<td><?php echo e($medico->especialidad); ?></td>

<td>
<form action="<?php echo e(route('medico.destroy',$medico->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('medico.edit',$medico->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($medicos->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/medico/index.blade.php ENDPATH**/ ?>