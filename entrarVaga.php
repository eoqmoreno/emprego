<?php

$curriculo = $_COOKIE['email'];

include './conn.php';
$idc = "";
$row = $conn->query("SELECT * FROM curriculo WHERE email = '" . $_COOKIE['email'] . "'");
while ($result = $row->fetch_assoc()) {
    $idc = $result['id'];
}

$idv = $_POST['id'];
$objetivo = $_POST['objetivo'];

$ro = $conn->query("INSERT INTO cadastro (idc, idv, objetivo) VALUES ('$idc','$idv','$objetivo')");

if ($ro == true) {
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}
