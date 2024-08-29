<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mobil</title>
    <style>
        .card{
            background-color: khaki;
            text-align: center;
            width: 150px;
            height: 200px;
            border-radius: 10px;
            margin: 10px;
            padding: 5px;
            float: left;
        }

        .card:hover{
            background-color: white;
            border: 1px solid skyblue;
            color: skyblue;
            box-shadow: 0 0 10px skyblue;
        }

        .gambar{
            width: 90px;
            height: 80px;
        }

        .card a{
            background-color: white;
            border: 1px solid red;
            text-decoration: none;
            color: green;
            padding: 10px;
            border-radius: 15px;
        }

        .card a:hover{
            background-color: green;
            border: 1px solid red;
            color: black;
            box-shadow: 0 0 10px skyblue;
        }
    </style>
</head>
<body>
    <div class="konten">
        <div class="card">
            <img src="fortuner.jpg" alt="" class="gambar">
            <h3>Fortuner</h3>
            <p>Rp.100.000.000</p>
            <a class="tombol" href="">Detail</a>
        </div>
    </div>
</body>
</html>