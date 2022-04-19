<table>
    <thead>
    <tr>
        <th>tovar_id</th>
        <th>product</th>
        <th>mark</th>
        <th>size</th>
        <th>gost</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($table->tovar_id); ?></td>
            <td><?php echo e($table->product); ?></td>
            <td><?php echo e($table->mark); ?></td>
            <td><?php echo e($table->size); ?></td>
            <td><?php echo e($table->gost); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /home/users/0/004/domains/proffmetall.testkz.ru/resources/views/exports/table.blade.php ENDPATH**/ ?>