<?php
// $_COOKIE['id'];

require './conn.php';
include './modais.php';
include './navbar.php';

?>
<div class="row mt-5 mb-5 m-0">
    <h1 class="col-sm-1" aria-hidden=""></h1>
    <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Vamos cadastrar uma vaga!</h1>
    <a href="../">
        <h1 class="fa fa-times-circle col-sm-1" aria-hidden="true"></h1>
    </a>

    <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
        <form action="cadCurriculo.php" enctype="multipart/form-data" method="post" autocomplete="" class="">
            <div class="text-center h-100 my-auto">
                <img src="../icon/foto.png" class="img-perfil" alt="" id="fotoPerfil">
                <input type="file" accept="image/png, image/jpeg" name="foto" id="fotoInput" class="d-none">
            </div>
    </div>

    <div class="col-sm-6">

        <div class="form-group">
            <label for="" class="azulClaro text">Cargo ou categoria:*</label>
            <select name="profissao" class="form-control azulClaro b-azulClaro" required>
                <option value=''>Selecionar</option>
                <option value=''>Design</option>
                <option value=''>Vendedor</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" class="azulClaro text">Salario:</label>
            <input type="text" class="form-control bg-branco azulClaro b-azulClaro" placeholder="R$">
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
                    <input type="checkbox" id="seg" class="check"> <br>
                    <label for="seg" class="azulClaro">Seg</label>
                </div>
                <div class="text-center col-2">
                    <input type="checkbox" id="ter" class="check"> <br>
                    <label for="ter" class="azulClaro">Ter</label>
                </div>
                <div class="text-center col-2">
                    <input type="checkbox" id="qua" class="check"> <br>
                    <label for="qua" class="azulClaro">Qua</label>
                </div>
                <div class="text-center col-2">
                    <input type="checkbox" id="qui" class="check"> <br>
                    <label for="qui" class="azulClaro">Qui</label>
                </div>
                <div class="text-center col-2">
                    <input type="checkbox" id="sex" class="check"> <br>
                    <label for="sex" class="azulClaro">Sex</label>
                </div>
                <div class="text-center col-2">
                    <input type="checkbox" id="sab" class="check"> <br>
                    <label for="sab" class="azulClaro">Sab</label>
                </div>
            </div>

        </div>

        <div class="form-group">
            <label for="" class="azulClaro text">Requisitos da vaga:*</label>
            <textarea name="habilidades" class="form-control bg-branco azulClaro b-azulClaro" cols="30" rows="3" placeholder="Ex: Habilidade 1; Habilidade 2"></textarea>
        </div>

        <div class="text-right">
            <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar" />
        </div>
        </form>
    </div>
</div>
<?php
include './footer.php';
?>