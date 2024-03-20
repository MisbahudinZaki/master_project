<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/">
    <style type="text/css">
        .body{
            background: linear-gradient(to right, rgba(8,0,119, 0.90), rgba(116,0,116, 0.90), rgba(119,0,8, 0.90));
        }
        table{
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        }

        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: rgb(200, 4, 4);
            color: white;
            font-size: 24px;
            border:none;
            border-radius: 10px;
            box-shadow: 6px 6px 6px rgba(0,0,0, 0.8);
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: rgb(21, 112, 3);
            color: white;
            font-size: 24px;
            border:none;
            border-radius: 10px;
            box-shadow: 6px 6px 6px rgba(0,0,0, 0.8);
        }

        input[type="number"]
        {

            padding: 20px 30px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            border: none;
            border-radius: 5px;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1 align="center" style="color: white;">Kalkulator</h1>
    <center>
    <form action="{{route('hitung')}}" method="post">
        @csrf
        <table>
            <tr>
                <td colspan=2><input type="number" name="angka1" id=""></td>
                <td colspan=2><input type="number" name="angka2" id=""></td>
            </tr>

            <tr align="center">
                <td colspan=4><input type="number" name="hasil" id=""></td>
            </tr>

            <tr>
                <td><input type="submit" value="kali" name="operator"></td>
                <td><input type="submit" value="bagi" name="operator"></td>
                <td><input type="submit" value="tambah" name="operator"></td>
                <td><input type="submit" value="kurang" name="operator"></td>
            </tr>
            <tr>
                <td colspan=4><input type="submit" value="reset"></td>
            </tr>
        </table>
    </form>
    <center>
</body>
</html>

