<?php
if (isset($_COOKIE['email'])) {
    $email = $_COOKIE['email'];
    $tipo = $_COOKIE['tipo'];
}


require './conn.php';


include './modais.php';
include './navbar.php';

$pesquisa = ($_GET['pesquisa']);

$row = $conn->query("SELECT * FROM vagas WHERE id = '$pesquisa'");
while ($result = $row->fetch_assoc()) {
    $r = $conn->query("SELECT * FROM empresa WHERE id = '".$result['criador']."'");
    $local = "";
    $nomeE = "";
    while ($res = $r->fetch_assoc()) {
        $nomeE = $res['nome'];
        $local= $res['endereco'];
    }

    $ar = explode(",",$result['dias']);
    $total = (count($ar)) - 1;
    $dias = $ar[0] . " a " . $ar[$total];
    ?>

    <div class="row m-0 mb-5 mt-5 p-0 w-100">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulEscuro pb-4 w-100 text-center col-sm-10">Tudo sobre a vaga que você escolheu!</h1>
        <div class=" col-sm-1 text-center" onclick="sairForm()">
            <h1 class="fa fa-times-circle azulEscuro" aria-hidden="true"></h1>
        </div>

        <div class="col-sm-1 m-0 p-0 bg-azulEscuro rounded-right">
        </div>
        <div class="col-sm-5 m-0 p-0 text-center">
            <div class="pt-5">
                <img src="<?php echo $result['foto']; ?>" class="img-perfil rounded-circle" alt="">
            </div>
            <div class="text-left mt-2 p-5 row">
                <div class="row m-0 p-0 col-6 h-100">
                    <div class="d-inline col-3 m-0 p-1 h-100 text-center">
                        <img src="./icon/local.png" alt="" class="w-50 my-auto">
                    </div>
                    <p class="f-text p-0 m-0 col-9 my-auto"><?php echo "<b>". $nomeE . "</b><br>" . $local; ?></p>
                </div>

                <br>
                <div class="row m-0 p-0 col-6 h-100">
                    <div class="d-inline col-3 m-0 p-1 h-100 text-center">
                        <img src="./icon/hora.png" alt="" class="w-75 my-auto">
                    </div>
                    <p class="f-text p-0 m-0 col-9 my-auto"><?php echo $dias ."<br>Turno: ". $result['turno']; ?></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 m-0 p-0 bg-azulEscuro rounded-left h-auto">
            <div class="form-group pr-5 pl-5 h-content align-middle">
                <form action="entrarVaga.php" method="POST">
                    <label for="" class="branco text">Objetivo para a vaga:</label>
                    <textarea name="objetivo" class="form-control bg-branco azulEscuro b-azulEscuro" cols="30" rows="3" placeholder="Escreva aqui os objetivos que expera alcançar se contratado"></textarea>
                    <input type="text" name="id" value="<?php echo $pesquisa; ?>" class="d-none">
                    <div class="text-right mt-3">
                        <?php
                            if (isset($email)) {
                                if ($tipo == "curriculo") {
                                    $row = $conn->query("SELECT * FROM curriculo WHERE email='$email'");
                                    while ($result = $row->fetch_assoc()) {
                                        if ($result['dataDeNascimento'] != "") {
                                            echo '<input type="submit" class="btn bg-branco azulEscuro f-text-bold" value="Cadastrar">';
                                        }
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

    if (!isset($email)) {
        echo "<script>
        Swal.fire({
            icon: 'warning',
        title: 'Oops...',
        text: 'Para se cadastrar é necessário fazer o cadastro!'
        });
      </script>";
    }

    if (isset($email)) {
        $row = $conn->query("SELECT * FROM curriculo WHERE email='$email'");
        while ($result = $row->fetch_assoc()) {
            if ($result['dataDeNascimento'] == "") {
                echo "<script>
                Swal.fire({
                    title: 'Oops...',
                    text: 'Para se cadastrar é necessário preencher seu currículo',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Fazer currículo'
                    }).then((result) => {
                        if (result.value) {
                            location.replace('./perfil.php');
                        }
                    })
                      </script>";
            }
        }
    }
    ?>