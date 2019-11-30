<?php
require './conn.php';
include './modais.php';
include './navbar.php';

$pesquisa = ($_POST['pesquisa']);

$row = $conn->query("SELECT * FROM vagas WHERE categoria = '$pesquisa'");


?>

<div class="row mb-5 mt-5 p-0 w-100">
    <h1 class="col-sm-1" aria-hidden=""></h1>
    <h1 class="f-title roxo pb-4 w-100 text-center col-sm-10">Tá aí o que você procura!</h1>
    <a href="../">
        <h1 class="fa fa-times-circle col-sm-1 roxo" aria-hidden="true"></h1>
    </a>
    <?php
    while ($result = $row->fetch_assoc()) {
        echo '<div class="col-4 p-5">
        <a href="./mostrarVaga.php?pesquisa='.$result['id'].'">
        <div class="card text-left">
            <img src="'.$result['foto'].'" class="card-img-top" alt="...">
            <div class="card-body p-0">
                <h5 class="card-title bg-roxo branco w-100 text-center f-text pt-1 m-0">
                    ' . $result['categoria'] . '
                </h5>
                <ul class="card-text list-group text-center azulEscuro f-text-bold mt-2">
                    <li>
                        <span class="fas fa-map-marker-alt"></span> ' . $result['local'] . '
                    </li>
                    <li>
                        <span class="fas fa-clock"></span> ' . $result['horas'] . ' semanais
                    </li>
                </ul>
            </div>
        </div>
        </a>
    </div>';
    };
    ?>
</div>
</div>
<?php
include './footer.php';
?>