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
<p><a href="{{ ('projects') }}"</a></p>
<input class="transfer" type="submit" value="Projects">
<p><a href="{{ ('users') }}"</a></p>
<input class="transfer" type="submit" value="Users">
<p><a href="{{ ('tasks') }}"</a></p>
<input class="transfer" type="submit" value="Tasks">
<p><a href="{{ ('tags') }}"</a></p>
<input class="transfer" type="submit" value="Tasks">
</body>
