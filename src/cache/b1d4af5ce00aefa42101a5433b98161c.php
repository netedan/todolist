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
<p><a href="<?php echo e(('projects')); ?>"</a></p>
<input class="transfer" type="submit" value="Projects">
<p><a href="<?php echo e(('users')); ?>"</a></p>
<input class="transfer" type="submit" value="Users">
<p><a href="<?php echo e(('tasks')); ?>"</a></p>
<input class="transfer" type="submit" value="Tasks">
<p><a href="<?php echo e(('tags')); ?>"</a></p>
<input class="transfer" type="submit" value="Tasks">
</body>
<?php /**PATH /src/views/menu.blade.php ENDPATH**/ ?>