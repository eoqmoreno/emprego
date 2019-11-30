<?php
if (isset($_COOKIE['action'])) {
  $status = $_COOKIE['action'];
  setcookie("action", '', time() + 3600 * 24 * 30, '/');
}
require './conn.php';
include './modais.php';
include './navbar.php';
include './home.php';
include './footer.php';

if (isset($status)) {
  switch ($status) {
    case 'logado':
      echo
        "<script>
          Swal.fire({
          icon: 'success',
          title: 'Ihuu...',
          text: 'Você está dentro!'
          });
        </script>";
      break;

    case 'errologin':
      echo
        "<script>
            Swal.fire({
            icon: 'error',
            title: 'Vish...',
            text: 'Houve algum problema para entrar, confira seus dados e tente novamente'
            });
          </script>";
      break;

    case 'naocadastrado':
      echo
        "<script>
            Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Houve algum problema no seu cadastro'
            });
          </script>";
      break;

    case 'cadastrado':
      echo "<script>
          Swal.fire({
          icon: 'success',
          title: 'Ihuu...',
          text: 'Cadastro concluido com sucesso!'
          });
        </script>";
      break;


    default:
      # code...
      break;
  }
}
