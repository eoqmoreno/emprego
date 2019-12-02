<?php
$email = $_COOKIE['email'];
$tipo = $_COOKIE['tipo'];
require './conn.php';
include './modais.php';
include './navbar.php';



if ($tipo == "curriculo") {
    ?>
    <div class="row mt-5 mb-5 m-0">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Todas as suas vagas</h1>
        <div class=" col-sm-1 text-center" onclick="sair()">
            <h1 class="fa fa-times-circle azulClaro" aria-hidden="true"></h1>
        </div>
    </div>
    <div class="row m-0 p-0 mb-5">

        <?php
            $row = $conn->query("SELECT * FROM curriculo WHERE email = '" . $email . "'");
            while ($result = $row->fetch_assoc()) {
                $id = $result['id'];
                $ro = $conn->query("SELECT * FROM cadastro WHERE idc = '" . $id . "'");
                while ($resul = $ro->fetch_assoc()) {
                    $idv = $resul['idv'];
                    $coracao = $resul['coracao'];
                    $r = $conn->query("SELECT * FROM vagas WHERE id = '" . $idv . "'");
                    while ($resu = $r->fetch_assoc()) {
                        $ar = explode(",", $resu['dias']);
                        $total = (count($ar)) - 1;
                        $dias = $ar[0] . " a " . $ar[$total];
                        $caminho = "window.location.href = './perfilV.php?vaga=" . $resu['id'] . "';";
                        echo '
                        <div class="col-1">
                        </div>
                        <div class="col-10 bg-azulClaro rounded-pill row p-2">
                        <img src="' . $resu['foto'] . '" class="rounded-circle col-1 p-0">
                        <div class="col-9 my-auto">
                        <h3 class="branco f-title">' . $resu['categoria'] . '</h3>
                        <p class="d-inline-block branco">' . $resu['turno'] . ' - ' . $dias . '</p>
                        </div>
                        <div class="col-1 my-auto">
                        <h3 class="far fa-trash-alt branco p-0 m-0" onclick="apagarVagaC(' . $resu['id'] . ')"></h3>
                        </div>
                        <div class="col-1 my-auto">';
                        if($coracao){
                            echo'
                            <h3 class="fa fa-heart branco p-0 m-0"></h3>
                            ';
                        }else{
                            echo'
                            <h3 class="far fa-heart branco p-0 m-0"></h3>
                            ';
                        }
                        echo '</div>
                        </div>
                        <div class="col-1">
                        </div>';
                    }
                }
            }
            ?>
    </div>

<?php
    include './footer.php';
} else {
    include './footer.php';
    echo
        "<script>
            Swal.fire({
            icon: 'error',
            title: 'Vish...',
            text: 'Você não tem acesso a essa página'
            });
          </script>";
}
?>