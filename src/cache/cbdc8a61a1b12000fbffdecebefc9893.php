

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
    <table>
        <tr>
            <th>Tag ID</th>
            <th>Tag name</th>
            <th>Manage</th>
        </tr>
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/tags/<?php echo e($tag['id']); ?>"><?php echo e($tag['id']); ?></a></td>
                <td><?php echo e($tag['name']); ?></td>
                <td>
                    <form method="post" action="/tags/<?php echo e($tag['id']); ?>">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/tags.blade.php ENDPATH**/ ?>