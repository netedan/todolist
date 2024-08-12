<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <style>
        .navigation {
            padding: 20px;
            margin: 20px;
            font-size: 20px;
            display: flex;
            justify-content: center;
            justify-items: center;
        }

        .transfer {
            width: 140px;
            font-size: 20px;
            margin: 10px;
        }

        body {
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Todolist</h1>
<div class="navigation">
    <a href="<?php echo e(('projects')); ?>">
        <input class="transfer" type="submit" value="Projects">
    </a>
    <a href="<?php echo e(('users')); ?>">
        <input class="transfer" type="submit" value="Users">
    </a>
    <a href="<?php echo e(('tasks')); ?>">
        <input class="transfer" type="submit" value="Tasks">
    </a>
    <a href="<?php echo e(('tags')); ?>">
        <input class="transfer" type="submit" value="Tags">
    </a>
    <a href="<?php echo e('menu'); ?>">
        <input class="transfer" type="submit" value="Main menu">
    </a>
</div>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH /src/views/layout.blade.php ENDPATH**/ ?>