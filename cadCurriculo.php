<?php

include './conn.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

echo $_FILES['foto']['name'];

if (!isset($_POST['data'])) {
    $senha = $_POST['senha'];
    $row = $conn->query("INSERT INTO curriculo(nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone','$senha')");
} else {
    $data = $_POST['data'];
    $profissao = $_POST['profissao'];
    $escolaridade = $_POST['escolaridade'];
    $experiencia = $_POST['experiencia'];
    $curso = $_POST['curso'];
    $habilidades = $_POST['habilidades'];
    if(!empty($_FILES['foto'])){
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];

        move_uploaded_file( $foto, $destino);
        $row = $conn->query("UPDATE curriculo SET nome='$nome', email='$email',telefone='$telefone',dataDeNascimento='$data',profissao='$profissao',escolaridade='$escolaridade',experiencia='$experiencia',curso='$curso',habilidades='$habilidades',foto='$destino' WHERE email='".$_COOKIE['email']."' ");
    }else{
        $row = $conn->query("UPDATE curriculo SET nome='$nome', email='$email',telefone='$telefone',dataDeNascimento='$data',profissao='$profissao',escolaridade='$escolaridade',experiencia='$experiencia',curso='$curso',habilidades='$habilidades' WHERE email='".$_COOKIE['email']."' ");
    }
}

if ($row === TRUE) {
    setcookie("email", $email, time() + 3600 * 24 * 30, '/');
    setcookie("tipo", "curriculo", time() + 3600 * 24 * 30, '/');
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}
