<?php

include './conn.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

function loginCurriculo($conn, $email, $senha){
    $row = $conn->query("SELECT * FROM curriculo");
    while ($result = $row->fetch_assoc()) {
        if ($result['email'] == $email and $result['senha'] == $senha) {
            return true;
        }
    }
}

function loginEmpresa($conn, $email, $senha){
    $row = $conn->query("SELECT * FROM empresa");
    while ($result = $row->fetch_assoc()) {
        if ($result['email'] == $email and $result['senha'] == $senha) {
            return true;
        }
    }
}

if(loginCurriculo($conn, $email, $senha)) {
    setcookie("action", "logado", time() + 3600 * 24 * 30, '/');
    setcookie("email", $email, time() + 3600 * 24 * 30, '/');
    setcookie("tipo", "curriculo", time() + 3600 * 24 * 30, '/');
    header('Location: ./index.php');
} else {
    if(loginEmpresa($conn, $email, $senha)) {
        setcookie("action", "logado", time() + 3600 * 24 * 30, '/');
        setcookie("email", $email, time() + 3600 * 24 * 30, '/');
        setcookie("tipo", "empresa", time() + 3600 * 24 * 30, '/');
        header('Location: ./index.php');
    }else{
        setcookie("action", "errologin", time() + 3600 * 24 * 30, '/');
        header('Location: ./index.php');
    }
}