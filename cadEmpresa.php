<?php

include './conn.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$area = $_POST['area'];

if (!isset($_POST['cnpj'])) {
    $senha = $_POST['senha'];
    $row = $conn->query("INSERT INTO empresa (nome, email, telefone, area, senha) VALUES ('$nome', '$email', '$telefone', '$area','$senha')");
} else {
    $endereco = $_POST['endereco'];
    $cnpj = $_POST['cnpj'];
    $sobreE = $_POST['sobreE'];
    $sobreS = $_POST['sobreS'];-
    $sobreF = $_POST['sobreF'];
    if(!empty($_FILES['foto'])){
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];
        $row = $conn->query("UPDATE empresa SET nome='$nome', email='$email',telefone='$telefone',foto='$destino',endereco='$endereco',cnpj='$cnpj',sobreE='$sobreE',sobreE='$sobreS',sobreE='$sobreF' WHERE email='".$_COOKIE['email']."' ");
        move_uploaded_file( $foto, $destino);
    }else{
        $row = $conn->query("UPDATE empresa SET nome='$nome', email='$email',telefone='$telefone',endereco='$endereco',cnpj='$cnpj',sobreE='$sobreE',sobreE='$sobreS',sobreE='$sobreF' WHERE email='".$_COOKIE['email']."' ");
    }
}

if ($row == true) {
    setcookie("email", $email, time() + 3600 * 24 * 30, '/');
    setcookie("tipo", "empresa", time() + 3600 * 24 * 30, '/');
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}
