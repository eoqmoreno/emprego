<?php

include "../conn.php";
include "../navbar.php";

?>
<nav class="navbar p-0 m-0 navbar-expand-sm">
        <a class="col-sm-2 col-12 text-center" href="./">
        </a>
        <button class="navbar-toggler col-6 text-right" type="button" data-toggle="collapse"
            data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
            aria-label="Toggle navigation">
            <h1 class="fa fa-bars azulClaro m-0 p-1"></h1>
        </button>
        <div class="collapse navbar-collapse btn-group row w-100 col-sm-10  p-0 m-0" id="navbarTogglerDemo01">
            <a href="#apresentacao" class="f-title-150 m-0 p-0 col-12 col-sm-3">Apresentação</a>

            <div class="dropdown col-12 col-sm-3">
                <a class="f-title-150 m-0 p-0 dropdown-toggle" href="#" role="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Identidade Visual
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#identidade">Início</a>
                    <a class="dropdown-item" href="#variacoesicone">Variações de Icone</a>
                    <a class="dropdown-item" href="#paleta">Paleta de Cores</a>
                    <a class="dropdown-item" href="#harmonia">Harmonia Acromática</a>
                </div>
            </div>

            <div class="dropdown col-12 col-sm-3">
                <a class="f-title-150 m-0 p-0 dropdown-toggle" href="#" role="button" id="dropdownMenuButton1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Guia de Utilização
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="#guia">Início</a>
                    <a class="dropdown-item" href="#minimo">Tamanho Mínimo</a>
                    <a class="dropdown-item" href="#uso">Restrições de Uso</a>
                    <a class="dropdown-item" href="#aplicacoes">Aplicações</a>
                </div>
            </div>
            <a href="#download" class="f-title-150 align-middle col-12 col-sm-3">Downloads</a>
        </div>
    </nav>



    <div class="w-100 row p-0 m-0 pt-4 pb-4">
        <div class="w-100 row p-0 m-0" id="apresentacao">

            <h1 class="f-title azulClaro text-center w-100 col-50">Apresentação</h1>

        </div>
        <div class="col-md-6">
            <p class="text-justify p-3">
                A Empregô procura otimizar a busca e oferta de empregos na cidade de Quixadá. Promovendo conectividade e
                comunicatividade, dando a oportunidade aos nossos usuários de tornar mais rápido e eficiente o processo
                de contratação. A plataforma permite que você
                cadastre currículos e cadastre vagas. Além de combinar dados entre empregador e o empregado.<br>
                Pensando nisso, a empregô, busca trazer em sua identidade visual, os principios da conectividade,
                comunicabilidade, e agilidade,
                propondo desenvolver a melhor maneira de responder às necessidades. Este manual de marca tem como
                objetivo apresentar os conceitos e normas de uso do logotipo em todas as suas variações e aplicações.
                Para garantir a melhor comunicação
                e coerência da marca, é essencial seguir as regras estabelecidas neste manual.
            </p>
        </div>
        <div class="col-sm-6 d-none d-sm-block h-auto my-auto text-center">
            <img class="w-100 align-middle" src="img/gif.gif" alt="">
        </div>
    </div>

    <div class="w-100 row p-0 m-0">
        <div class="w-100 row p-0 m-0 pt-4 pb-4" id="identidade">
            <h1 class="f-title azulClaro text-center w-100 col-50">Identidade Visual</h1>
            <div class="col text-center azulClaro f-text-bold">Logo e icone</div>
        </div>
        <div class="col-12 col-sm-6 text-center">
            <img class="w-75" src="./img/logohc.png">
            <p class="f-text-80">Logo Empregô</p>
            <img class="w-50" src="./img/logovc.png">
            <p class="f-text-80">Icone Empregô</p>
        </div>
        <div class="col-12 col-sm-6 text-center">
            <p class="text-justify p-3">
                O logotipo da marca busca representar conectividade e comunicabilidade, conceitos que a Empregô pretende
                transmitir para seus usuários. A marca faz uso da palavra “Empregô” com a sonoridade do “gô”
                transmitindouma ação sendo realizada.<br> As tipografias usadas para este projeto foram Qhytsdaky para
                títulos, e Manjari para textos. Foram escolhidas por serem sem serifa e arredondadas estando em harmonia
                com a tipografia criada para logo.
            </p>
        </div>
    </div>

    <div class="w-100 row p-0 m-0" id="variacoesicone">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100">Variações do Icone</h1>
        </div>
        <div class="col-4 text-center">
            <img class="w-50" src="./img/simbolomb3.png">
            <p class="f-text-80">Icone Empregô</p>
        </div>
        <div class="col-4 text-center">
            <img class="w-50" src="./img/simbolomb2.png">
            <p class="f-text-80">Icone Empregô</p>
        </div>
        <div class="col-4 text-center">
            <img class="w-50" src="./img/simbolomb.png">
            <p class="f-text-80">Icone Empregô</p>
        </div>

        <p class="text-justify p-3">
            O Símbolo da marca traz a expressão "GÔ" na parte central e as cores da paleta da marca ao fundo. O símbolo
            pode ser usado nessas três variações de cores, sempre seguindo as regras de uso. Ele foi pensando para
            representar a Empregô, remetendo ao "Go"
            do inglês, que significa "ir/vamos", chamando o receptor a dar um passo à frente na sua busca pelo que
            deseja.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="paleta">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100">Paleta de Cores</h1>
        </div>
        <div class="col-4 text-center bg-azulClaro">
            <p class="f-text branco p-3 m-0">
                R:39 G:147 B:255
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                C:72 M:40 Y:0 K:0
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                HEXA: #2793FF
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                PANTONE: 2727 C
            </p>
        </div>
        <div class="col-4 text-center bg-azulEscuro">
            <p class="f-text branco p-3 m-0">
                R:17 G:30 B:108
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                C:100 M:93 Y:32 K:17
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                HEXA: #111E6C
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                PANTONE: 2756 C
            </p>
        </div>
        <div class="col-4 text-center bg-roxo">
            <p class="f-text branco p-3 m-0">
                R:161 G:0 B:145
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                C:50 M:96 Y:0 K:0
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                HEXA: #A10091
            </p>
            <hr class="b-branco">
            <p class="f-text branco p-3 m-0">
                PANTONE: 2405 C
            </p>
        </div>
        <p class="text-justify p-3">
            O tanto a marca como a logotipo, e elementos visuais diversos devem ser aplicados sempre com o uso da paleta
            estabelecida neste manual. Os tons de azul e roxo empregô, foram pensados para serem cores que transmitam
            confiança e modernidade.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="harmonia">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100">Harmonia Acromática</h1>
        </div>
        <div class="col-6 text-center">
            <img class="w-50" src="./img/sci.png">
            <p class="f-text-80">Logo em tons de preto e branco</p>
        </div>
        <div class="col-6 text-center">
            <img class="w-50" src="./img/spb.png">
            <p class="f-text-80">Icone em tons de preto e branco</p>
        </div>

        <p class="text-justify p-3">
            O logotipo e ícone da marca aplicados em harmonia acromática devem ser reproduzidos apenas em preto sobre
            branco, ou branco sobre o preto, não sendo permitido o uso em escala de cinza.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="guia">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <!--  <div class="col-1 bg-azulClaro rounded-right"></div>-->
            <h1 class="f-title azulClaro text-center w-100 col-50">Guia de Utilização</h1>

        </div>
        <div class="col-12 text-center">
            <img src="./img/ap.png" class="w-75" alt="">
        </div>
        <p class="text-justify p-3">
            Para manter a integridade e a boa visibilidade do logotipo e do ícone em relação a elementos externos é
            necessário garantir um espaço mínimo.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="minimo">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100">Tamanho Mínimo</h1>
        </div>
        <div class="col-12 text-center">
            <img class="w-50" src="./img/tm.png">
            <p class="f-text-80">Logo e icone em seus tamanhos mínimos</p>
        </div>

        <p class="text-justify p-3">
            Para manter a integridade e a boa visibilidade do logotipo e do ícone em relação a elementos externos é
            necessário garantir um espaço mínimo é brigatório para sua utilização.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="uso">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100">Restrições de Uso</h1>
        </div>
        <div class="col-12 text-center">
            <img class="w-20" src="./img/ru1.png">
            <p class="f-text-80">Restrições de uso da marca</p>
        </div>

        <p class="text-justify p-3">
            A marca não deve ser distorcida, cortada ou ser utilizada em cores diferentes das indicadas nesse manual. A
            marca pode ser ampliada somente utilizando sua proporção original disponibilizada no manual. Os exemplos a
            seguir demonstram utilizações incorretas
            da marca.
        </p>
    </div>

    <div class="w-100 row p-0 m-0" id="aplicacoes">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100"> Aplicações da Marca e Ícone </h1>
        </div>
        <div class="col-12 text-center">
            <img class="w-20" src="./img/aplic.png">
        </div>

    </div>

    <div class="w-100 row p-0 m-0" id="aplicacoes">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <h1 class="f-title azulClaro text-center w-100"> Vídeos sobre a empresa </h1>
        </div>
        <div class="col-12 text-center row">
            <video src="./vid/1.mp4" class="col-4" controls></video>
            <video src="./vid/2.mp4" class="col-4" controls></video>
            <video src="./vid/3.mp4" class="col-4" controls></video>

        </div>

    </div>

    <div class="w-100 row p-0 m-0" id="download">
        <div class="w-100 row p-0 m-0 pt-4 pb-4">
            <!--div class="col-1 bg-azulClaro rounded-right"></div-->
            <h1 class="f-title azulClaro text-center w-100 col-50">Downloads</h1>
            <!--div class="col-1 bg-azulClaro rounded-left"></div-->
        </div>
        <div class="w-100 row p-0 m-0 col-3">
            <p class="azulClaro text-center w-100 f-text-bold">Colorido</p>
            <div class="col-6 text-left">
                Logo<br>
                <a href="./files/logoai.ai" download>
                    Arquivo Illustrator
                </a><br>
                <a href="./files/logopdf.pdf" download>
                    Arquivo PDF
                </a><br>
                <a href="./files/logosvg.svg" download>
                    Arquivo SVG
                </a>
            </div>
            <div class="col-6 text-left">
                Icone<br>
                <a href="./files/iconai.ai" download>
                    Arquivo Illustrator
                </a><br>
                <a href="./files/iconpdf.pdf" download>
                    Arquivo PDF
                </a><br>
                <a href="./files/iconsvg.svg" download>
                    Arquivo SVG
                </a>
            </div>
        </div>
        <div class="w-100 row p-0 m-0 col-3">
            <p class="azulClaro text-center w-100 f-text-bold">Preto e branco</p>
            <div class="col-6 text-left">
                Logo<br>
                <a href="./files/logoaipb.ai" download>
                    Arquivo Illustrator
                </a><br>
                <a href="./files/logopdfpb.pdf" download>
                    Arquivo PDF
                </a><br>
                <a href="./files/logosvgpb.svg" download>
                    Arquivo SVG
                </a>
            </div>
            <div class="col-6 text-left">
                Icone<br>
                <a href="./files/iconaipb.ai" download>
                    Arquivo Illustrator
                </a><br>
                <a href="./files/iconpdfpb.pdf" download>
                    Arquivo PDF
                </a><br>
                <a href="./files/iconsvgpb.svg" download>
                    Arquivo SVG
                </a>
            </div>
        </div>

        <div class="w-100 row p-0 m-0 col-3 text-left">
            <p class="azulClaro w-100 f-text-bold text-center">Manual de Marca</p>
            <div class="col-12 text-left">
                <a href="./files/manualdemarca.pdf" download>
                    Arquivo PDF
                </a><br>
                <a href="https://issuu.com/gmodeveloper/docs/manual_da_marca" target="_blank">
                    Arquivo Online
                </a>
            </div>
        </div>

        <div class="w-100 row p-0 m-0 mb-5 col-3 text-left">
            <p class="azulClaro w-100 f-text-bold text-center"> Identiade Sonora</p>
            <div class="col-12 text-left">
                <a href="./files/jingle.wav" download>
                    Jingle WAV
                </a><br>
                <a href="./files/musica.wav" target="_blank">
                    Fundo musical
                </a>
            </div>
        </div>

<?php
include "../footer.php";
?>