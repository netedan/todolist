

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
            <th>Tag ID</th>
            <th>Tag name</th>
        </tr>
        <tr>
            <td><?php echo e($tag['id']); ?></td>
            <td><?php echo e($tag['name']); ?></td>
        </tr>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/tag.blade.php ENDPATH**/ ?>