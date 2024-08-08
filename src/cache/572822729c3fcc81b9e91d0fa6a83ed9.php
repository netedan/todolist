
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
    <p>Project ID: <?php echo e($project['id']); ?></p>
    <p>Author ID: <?php echo e($project['author_id']); ?></p>
    
    <p>Project name: <?php echo e($project['project_name']); ?></p>
</body>
<?php /**PATH /src/views/project.blade.php ENDPATH**/ ?>