<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/sweetalert2.min.css">

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/jquery.mask.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/popup.js"></script>
    <!-- <script src="../js/sweetalert2.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    <title>Empregô</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg p-0 m-0">
        <a class="col-sm-2 d-none d-sm-block text-center" href="../">
            <img src="../img/logo.png" alt="Logo da empresa Empregô" class="w-75">
        </a>
        <a class="col-10 d-sm-none" href="../">
            <img src="../img/logo.png" alt="Logo da empresa Empregô" class="w-50">
        </a>

        <h3 class="col-2 d-inline d-sm-none h-100 text-center mb-4 mt-4">
            <span class="fas fa-bars azulClaro" class="navbar-toggler" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"></span>
        </h3>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <input type="text" name="pesquisa" class="w-100 b-roxo f-title-150 text-center rounded-pill d-block d-sm-none" id="pesquisa" placeholder="Que tipo de emprego você procura?">
            <input type="button" value="Entrar" class="btn bg-roxo w-100 branco text-center d-block d-sm-none border-0 f-title-150 mt-2" data-toggle="modal" data-target="#login">
        </div>


        <div class="col-sm-8 text-center d-sm-block d-none h-50">
            <form class="form-group" id="form-pesquisa" method="get" action="./pesquisa.php">
                <input type="text" name="pesquisa" class="w-50 bg-transparent align-middle h-100 rounded-pill text-center b-roxo f-title-150" placeholder="Que tipo de emprego você procura?" required>
                <span class="fa fa-search roxo f-title-150 p-0 m-0" onclick="$('#form-pesquisa').submit()"></span>
            </form>
        </div>
        <div class="col-sm-1 d-sm-block d-none "></div>
        <div class="bg-roxo col-sm-1 d-sm-block d-none">
            <?php
            if (!isset($_COOKIE['email'])) {
                ?>
                <input type="button" value="Entrar" class="bg-roxo border-0 w-100 h-100 branco text-center align-middle b-azulClaro f-title-150" data-toggle="modal" data-target="#login">
            <?php
            } else {
                if ($_COOKIE['tipo'] == "curriculo") {
                    $row = $conn->query("SELECT * FROM curriculo WHERE email = '" . $_COOKIE['email'] . "'");
                    while ($result = $row->fetch_assoc()) {
                        echo '<div class="btn-group dropleft bg-roxo border-0 w-100 h-100 branco text-center align-middle b-azulClaro">
                        <button type="button" class="bg-roxo border-0 w-100 h-100 branco text-center f-title-150" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ' . strtok($result['nome'], ' ') . '
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="./perfil.php">Editar perfil</a>
                        <a class="dropdown-item" href="./verVagasC.php">Ver vagas</a>
                        <a class="dropdown-item" href="./sair.php">Sair</a>
                        </div>
                        </div>';
                    }
                } else {
                    $row = $conn->query("SELECT * FROM empresa WHERE email = '" . $_COOKIE['email'] . "'");
                    while ($result = $row->fetch_assoc()) {
                        echo '<div class="btn-group dropleft bg-roxo border-0 w-100 h-100 branco text-center align-middle b-azulClaro">
                        <button type="button" class="bg-roxo border-0 w-100 h-100 branco text-center f-title-150" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ' . strtok($result['nome'], ' ') . '
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="./perfil.php">Editar perfil</a>
                        <a class="dropdown-item" href="./verVagas.php">Ver vagas</a>
                        <a class="dropdown-item" href="./sair.php">Sair</a>
                        </div>
                        </div>';
                    }
                }
            }
            ?>
        </div>
    </nav>