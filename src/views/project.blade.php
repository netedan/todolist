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
    <p>Project ID: {{ $project['id'] }}</p>
    <p>Author ID: {{ $project['author_id'] }}</p>
    {{--        <p>{{ $project->tasks }}</p>--}}
    <p>Project name: {{ $project['project_name'] }}</p>
</body>