<?php

include './conn.php';

$id = $_GET['id'];

$row1 = $conn->query("SELECT * FROM vagas WHERE id = '" . $id . "'");
while ($result = $row1->fetch_assoc()) {
    $categoria = $result['categoria'];
    $row1 = $conn->query("SELECT * FROM categorias WHERE nome = '" . $categoria . "'");
        while($result = $row1 -> fetch_assoc()){
            $qtd = ($result['quantidade']) - 1;
            $id = $result['id'];
            $conn->query("UPDATE categorias SET quantidade = '$qtd' WHERE id='" . $id . "' ");
        }
}
$id = $_GET['id'];

$row = $conn->query("DELETE FROM vagas WHERE id = '$id'");

if ($row == true) {
    setcookie("action", "deletado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
} else {
    setcookie("action", "naodeletado", time() + 3600 * 24 * 30, '/');
    header('Location: ./');
}
