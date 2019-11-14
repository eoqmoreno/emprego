<?php
    $_COOKIE['id'];

    $row = $conn->query("SELECT * FROM curriculo WHERE id = ".$_COOKIE['id']);
    while ($result = $row->fetch_assoc()) {
?>
<div class="row mt-5 mb-5 m-0">
    <h1 class="col-sm-1" aria-hidden=""></h1>
    <h1 class="f-title azulClaro pb-4 w-100 text-center col-sm-10">Quer editar o seu perfil?</h1>
    <a href="../">
        <h1 class="fa fa-times-circle col-sm-1" aria-hidden="true"></h1>
    </a>

    <div class="col-sm-6 bg-azulClaro p-5 rounded-right">
            <form action="cad.php" method="post" autocomplete="off" class="">
                    <div class="text-center">
                        <img src="../img/vagas/cozinheira.jpeg" class="img-perfil rounded-circle" alt="">
                    </div>
                    <div class="form-group">
                        <label for="" class="branco text">Nome:</label>
                        <input type="text" name="nome" class="form-control bg-azulClaro branco b-branco" value="<?php echo $result['nome']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="" class="branco text">Email:</label>
                        <input type="email" name="email" class="form-control bg-azulClaro branco b-branco" value="<?php echo $result['email']; ?>">
                    </div>  
                    
                    <div class="form-group">
                        <label for="" class="branco text">Telefone:</label>
                        <input type="tel" name="tell" class="form-control tell bg-azulClaro branco b-branco" value="<?php echo $result['telefone']; ?>">
                    </div>

                </form>
    </div>
    <div class="col-sm-6 p-5">
            <form action="cad.php" method="post" autocomplete="off" >
                    <div class="form-group">
                        <label for="" class="azulClaro text">Data de Nascimento:</label>
                        <input type="date" name="nome" class="form-control bg-branco azulClaro b-azulClaro" placeholder="Data de Nascimento*" value="<?php echo $result['idade']; ?>" required>
                    </div>

                    <div class="form-group">
                            <label for="" class="azulClaro text">Profissão:</label>
                            <select name="profissao" class="form-control azulClaro b-azulClaro" required>
                                <option value="nan">oia</option>
                            </select>
                    </div>
                    
                    <div class="form-group">
                            <label for="" class="azulClaro text">Experiências profissionais:</label>
                            <textarea name="" class="form-control bg-branco azulClaro b-azulClaro" id="" cols="30" rows="3" placeholder="Ex: Local, X anos, Cargo" value="<?php echo $result['experiencia']; ?>"></textarea>
                    </div>

                    <div class="form-group">
                            <label for="" class="azulClaro text">Cursos já concluidos:</label>
                            <textarea name="" class="form-control bg-branco azulClaro b-azulClaro" id="" cols="30" rows="3" placeholder="Ex: Curso, X anos, Instituição" value="<?php echo $result['curso']; ?>"></textarea>
                    </div>

                    <div class="form-group">
                            <label for="" class="azulClaro text">Habilidades:</label>
                            <textarea name="" class="form-control bg-branco azulClaro b-azulClaro" id="" cols="30" rows="3" placeholder="Ex: Habilidade 1; Habilidade 2" value="<?php echo $result['habilidades']; ?>"></textarea>
                    </div>

                    <div class="text-right">
                        <input type="submit" class="btn bg-azulClaro branco f-text-bold" value="Cadastrar"/>
                    </div>
                </form>    
                </div>
            </div>
<?php
    }
?>