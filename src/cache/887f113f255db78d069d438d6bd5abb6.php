<?php $__env->startSection('content'); ?>
<div>
    <p>User ID: <?php echo e($user['id']); ?></p>
    <p>User name: <?php echo e($user['name']); ?></p>
    <p>User surname: <?php echo e($user['surname']); ?></p>
    <p>User patronymic: <?php echo e($user['patronymic']); ?></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/user.blade.php ENDPATH**/ ?>