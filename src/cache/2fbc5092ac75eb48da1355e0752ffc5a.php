<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <a href="/projects/<?php echo e($project->id); ?>"><?php echo e($project->id); ?></a>
        <p><?php echo e($project->authorId); ?></p>

        <p><?php echo e($project->name); ?></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /src/views/projects.blade.php ENDPATH**/ ?>