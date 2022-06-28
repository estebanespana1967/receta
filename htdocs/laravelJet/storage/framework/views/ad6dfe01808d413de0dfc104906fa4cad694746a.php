

<?php $__env->startSection('title', 'COTIZACION'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>PREPARADO COTIZACION SEMISOLIDO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right mb-2">
<a class="btn btn-success" href="<?php echo e(route('cotizacioncapsula.crearMateriaPrima',$cotizacion_detalle->id)); ?>">Agregar Materia prima</a>
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
<th>id_persona</th>
<th>nombre apellido</th>
<th>cantidad SEMISOLIDOS</th>
<th>fecha_cotizacion</th>
</tr>
<tr>
<td><?php echo e($persona->id); ?></td>
<td><?php echo e($persona->nombre_completo); ?></td>
<td><?php echo e($cotizacion_detalle->cantidad_capsulas); ?></td>
<td><?php echo e($cotizacion_detalle->fecha_cotizacion); ?></td>
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
?>
    <?php $__currentLoopData = $cotizacion_detalle->materia_primas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cotizacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    <tr>
    <td><?php echo e($cotizacion->pivot->id); ?></td>
    <td><?php echo e($cotizacion->nombre_mp); ?></td>
    <td><?php echo e($cotizacion->pivot->cantidad_materia_prima); ?></td>
    <td><?php echo e($cotizacion->pivot->costo_materia_prima); ?></td>
    <td><?php echo e($cotizacion->pivot->cantidad_materia_prima*$cotizacion->pivot->costo_materia_prima); ?></td>
    <?php
    $resultado= ($resultado+($cotizacion->pivot->cantidad_materia_prima*$cotizacion->pivot->costo_materia_prima));
    $resultado=(int)($resultado);
    ?>
    <td>
    <form action="<?php echo e(route('cotizacioncapsula.detalle_capsula.eliminarMateriaPrima',$cotizacion->id)); ?>" method="Post">
    
 <a class="btn btn-primary" href="<?php echo e(route('cotizacioncapsula.editarMateriaPrima', $cotizacion->id)); ?>">Edit</a>

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
    <td>CANTIDAD TOTAL SEMISOLIDO</td>
    <td><?php echo e($cotizacion_detalle->cantidad_capsulas); ?></td>
    <td>
    </td>
    </tr><tr>
    <td></td>
    <td></td>
    <td></td>
    <td>VALOR BASE CREMA</td>
    <td>50</td>
    <td>
    </td>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>SUBTOTOTAL POR GRAMO</td>
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
    $parcial= ($resultado+50)*($cotizacion_detalle->cantidad_capsulas);
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/cotizacioncapsula/detalle_semisolido/index.blade.php ENDPATH**/ ?>