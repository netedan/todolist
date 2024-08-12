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
    <a href="{{ ('projects') }}">
        <input class="transfer" type="submit" value="Projects">
    </a>
    <a href="{{ ('users') }}">
        <input class="transfer" type="submit" value="Users">
    </a>
    <a href="{{ ('tasks') }}">
        <input class="transfer" type="submit" value="Tasks">
    </a>
    <a href="{{ ('tags') }}">
        <input class="transfer" type="submit" value="Tags">
    </a>
    <a href="{{'menu'}}">
        <input class="transfer" type="submit" value="Main menu">
    </a>
</div>
@yield('content')
</body>
</html>