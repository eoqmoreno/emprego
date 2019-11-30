<?php

$row = $conn->query("SELECT * FROM empresa WHERE email = '" . $_COOKIE['email'] . "'");
while ($result = $row->fetch_assoc()) {
    ?>
    <div class="row mt-5 mb-5 m-0">
        <h1 class="col-sm-1" aria-hidden=""></h1>
        <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Quer editar o perfil da empresa?</h1>
        <a href="../">
            <h1 class="fa fa-times-circle col-sm-1" aria-hidden="true"></h1>
        </a>

        <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
            <form action="cadEmpresa.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
                <div class="text-center">
                    <?php
                        if ($result['foto'] == "") {
                            echo '<img src="../icon/fotoE.gif" class="img-perfil" alt="" id="fotoPerfil">';
                        } else {
                            echo '<img src="' . $result['foto'] . '" class="img-perfil rounded-circle" alt="" id="fotoPerfil">';
                        }
                        ?>
                    <input type="file" accept="image/png, image/jpeg" onchange="document.getElementById('fotoPerfil').src = window.URL.createObjectURL(this.files[0])" name="foto" id="fotoInput" class="d-none">
                </div>
                <div class="form-group mt-5">
                    <label for="" class="branco text">Nome da Empresa:</label>
                    <input type="text" name="nome" class="form-control bg-azulClaro branco b-branco" value="<?php echo $result['nome']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="branco text">Email:</label>
                    <input type="email" name="email" class="form-control bg-azulClaro branco b-branco" value="<?php echo $result['email']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="branco text">Área de Atuação:</label>
                    <input type="text" name="area" class="form-control bg-azulClaro branco b-branco" value="<?php echo $result['area']; ?>">
                </div>

                <div class="form-group">
                    <label for="" class="branco text">Telefone:</label>
                    <input type="tel" name="telefone" class="form-control tell bg-azulClaro branco b-branco" value="<?php echo $result['telefone']; ?>">
                </div>


        </div>
        <div class="col-sm-6 p-5">
            <div class="form-group">
                <label for="" class="azulClaro text">Endereço Físico:*</label>
                <input type="text" name="endereco" class="form-control bg-branco azulClaro b-azulClaro" placeholder="Ex: Rua, Nº, Bairro*" value="<?php echo $result['endereco']; ?>" required>
            </div>

            <div class="form-group">
                <label for="" class="azulClaro text">CNPJ:*</label>
                <input type="text" name="cnpj" class="form-control bg-branco azulClaro b-azulClaro cnpj" placeholder="Ex: 99.999.999/9999-99" value="<?php echo $result['cnpj']; ?>" required>
            </div>

            <div class="form-group">
                <label for="" class="azulClaro text">Sobre a empresa:</label>
                <textarea name="sobreE" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Escreva um pouco sobre sua empresa"><?php echo $result['sobreE']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" class="azulClaro text">Sobre os serviços:</label>
                <textarea name="sobreS" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Escreva um pouco sobre os serviços da sua empresa"><?php echo $result['sobreS']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="" class="azulClaro text">Sobre os funcionários:</label>
                <textarea name="sobreF" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Escreva um pouco sobre o perfil profissional da empresa"><?php echo $result['sobreF']; ?></textarea>
            </div>

            <div class="text-right">
                <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
            </div>
            </form>
        </div>
    </div>
<?php
}
?>