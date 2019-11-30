    <img src="../img/1.jpg" class="d-block w-100" alt="...">

<!-- Carousel Cell -->
<div id="carouselHomeCell" class="carousel slide w-100 p-0 m-0 d-block d-sm-none" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselHomeCell" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHomeCell" data-slide-to="1"></li>
            <li data-target="#carouselHomeCell" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1.jpg" class="d-block w-100" alt="...">
            </div>
            
        </div>
</div>


    <div class="bg-branco w-100 row p-0 m-0 pb-5">
        <div class="bg-branco w-100 row p-0 m-0 pt-4 pb-4">
            <div class="col-sm-1 bg-azulClaro rounded-right"></div>
            <h1 class="f-title azulClaro text-center w-100 col-sm-10">Vagas novinhas pra você!</h1>
            <div class="col-sm-1 bg-azulClaro rounded-left"></div>
        </div>
        
        <!-- Carousel PC -->
        <div id="novasVagasPc" class="carousel slide w-100 p-0 m-0 d-none d-sm-block"  style="text-align: -webkit-center;" data-ride="carousel">
            <a class="carousel-control-prev" href="#novasVagasPc" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="fa fa-chevron-left azulEscuro"></span>
            </a>
            <a class="carousel-control-next" href="#novasVagasPc" role="button" data-slide="next">
                <span class="fa fa-chevron-right azulEscuro"></span>
            </a>
            <div class="carousel-inner w-75 cardpc">
            </div>
        </div>

        <div id="novasVagasCell" class="carousel slide w-100 p-0 m-0 d-block d-sm-none"  style="text-align: -webkit-center;" data-ride="carousel">
            <a class="carousel-control-prev" href="#novasVagasCell" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="fa fa-chevron-left roxo"></span>
            </a>
            <a class="carousel-control-next" href="#novasVagasCell" role="button" data-slide="next">
                <span class="fa fa-chevron-right roxo"></span>
            </a>
            <div class="carousel-inner w-75 cardcell">
            </div>
        </div>
    </div>


    <div class="row p-0 m-0">
        <div class="col-sm-6 col- cadCurriculo bg-azulEscuro p-3">
            <h1 class="branco f-title w-50">Que tal cadastrar o seu currículo?</h1>
            <br>
            <input type="button" class="btn bg-white azulEscuro f-text-bold pt-2" value="Cadastrar" data-toggle="modal" data-target="#cadCurriculo">
        </div>
        <div class="col-sm-6 cadEmpresa bg-azulClaro p-3">
            <h1 class="branco f-title w-50">Que tal cadastrar a sua empresa?</h1>
            <br>
            <input type="button" class="btn bg-white azulClaro f-text-bold pt-2" value="Cadastrar" data-toggle="modal" data-target="#cadEmpresa">
        </div>
    </div>
    

    <div class="bg-branco pb-5 text-center">
        <h1 class="f-title azulClaro p-4 w-100" id="popup">Categorias</h1>
        <div class="row w-100 p-0 m-0 categorias"></div>
    </div>