<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">DESCRIPCION</th>
                <th class="px-4 py-2">CANTIDAD</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
             <td class="border px-4 py-2"><?php echo e($producto->id); ?></td>
             <td class="border px-4 py-2"><?php echo e($producto->descripcion); ?></td>
             <td class="border px-4 py-2"><?php echo e($producto->cantidad); ?></td>
             <td class="border px-4 py-2 text-center">
                 Editar / Borrar
             </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravelJet\resources\views/livewire/productos.blade.php ENDPATH**/ ?>