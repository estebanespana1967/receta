

<?php $__env->startSection('title', 'PACIENTE'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>LISTADO DE PACIENTES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('paciente.create')); ?>"> Crear paciente</a>
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
<th>rut</th>
<th>dv</th>
<th>nombre_completo</th>
<th>telefono</th>
<th>direccion</th>
<th>email</th>
<th width="280px">Accion</th>
</tr>
<?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($paciente->id); ?></td>
<td><?php echo e($paciente->rut); ?></td>
<td><?php echo e($paciente->dv); ?></td>
<td><?php echo e($paciente->nombre_completo); ?></td>
<td><?php echo e($paciente->telefono); ?></td>
<td><?php echo e($paciente->direccion); ?></td>
<td><?php echo e($paciente->email); ?></td>
<td>

<a class="btn btn-success" href="<?php echo e(route('receta.historial',$paciente->id)); ?>">Ver Historial</a>

</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($pacientes->links()); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/receta/index.blade.php ENDPATH**/ ?>