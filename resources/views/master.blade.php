<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan UKK</title>
    <style type="text/css">
        table{
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="number"]{
            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            border: 1px solid black;
        }
        input[type="submit"]
        {
            width: 100%;
            padding: 20px 40px;
            background-color: rgb(200, 4, 4,);
            color: white;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            box-shadow: 6px 6px 6px rgba(0,0,0,0.8);
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
