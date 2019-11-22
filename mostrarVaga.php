<?php
if (isset($_COOKIE['id'])) {
    $id = $_COOKIE['id'];
}else {
    echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <strong>Para se cadastrar é necessário entrar!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}

require './conn.php';
if (isset($id)) {
    $row = $conn->query("SELECT * FROM curriculo WHERE id='$id'");
    while ($result = $row->fetch_assoc()) {
        if ($result['dataDeNascimento'] == "") {
            echo '<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
            <strong>Para se cadastrar é necessário concluir o currículo!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        } 
    }
}

include './modais.php';
include './navbar.php';

$pesquisa = ($_GET['pesquisa']);

$row = $conn->query("SELECT * FROM vagas WHERE id = '$pesquisa'");
while ($result = $row->fetch_assoc()) {

    ?>

    <div class="row m-0 mb-5 mt-5 p-0 w-100">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulEscuro pb-4 w-100 text-center col-sm-10">Tudo sobre a vaga que você escolheu!</h1>
        <a href="../">
            <h1 class="fa fa-times-circle col-sm-1 azulEscuro" aria-hidden="true"></h1>
        </a>

        <div class="col-sm-1 m-0 p-0 bg-azulEscuro">
        </div>
        <div class="col-sm-5 m-0 p-0 text-center">
            <div class="pt-5">
                <img src="./img/vagas/cozinheira.jpeg" class="img-perfil rounded-circle" alt="">
            </div>
            <div class="text-left mt-5 p-5">
                <div class="row m-0 p-0">
                    <img src="./icon/local.png" alt="" class="d-inline col-3 h-100 my-auto">
                    <p class="f-text p-0 m-0 col-9 my-auto"><?php echo $result['local'] . "<br>" . $result['endereco']; ?></p>
                </div>

                <br>
                <div class="row m-0 p-0">
                    <img src="./icon/hora.png" alt="" class="d-inline col-3 h-100 my-auto">
                    <p class="f-text p-0 m-0 col-9 my-auto"><?php echo $result['horas']; ?> semanais<br>De sengunda a sexta<br>de 10h-12h</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 m-0 p-0 bg-azulEscuro">
            <div class="form-group pr-5 pl-5 h-100">
                <form action="" method="POST">
                    <label for="" class="branco text">Objetivo para a vaga:</label>
                    <textarea name="experiencia" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Escreva aqui os objetivos que expera alcançar se contratado"></textarea>
                    <div class="text-right mt-3">
                        <?php
                            if (isset($id)) {
                                $row = $conn->query("SELECT * FROM curriculo WHERE id='$id'");
                                while ($result = $row->fetch_assoc()) {
                                    if ($result['dataDeNascimento'] == "") {
                                        $link = "./perfil.php";
                                        echo '<input type="button" onclick="oia()" class="btn bg-branco azulEscuro f-text-bold" value="Cadastrar"><script>function oia(){location.href = "./perfil.php"}</script>';
                                    } else {
                                        echo '<input type="submit" class="btn bg-branco azulEscuro f-text-bold" value="Cadastrar">';
                                    }
                                }
                            }
                            ?> 
                    </div>
                </form>
            </div>
        </div>

    <?php
    };
    ?>
    </div>
    </div>
    <?php
    include './footer.php';
    ?>