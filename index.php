<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fontawesome/css/all.css">

    <title>Empregô</title>
</head>
<body>

<?php
include 'conn.php';
include 'navbar.php';
include 'select.php';
include 'footer.php';
?>

</body>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/jquery.mask.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
            $(document).ready(function(){
              $('.data').mask('11/11/1111');
              $('.hora').mask('00:00');
              $('.cep').mask('00000-000');
              $('.fone').mask('0000-0000');
              $('.tell').mask('(00) 0 0000-0000');
              $('.cpf').mask('000.000.000-00', {reverse: true});
              $('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});
            });
            setTimeout(function(){
            $('.email').val('');
            },420);
    </script>
</html>