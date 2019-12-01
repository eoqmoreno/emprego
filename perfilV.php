<?php
require './conn.php';
include './modais.php';
include './navbar.php';
if (isset($_GET['vaga'])) {
    $vaga = $_GET['vaga'];
    $row = $conn->query("SELECT * FROM vagas WHERE id = '" . $vaga . "'");
    while ($result = $row->fetch_assoc()) {
        ?>

        <div class="row mt-5 mb-5 m-0">
            <h1 class="col-sm-1" aria-hidden=""></h1>
            <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Vamos cadastrar uma vaga!</h1>
            <a href="../">
                <h1 class="fa fa-times-circle col-sm-1" aria-hidden="true"></h1>
            </a>

            <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
                <form action="cadVaga.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
                    <div class="text-center h-100 my-auto">
                        <?php
                                if ($result['foto'] == "") {
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
                    <select name="profissao" class="form-control azulClaro b-azulClaro" required>
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

                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="seg" value="seg" class="check"> <br>
                            <label for="seg" class="azulClaro">Seg</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="ter" value="ter" class="check"> <br>
                            <label for="ter" class="azulClaro">Ter</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qua" value="qua" class="check"> <br>
                            <label for="qua" class="azulClaro">Qua</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="qui" value="qui" class="check"> <br>
                            <label for="qui" class="azulClaro">Qui</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sex" value="sex" class="check"> <br>
                            <label for="sex" class="azulClaro">Sex</label>
                        </div>
                        <div class="text-center col-2">
                            <input type="checkbox" name="dia[]" id="sab" value="sab" class="check"> <br>
                            <label for="sab" class="azulClaro">Sab</label>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="" class="azulClaro text">Requisitos da vaga:*</label>
                    <textarea name="habilidades" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Ex: Habilidade 1, Habilidade 2"><?php echo $result['habilidades'] ?></textarea>
                </div>

                <div class="text-right">
                    <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
                </div>
                </form>
            </div>
        </div>


    <?php
        }
    } else {
        ?>


    <div class="row mt-5 mb-5 m-0">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Vamos cadastrar uma vaga!</h1>
        <a href="../">
            <h1 class="fa fa-times-circle col-sm-1" aria-hidden="true"></h1>
        </a>

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
                <select name="profissao" class="form-control azulClaro b-azulClaro" required>
                    <option value=''>Selecionar</option>
                    <option value=''>Matutino</option>
                    <option value=''>Noturno</option>
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
                <textarea name="habilidades" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Ex: Habilidade 1, Habilidade 2"></textarea>
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
?>