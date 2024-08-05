<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        User ID: <a href="/users/<?php echo e($user->id); ?>"><?php echo e($user->id); ?></a>
        <p>User name: <?php echo e($user->name); ?></p>
        <p>User Surname: <?php echo e($user->surname); ?></p>
        <p>User patronymic: <?php echo e($user->patronymic); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /src/views/users.blade.php ENDPATH**/ ?>