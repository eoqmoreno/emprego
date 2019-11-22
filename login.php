<?php

include './conn.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$row = $conn->query("SELECT * FROM curriculo");
while ($result = $row->fetch_assoc()) {
    if ($result['email'] == $email and $result['senha'] == $senha) {
        setcookie("id", $result['id'], time() + 3600 * 24 * 30, '/');
        setcookie("action", "logado", time() + 3600 * 24 * 30, '/');
        header('Location: ./');
    } else {
        setcookie("action", "errologin", time() + 3600 * 24 * 30, '/');
        header('Location: ./');
    }
}
