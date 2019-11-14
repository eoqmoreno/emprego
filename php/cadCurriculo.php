<?php

include './conn.php';

$nome = $_POST ['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$row = $conn->query("INSERT INTO curriculo(nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone','$senha')");

if ($row === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $row . "<br>" . $conn->error;
}

?>