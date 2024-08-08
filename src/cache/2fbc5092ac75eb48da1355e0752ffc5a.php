

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
            <th>Project ID</th>
            <th>Project name</th>
            <th>Author ID</th>
            <th>Manage</th>
        </tr>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><a href="/projects/<?php echo e($project['id']); ?>"><?php echo e($project['id']); ?></a></td>
                <td><?php echo e($project['author_id']); ?></td>
                <td><?php echo e($project['project_name']); ?></td>
                
                <td>
                    <form method="post" action="/projects/<?php echo e($project['id']); ?>">
                        <input class="button_delete" type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /src/views/projects.blade.php ENDPATH**/ ?>