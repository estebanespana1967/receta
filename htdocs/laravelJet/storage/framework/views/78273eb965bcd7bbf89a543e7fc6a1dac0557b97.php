

<?php $__env->startSection('title', 'HISTORIAL DE COTIZACIONES'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>HISTORIAL DE COTIZACIONES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('cotizacioncapsula.create',$persona->id)); ?>"> Crear cotizacion</a>
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
<td><?php echo e($persona->id); ?></td>
<td><?php echo e($persona->rut); ?></td>
<td><?php echo e($persona->dv); ?></td>
<td><?php echo e($persona->nombre_completo); ?></td>
<td><?php echo e($persona->telefono); ?></td>
<td><?php echo e($persona->direccion); ?></td>
<td><?php echo e($persona->email); ?></td>

</tr>
</table>

<table class="table table-bordered">
    <tr>
    <th>Id</th>
    <th>cantidad CAPSULAS/SEMISOLIDO</th>
    <th>Tipo de cotizacion</th>
    <th>Fecha de cotizacion</th>
    <th width="280px">Accion</th>
    </tr>
    
    <?php $__currentLoopData = $cotizaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cotizacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($cotizacion->id); ?></td>
    <td><?php echo e($cotizacion->cantidad_capsulas); ?></td>
    <td><?php if( $cotizacion->tipo_cotizacion ==1): ?>CAPSULA <?php else: ?> SEMISOLIDO <?php endif; ?></td>

    <td><?php echo e($cotizacion->fecha_cotizacion); ?></td>
    <td>
    
    <form action="<?php echo e(route('cotizacioncapsula.destroy',$cotizacion->id)); ?>" method="Post">
    
    <a class="btn btn-warning" href="<?php echo e(route('elegircotizacion',$cotizacion->id)); ?>">Cotizacion</a>
    <a class="btn btn-primary" href="<?php echo e(route('cotizacioncapsula.edit',$cotizacion->id)); ?>">Edit</a>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/cotizacioncapsula/index.blade.php ENDPATH**/ ?>