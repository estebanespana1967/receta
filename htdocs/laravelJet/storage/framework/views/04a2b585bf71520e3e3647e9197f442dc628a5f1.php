

<?php $__env->startSection('title', 'PERSONA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>LISTADO DE PERSONAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('persona.create')); ?>"> Crear persona</a>
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
<!-- <th>direccion</th>
<th>email</th>
 -->
</tr>
<?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($persona->id); ?></td>
<td><?php echo e($persona->rut); ?></td>
<td><?php echo e($persona->dv); ?></td>
<td><?php echo e($persona->nombre_completo); ?></td>
<td><?php echo e($persona->telefono); ?></td>
<!-- <td><?php echo e($persona->direccion); ?></td>
<td><?php echo e($persona->email); ?></td>
 --><td>
<td>
<a class="btn btn-success" href="<?php echo e(route('cotizacioncapsula.index',$persona->id)); ?>">cotizar</a>
</td>
</td>
<td>    
<form action="<?php echo e(route('persona.destroy',$persona->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('persona.edit',$persona->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($personas->links()); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/persona/index.blade.php ENDPATH**/ ?>