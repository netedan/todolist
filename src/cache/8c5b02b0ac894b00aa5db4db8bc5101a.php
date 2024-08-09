

<?php $__env->startSection('content'); ?>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            tr {
                border: 1px solid gray;
            }
            tr {
                font-size: 20px;
                text-align: center;
            }
            body {
                background-color: beige;
            }
        </style>
    </head>
    <table>
        <tr>
            <th>Task ID</th>
            <th>Task name</th>
            <th>Task status</th>
            <th>Task author ID</th>
            <th>Task executor ID</th>
        </tr>
        <tr>
            <td><?php echo e($task['id']); ?></td>
            <td><?php echo e($task['name']); ?></td>
            <td><?php echo e($task['status']); ?></td>
            <td><?php echo e($task['author_id']); ?></td>
            <td><?php echo e($task['executor_id']); ?></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/task.blade.php ENDPATH**/ ?>