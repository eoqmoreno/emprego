<?php

$row = $conn->query("SELECT * FROM curriculo WHERE email = '" . $_COOKIE['email'] . "'");
while ($result = $row->fetch_assoc()) {
    ?>
    <div class="row mt-5 mb-5 m-0">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulEscuro pb-4 w-100 text-center col-sm-10">Quer editar o seu perfil?</h1>
        <div class=" col-sm-1 text-center pointer" onclick="sairForm()">
            <h1 class="fa fa-times-circle azulEscuro" aria-hidden="true"></h1>
        </div>

        <div class="col-sm-6 bg-azulEscuro p-5 rounded-right">
            <form action="cadCurriculo.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
                <div class="text-center">
                    <?php
                        if ($result['foto'] == "") {
                            echo '<img src="../icon/fotoC.gif" class="img-perfil" alt="" id="fotoPerfil">';
                        } else {
                            echo '<img src="' . $result['foto'] . '" class="img-perfil rounded-circle" alt="" id="fotoPerfil">';
                        }
                        ?>
                    <input type="file" accept="image/png, image/jpeg" onchange="document.getElementById('fotoPerfil').src = window.URL.createObjectURL(this.files[0])" name="foto" id="fotoInput" class="d-none">
                </div>
                <div class="form-group mt-5">
                    <label for="" class="branco text">Nome:</label>
                    <input type="text" name="nome" class="form-control bg-azulEscuro branco b-branco" value="<?php echo $result['nome']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="branco text">Email:</label>
                    <input type="email" name="email" class="form-control bg-azulEscuro branco b-branco" value="<?php echo $result['email']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="branco text">Telefone:</label>
                    <input type="tel" name="telefone" class="form-control tell bg-azulEscuro branco b-branco" value="<?php echo $result['telefone']; ?>">
                </div>

        </div>
        <div class="col-sm-6 p-5">
            <div class="form-group">
                <label for="" class="azulEscuro text">Data de Nascimento:*</label>
                <input type="date" name="data" class="form-control bg-branco azulEscuro b-azulEscuro" placeholder="Data de Nascimento*" value="<?php echo $result['dataDeNascimento']; ?>" required>
            </div>

            <div class="form-group">
                <label for="" class="azulEscuro text">Profissão:*</label>
                <select name="profissao" class="form-control azulEscuro b-azulEscuro" required>
                    <?php
                        if (is_null($result['profissao'])) {
                            echo "<option value=''>Selecionar</option>";
                        } else {
                            echo "<option value='" . $result['profissao'] . "'>" . $result['profissao'] . "</option>";
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
                <label for="" class="azulEscuro text">Grau de Escolaridade:*</label>
                <select name="escolaridade" class="form-control azulEscuro b-azulEscuro" required>

                    <?php
                        if (is_null($result['escolaridade'])) {
                            echo "<option value=''>Selecionar</option>";
                        } else {
                            echo "<option value='" . $result['escolaridade'] . "'>" . $result['escolaridade'] . "</option>";
                        }
                        ?>
                    </option>
                    <option value="Ensino fundamental incompleto">Ensino Fundamental Incompleto</option>
                    <option value="Ensino fundamental completo">Ensino Fundamental Completo</option>
                    <option value="Ensino médio incompleto">Ensino Médio Incompleto</option>
                    <option value="Ensino médio completo">Ensino Médio Completo</option>
                    <option value="Ensino superior incompleto">Ensino Superior Incompleto</option>
                    <option value="Ensino superior completo">Ensino Superior Completo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="" class="azulEscuro text">Experiências profissionais:</label>
                <textarea name="experiencia" class="form-control bg-branco azulEscuro b-azulEscuro" cols="30" rows="3" placeholder="Ex: Local, X anos, Cargo."><?php echo $result['experiencia']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" class="azulEscuro text">Cursos já concluidos:</label>
                <textarea name="curso" class="form-control bg-branco azulEscuro b-azulEscuro" cols="30" rows="3" placeholder="Ex: Curso, X anos, Instituição."><?php echo $result['curso']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" class="azulEscuro text">Habilidades:*</label>
                <textarea name="habilidades" class="form-control bg-branco azulEscuro b-azulEscuro" cols="30" rows="3" placeholder="Ex: Habilidade 1; Habilidade 2" required><?php echo $result['habilidades']; ?></textarea>
            </div>

            <div class="text-right">
                <input type="submit" class="btn bg-azulEscuro branco f-text-bold" value="Cadastrar" />
            </div>
            </form>
        </div>
    </div>
<?php
}
?>