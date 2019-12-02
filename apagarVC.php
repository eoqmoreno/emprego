<?php

include './conn.php';

$id = $_GET['id'];

$row = $conn->query("DELETE FROM cadastro WHERE idv = '$id'");

if ($row == true) {
    setcookie("action", "deletado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naodeletado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}


?>