<?php
require './conn.php';
include './modais.php';
include './navbar.php';

if($_COOKIE['tipo'] == "curriculo"){
    include './perfilC.php';
}else{
    include './perfilE.php';
}
include './footer.php';
?>