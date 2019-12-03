<?php

$email = $_COOKIE['email'];

include './conn.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
}
$categoria = $_POST['categoria'];
$salario = $_POST['salario'];
$turno = $_POST['turno'];
$dias = implode(",", $_POST['dia']);
$habilidades = $_POST['habilidades'];
$criador = "";

$row = $conn->query("SELECT * FROM empresa WHERE email = '" . $_COOKIE['email'] . "'");
while ($result = $row->fetch_assoc()) {
    $criador = $result['id'];
}


if (!isset($id)) {
    if (!empty($_FILES['foto'])) {
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];
        $row = $conn->query("INSERT INTO vagas (categoria, salario, turno, dias, habilidades,foto, criador) VALUES ('$categoria', '$salario', '$turno', '$dias','$habilidades','$destino', '$criador')");
        $row1 = $conn->query("SELECT * FROM categorias WHERE nome = '" . $categoria . "'");
        while ($result = $row1->fetch_assoc()) {
            $id = $result['id'];
            $qtd = ($result['quantidade']) + 1;
            $conn->query("UPDATE categorias SET quantidade = '$qtd' WHERE id='" . $id . "' ");
        }
        move_uploaded_file($foto, $destino);
    } else {
        $row = $conn->query("INSERT INTO vagas (categoria, salario, turno, dias, habilidades, criador) VALUES ('$categoria', '$salario', '$turno', '$dias','$habilidades', '$criador')");
        $row1 = $conn->query("SELECT * FROM categorias WHERE nome = '" . $categoria . "'");
        while ($result = $row1->fetch_assoc()) {
            $id = $result['id'];
            $qtd = ($result['quantidade']) + 1;
            $conn->query("UPDATE categorias SET quantidade = '$qtd' WHERE id='" . $id . "' ");
        }
    }
} else {
    if (!empty($_FILES['foto'])) {
        $foto = $_FILES['foto']['tmp_name'];
        $destino = './img/users/' . $_FILES['foto']['name'];
        $row = $conn->query("UPDATE vagas SET categoria='$categoria', salario='$salario',turno='$turno',dias='$dias',habilidades='$habilidades',foto='$destino' WHERE id='" . $id . "' ");
        move_uploaded_file($foto, $destino);
    } else {
        $row = $conn->query("UPDATE vagas SET categoria='$categoria', salario='$salario',turno='$turno',dias='$dias',habilidades='$habilidades' WHERE id='" . $id . "' ");
    }
}

if ($row == true) {
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}
