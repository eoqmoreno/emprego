<?php
if(isset($_COOKIE['action'])){
    $status = $_COOKIE['action'];
    setcookie("action", '', time()+3600*24*30, '/');
}
require './conn.php';
include './modais.php';

if(isset($status)){
    switch ($status) {
        case 'logado':
            echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Você está dentro!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            break;

        case 'errologin':
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Erro no login!</strong> Verifique o email e/ou senha!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            break;

        case 'naocadastrado':
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            <strong>Erro no cadastro!</strong> Tente novamente!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            break;
        
        case 'cadastrado':
            echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>Cadastro concluído!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            break;
        

        default:
            # code...
            break;
    }
}

include './navbar.php';
include './home.php';
include './footer.php';


?>