<?php $__env->startSection('content'); ?>
    <table>
        <tr>
            <th>User ID</th>
            <th>User name</th>
            <th>User surname</th>
            <th>User patronymic</th>
            <th>Manage</th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/users/<?php echo e($user['id']); ?>"><?php echo e($user['id']); ?></a></td>
                <td><?php echo e($user['name']); ?></td>
                <td><?php echo e($user['surname']); ?></td>
                <td><?php echo e($user['patronymic']); ?></td>
                <td>
                    <form method="post" action="/users/<?php echo e($user['id']); ?>">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/users.blade.php ENDPATH**/ ?>