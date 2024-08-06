<head>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        User ID: <a href="/users/<?php echo e($user->id); ?>"><?php echo e($user->id); ?></a>
        <p>User name: <?php echo e($user->name); ?></p>
        <p>User Surname: <?php echo e($user->surname); ?></p>
        <p>User patronymic: <?php echo e($user->patronymic); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>
    <body>
    <div class="base" id="buttons">
        <div>
            <label>Delete all users?</label>
            <input type="checkbox" name="agree?">
        </div>
        <div>
            <form class="btn" id="agree">
                <input type="submit" value="Delete"
                       style="height: 35px; width: 150px">

        </div>
    </body><?php /**PATH /src/views/users.blade.php ENDPATH**/ ?>