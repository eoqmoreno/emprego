<?php

$tipo = $_COOKIE['tipo'];
require './conn.php';
include './modais.php';
include './navbar.php';

if ($tipo == "empresa") {

    if (isset($_GET['vaga'])) {
        $vaga = $_GET['vaga'];
        $row = $conn->query("SELECT * FROM vagas WHERE id = '" . $vaga . "'");
        while ($result = $row->fetch_assoc()) {
            ?>

            <div class="row mt-5 mb-5 m-0">
                <h1 class="col-sm-1" aria-hidden=""></h1>
                <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Vamos cadastrar uma vaga!</h1>
                <div class=" col-sm-1 text-center pointer" onclick="sairForm()">
                    <h1 class="fa fa-times-circle azulClaro" aria-hidden="true"></h1>
                </div>

                <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
                    <form action="cadVaga.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
                        <div class="text-center h-100 my-auto">
                            <?php
                                        if ($result['foto'] == "./img/users/" or $result['foto'] == "") {
                                            echo '<img src="../icon/fotoE.gif" class="img-perfil" alt="" id="fotoPerfil">';
                                        } else {
                                            echo '<img src="' . $result['foto'] . '" class="img-perfil rounded-circle" alt="" id="fotoPerfil">';
                                        }
                                        ?>
                            <input type="file" accept="image/png, image/jpeg" name="foto" onchange="document.getElementById('fotoPerfil').src = window.URL.createObjectURL(this.files[0])" id="fotoInput" class="d-none">
                        </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="" class="azulClaro text">Cargo ou categoria:*</label>
                        <select name="categoria" class="form-control azulClaro b-azulClaro" required>
                            <?php
                                        if (is_null($result['categoria'])) {
                                            echo "<option value=''>Selecionar</option>";
                                        } else {
                                            echo "<option value='" . $result['categoria'] . "'>" . $result['categoria'] . "</option>";
                                        }
                                        ?>
                            <?php
                                        $r = $conn->query("SELECT * FROM categorias ORDER BY nome");
                                        while ($res = $r->fetch_assoc()) {
                                            echo '<option value="' . $res['nome'] . '">' . $res['nome'] . '</option>';
                                        }
                                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="azulClaro text">Salario:</label>
                        <input type="text" class="form-control bg-branco azulClaro b-azulClaro dinheiro" placeholder="R$" name="salario" value="<?php echo $result['salario'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="azulClaro text">Turno:*</label>
                        <select name="turno" class="form-control azulClaro b-azulClaro" required>
                            <?php
                                        if (is_null($result['turno'])) {
                                            echo "<option value=''>Selecionar</option>";
                                        } else {
                                            echo "<option value='" . $result['turno'] . "'>" . $result['turno'] . "</option>";
                                        }
                                        ?>
                            <option value='Matutino'>Matutino</option>
                            <option value='Noturno'>Noturno</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="azulClaro text">Dias da semana:*</label>
                        <div class="row">
                            <?php
                                        $dias = explode(",", $result['dias']);

                                        foreach ($dias as $value) {
                                            if ($value == "Segunda") {
                                                $segunda = "ok";
                                            }
                                            if ($value == "Terça") {
                                                $terça = "ok";
                                            }
                                            if ($value == "Quarta") {
                                                $quarta = "ok";
                                            }
                                            if ($value == "Quinta") {
                                                $quinta = "ok";
                                            }
                                            if ($value == "Sexta") {
                                                $sexta = "ok";
                                            }
                                            if ($value == "Sabado") {
                                                $sabado = "ok";
                                            }
                                        }

                                        if (isset($segunda)) {
                                            echo '
                                    <div class="text-center col-2">
                                        <input type="checkbox" name="dia[]" id="seg" value="Segunda" class="check" checked> <br>
                                        <label for="seg" class="azulClaro">Seg</label>
                                    </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                                        <input type="checkbox" name="dia[]" id="seg" value="Segunda" class="check"> <br>
                                        <label for="seg" class="azulClaro">Seg</label>
                                    </div>
                                    ';
                                        }

                                        if (isset($terça)) {
                                            echo '
                                    <div class="text-center col-2">
                                        <input type="checkbox" name="dia[]" id="ter" value="Terça" class="check" checked> <br>
                                        <label for="ter" class="azulClaro">Ter</label>
                                    </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                                        <input type="checkbox" name="dia[]" id="ter" value="Terça" class="check"> <br>
                                        <label for="ter" class="azulClaro">Ter</label>
                                    </div>
                                    ';
                                        }

                                        if (isset($quarta)) {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qua" value="Quarta" class="check" checked> <br>
                            <label for="qua" class="azulClaro">Qua</label>
                        </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qua" value="Quarta" class="check"> <br>
                            <label for="qua" class="azulClaro">Qua</label>
                        </div>
                                    ';
                                        }

                                        if (isset($quinta)) {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qui" value="Quinta" class="check" checked> <br>
                            <label for="qui" class="azulClaro">Qui</label>
                        </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qui" value="Quinta" class="check"> <br>
                            <label for="qui" class="azulClaro">Qui</label>
                        </div>
                                    ';
                                        }

                                        if (isset($sexta)) {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sex" value="Sexta" class="check" checked> <br>
                            <label for="sex" class="azulClaro">Sex</label>
                        </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sex" value="Sexta" class="check"> <br>
                            <label for="sex" class="azulClaro">Sex</label>
                        </div>
                                    ';
                                        }

                                        if (isset($sabado)) {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sab" value="Sabado" class="check" checked> <br>
                            <label for="sab" class="azulClaro">Sab</label>
                        </div>
                                    ';
                                        } else {
                                            echo '
                                    <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sab" value="Sabado" class="check"> <br>
                            <label for="sab" class="azulClaro">Sab</label>
                        </div>
                                    ';
                                        }
                                        ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="" class="azulClaro text">Requisitos da vaga:*</label>
                        <textarea name="habilidades" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Ex: Habilidade 1, Habilidade 2" required><?php echo $result['habilidades'] ?></textarea>
                    </div>

                    <input type="text" name="id" class="d-none" value="<?php echo $result['id']; ?>">

                    <div class="text-right">
                        <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
                    </div>
                    </form>
                </div>
                <div class="row mt-5 mb-1 m-0 w-100">
                    <h1 class="f-title azulClaro w-100 text-center col-12">Candidatos para a vaga</h1>
                </div>
                <div class="row m-0 p-0 "> 
                <?php
                            $ro = $conn->query("SELECT * FROM cadastro WHERE idv = '" . $vaga . "'");
                            while ($resul = $ro->fetch_assoc()) {
                                $idc = $resul['idc'];
                                $r = $conn->query("SELECT * FROM curriculo WHERE id = '" . $idc . "'");
                                while ($resu = $r->fetch_assoc()) {
                                    $caminho = "window.location.href = './perfilCv.php?id=" . $resu['id'] . "';";
                                    echo '
                                    <div class="col-1">
                                    </div>
                                    <div class="col-10 bg-azulClaro rounded-pill row p-2">
                                    <img src="' . $resu['foto'] . '" class="rounded-circle col-1 p-0">
                                    <div class="col-8 my-auto">
                                    <h3 class="branco f-title">' . $resu['nome'] . '</h3>
                                    <p class="d-inline-block branco p-0 m-0">Profissão: <b>' . $resu['profissao'] . '</b> | Grau de escolaridade: <b>' . $resu['escolaridade'] . '</b></p><br>
                                    <p class="d-inline-block branco p-0 m-0">Habilidades: <b>' . $resu['habilidades'] . '</b></p>
                                    </div>
                                    <div class="col-2 my-auto text-right">
                                    <input type="button" class="btn bg-branco azulClaro" value="Detalhes" onclick="' . $caminho . '">
                                    </div>
                                    <div class="col-1 my-auto">
                                    <h3 class="fa fa-heart branco p-0 m-0" onclick="coracao('. $resul['id'] .')"></h3>
                                    </div>
                                    </div>
                                    <div class="col-1">
                                    </div>';
                                }
                            }
                            ?>
                </div>
            </div>


        <?php
                }
            } else {
                ?>


        <div class="row mt-5 mb-5 m-0">
            <h1 class="col-sm-1" aria-hidden=""></h1>
            <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Vamos cadastrar uma vaga!</h1>
            <div class=" col-sm-1 text-center pointer" onclick="sairForm()">
                <h1 class="fa fa-times-circle azulClaro" aria-hidden="true"></h1>
            </div>

            <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
                <form action="cadVaga.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
                    <div class="text-center h-100 my-auto">
                        <img src="../icon/fotoE.gif" class="img-perfil" alt="" id="fotoPerfil">
                        <input type="file" accept="image/png, image/jpeg" name="foto" onchange="document.getElementById('fotoPerfil').src = window.URL.createObjectURL(this.files[0])" id="fotoInput" class="d-none">
                    </div>
            </div>

            <div class="col-sm-6">

                <div class="form-group">
                    <label for="" class="azulClaro text">Cargo ou categoria:*</label>
                    <select name="categoria" class="form-control azulClaro b-azulClaro" required>
                        <option value=''>Selecionar</option>
                        <?php
                                $r = $conn->query("SELECT * FROM categorias ORDER BY nome");
                                while ($res = $r->fetch_assoc()) {
                                    echo '<option value="' . $res['nome'] . '">' . $res['nome'] . '</option>';
                                }
                                ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="azulClaro text">Salario:</label>
                    <input type="text" class="form-control bg-branco azulClaro b-azulClaro dinheiro" name="salario" placeholder="R$">
                </div>

                <div class="form-group">
                    <label for="" class="azulClaro text">Turno:*</label>
                    <select name="turno" class="form-control azulClaro b-azulClaro" required>
                        <option value=''>Selecionar</option>
                        <option value='Matutino'>Matutino</option>
                        <option value='Noturno'>Noturno</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="" class="azulClaro text">Dias da semana:*</label>
                    <div class="row">

                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="seg" value="Segunda" class="check"> <br>
                            <label for="seg" class="azulClaro">Seg</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="ter" value="Terça" class="check"> <br>
                            <label for="ter" class="azulClaro">Ter</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qua" value="Quarta" class="check"> <br>
                            <label for="qua" class="azulClaro">Qua</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qui" value="Quinta" class="check"> <br>
                            <label for="qui" class="azulClaro">Qui</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sex" value="Sexta" class="check"> <br>
                            <label for="sex" class="azulClaro">Sex</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sab" value="Sabado" class="check"> <br>
                            <label for="sab" class="azulClaro">Sab</label>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="" class="azulClaro text">Requisitos da vaga:*</label>
                    <textarea name="habilidades" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Ex: Habilidade 1, Habilidade 2" required></textarea>
                </div>

                <div class="text-right">
                    <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
                </div>
                </form>
            </div>
        </div>
<?php
    }
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