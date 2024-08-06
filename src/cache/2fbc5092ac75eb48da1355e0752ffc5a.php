<head>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <a href="/projects/<?php echo e($project->id); ?>"><?php echo e($project->id); ?></a>
            <p><?php echo e($project->authorId); ?></p>
            
            <p><?php echo e($project->name); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</head>
<body>
<div class="base" id="buttons">
    <div>
        <label>Delete all projects?</label>
        <input type="checkbox" name="agree?">
    </div>
    <div>
        <form class="btn" id="agree">
            <input type="submit" value="Delete"
            style="height: 35px; width: 150px">

    </div>

</body><?php /**PATH /src/views/projects.blade.php ENDPATH**/ ?>