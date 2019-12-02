<?php

include './conn.php';

$id = $_GET['id'];

$row = $conn->query("UPDATE cadastro SET coracao = true WHERE id = '$id'");

if ($row == true) {
    setcookie("action", "cadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naocadastrado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}


?>