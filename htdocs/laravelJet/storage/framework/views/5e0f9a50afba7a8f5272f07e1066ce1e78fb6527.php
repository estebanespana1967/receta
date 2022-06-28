


<?php $__env->startSection('title', 'MATERIA_PRIMA'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>MATERIA_PRIMA</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">

</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('materia_prima.create')); ?>"> Crear materia_prima</a>
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
<th>id</th>
<th>nombre_mp</th>
<th>fecha_venc</th>
<th>lote</th>
<th>serie</th>
<th>proveedor</th>
<th>costo</th>
<th>venta</th>
<th>stock(MG/ML)</th>

<th width="280px">Accion</th>
</tr>
<?php $__currentLoopData = $materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $materia_prima): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($materia_prima->id); ?></td>
<td><?php echo e($materia_prima->nombre_mp); ?></td>
<td><?php echo e($materia_prima->fecha_venci); ?></td>
<td><?php echo e($materia_prima->lote); ?></td>
<td><?php echo e($materia_prima->serie); ?></td>
<td><?php echo e($materia_prima->proveedor); ?></td>
<td><?php echo e($materia_prima->costo); ?></td>
<td><?php echo e($materia_prima->venta); ?></td>
<TD>
<?php echo e(number_format($materia_prima->stock, 2)); ?>

</TD>
<td>
<form action="<?php echo e(route('materia_prima.destroy',$materia_prima->id)); ?>" method="Post">
<a class="btn btn-primary" href="<?php echo e(route('materia_prima.edit',$materia_prima->id)); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($materia_primas->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/materia_prima/index.blade.php ENDPATH**/ ?>