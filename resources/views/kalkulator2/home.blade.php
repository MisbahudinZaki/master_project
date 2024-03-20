<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    body{
        background: linear-gradient(to right, rgba(202, 199, 1, 0.9), rgba(0, 134, 7, 0.9), rgba(10, 0, 151, 0.9));
    }
    table{
        border: 1px solid black;
        margin-left: auto;
        margin-right: auto;
    }
    input[type="number"]{
        padding: 20px 30px;
        font-weight: bold;
        font-size: 24px;
        border: none;
        border-radius: 5px;
        border:1px solid black;
    }

    input[type="submit"]{
        width: 100%;
        padding: 20px 40px;
        background-color: rgba(0, 134, 7, 0.9);
        color: white;
        border: none;
        border-radius: 5px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.8);
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <form action="{{route('count')}}" method="post">
               @csrf
               <table>
                <tr>
                    <td colspan="4"><input type="number" name="hasil" id=""></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="number" name="angka1" id=""></td>
                    <td colspan="2"><input type="number" name="angka2" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" value="x" name="operator"></td>
                <td><input type="submit" value=":" name="operator"></td>
                <td><input type="submit" value="+" name="operator"></td>
                <td><input type="submit" value="-" name="operator"></td>
                </tr>
                <tr>
                    <td colspan="4"><input type="submit" value="reset" name="operator"></td>
                </tr>
               </table>
            </form>
        </div>
    </div>
</body>
</html>
