

<?php $__env->startSection('content'); ?>
    <head>
        <style>
            tr {
                font-size: 20px;
                text-align: center;
            }
            body {
                background-color: beige;
            }
        </style>
    </head>
    <body>
    <table>
        <tr>
            <th>Task ID</th>
            <th>Task name</th>
            <th>Task status</th>
            <th>Task executor ID</th>
            <th>Task author ID</th>
            <th>Manage</th>
        </tr>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/tasks/<?php echo e($task['id']); ?>"><?php echo e($task['id']); ?></a></td>
                <td><?php echo e($task['name']); ?></td>
                <td><?php echo e($task['status']); ?></td>
                <td><?php echo e($task['author_id']); ?></td>
                <td><?php echo e($task['executor_id']); ?></td>
                <td>
                    <form method="post" action="/tasks/<?php echo e($task['id']); ?>">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/tasks.blade.php ENDPATH**/ ?>