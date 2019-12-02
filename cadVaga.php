<?php

$email = $_COOKIE['email'];

include './conn.php';

$id = $_POST['id'];
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
        move_uploaded_file($foto, $destino);
    } else {
        $row = $conn->query("INSERT INTO vagas (categoria, salario, turno, dias, habilidades, criador) VALUES ('$categoria', '$salario', '$turno', '$dias','$habilidades', '$criador')");
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
