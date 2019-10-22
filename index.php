<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/main.js"></script>

    <title>Empregô</title>
</head>
<body>

<nav class="navbar p-0 m-0">
        <a class="col-sm-2 text-center" href="#">
            <img src="./img/logo.png" alt="Logo da empresa Empregô" class="w-75">
        </a>
        <div class="col-sm-8 text-center h-50">
            <input type="text" name="" class="w-50 bg-transparent align-middle h-100 rounded-pill text-center b-roxo f-title-150" placeholder="Que tipo de emprego você procura?">
        </div>
        <div class="col-sm-1"></div>
        <div class="bg-roxo col-sm-1">
            <input type="submit" value="Entrar" class="bg-roxo border-0 w-100 h-100 branco text-center align-middle b-azulClaro f-title-150">
        </div>
</nav>

<?php
include 'select.php';
?>

</body>
</html>