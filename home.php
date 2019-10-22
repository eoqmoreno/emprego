<div id="carouselExampleIndicators" class="carousel slide w-100 p-0 m-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item img-carousel active">
                <img src="./img/1.jpg" class="d-block w-100" alt="...">
            </div>
            
        </div>
</div>

    <div class="bg-branco w-100 row p-0 m-0 pb-5">
        <div class="bg-branco w-100 row p-0 m-0 pt-4 pb-4">
            <div class="col-sm-1 bg-roxo rounded-right"></div>
            <h1 class="f-title roxo text-center w-100 col-sm-10">Vagas novinhas pra você!</h1>
            <div class="col-sm-1 bg-roxo rounded-left"></div>
        </div>

        <div id="novasVagas" class="carousel slide w-100 p-0 m-0"  style="text-align: -webkit-center;" data-ride="carousel">
            <a class="carousel-control-prev" href="#novasVagas" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="fa fa-chevron-left roxo"></span>
            </a>
            <a class="carousel-control-next" href="#novasVagas" role="button" data-slide="next">
                <span class="fa fa-chevron-right roxo"></span>
            </a>
            <div class="carousel-inner w-75">
                <div class="carousel-item active">
                    <div class="card-deck">
                        <div class="card text-left">
                            <img src="./img/vagas/cozinheira.jpeg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title bg-roxo branco w-100 text-center f-text pt-1 m-0">Cozinheira</h5>
                                <ul class="card-text">
                                    <li>Miudos com Afetos</li>
                                    <li>20h semanais</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card text-left">
                            <img src="./img/vagas/cozinheira.jpeg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title bg-roxo branco w-100 text-center f-text pt-1 m-0">Cozinheira</h5>
                                <ul class="card-text">
                                    <li>Miudos com Afetos</li>
                                    <li>20h semanais</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card text-left">
                            <img src="./img/vagas/cozinheira.jpeg" class="card-img-top" alt="...">
                            <div class="card-body p-0">
                                <h5 class="card-title bg-roxo branco w-100 text-center f-text pt-1 m-0">Cozinheira</h5>
                                <ul class="card-text">
                                    <li>Miudos com Afetos</li>
                                    <li>20h semanais</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row p-0 m-0">
        <div class="col-sm-6 cadCurriculo bg-roxo p-5">
            <h1 class="branco f-title w-50">Que tal cadastrar o seu currículo?</h1>
            <br>
            <input type="submit" class="btn bg-white roxo f-text pt-2" value="Cadastrar" data-toggle="modal" data-target="#cadCurriculo">
        </div>
        <div class="col-sm-6 cadEmpresa bg-azulClaro p-5">
            <h1 class="branco f-title w-50">Que tal cadastrar a sua empresa?</h1>
            <br>
            <input type="submit" class="btn bg-white azulClaro f-text pt-2" value="Cadastrar">
        </div>
    </div>
    
    <div class="bg-branco w-100 row p-0 m-0 pb-5">
        <h1 class="f-title roxo p-4 text-center w-100">Categorias</h1>
            <a href="" class="d-block circle bg-roxo d-block branco f-text align-middle text-center rounded-circle">
                Design
            </a>
    </div>
      
    <!-- Modal -->
    <div class="modal fade" id="cadCurriculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-azulClaro p-1">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="branco far fa-times-circle"></span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h5 class="modal-title azulClaro f-title-150" id="exampleModalLabel">Vamos começar o cadastro?</h5>
                <br>
                <form action="select.php" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nome completo*">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-mail*">
                        </div>
                        <div class="form-group">
                            <input type="tell" class="form-control" placeholder="Telefone*">
                        </div>
                        <div class="form-group">
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn bg-azulClaro branco" value="Cadastrar"/>
                    </div>
                </form>
          </div>
        </div>
      </div>