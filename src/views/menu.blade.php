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
<h1>Main menu</h1>
<p><a href="{{ ('projects') }}">
        <input class="transfer" type="submit" value="Projects">
    </a></p>
<p><a href="{{ ('users') }}">
        <input class="transfer" type="submit" value="Users">
    </a></p>
<p><a href="{{ ('tasks') }}">
        <input class="transfer" type="submit" value="Tasks">
    </a></p>
<p><a href="{{ ('tags') }}">
        <input class="transfer" type="submit" value="Tags">
    </a></p>
</body>
