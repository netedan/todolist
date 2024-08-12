<head>
    <style>
        body {
            background-color: beige;
            text-align: center;
            font-family: Arial;
        }

        .transfer {
            width: 250px;
            border-radius: 1em;
            font-size: 25px;
            margin: 20px;
        }
    </style>
</head>


<body>
<h1>Menu</h1>
<p><a href="<?php echo e(('projects')); ?>">
        <input class="transfer" type="submit" value="Projects">
    </a></p>
<p><a href="<?php echo e(('users')); ?>">
        <input class="transfer" type="submit" value="Users">
    </a></p>
<p><a href="<?php echo e(('tasks')); ?>">
        <input class="transfer" type="submit" value="Tasks">
    </a></p>
<p><a href="<?php echo e(('tags')); ?>">
        <input class="transfer" type="submit" value="Tags">
    </a></p>
</body>
<?php /**PATH /src/views/menu.blade.php ENDPATH**/ ?>