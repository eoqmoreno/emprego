<?php

include './conn.php';

$resultado = array();

$row = $conn->query("SELECT * FROM vagas");
while ($result = $row->fetch_assoc()) {
    array_push($resultado, [$result['categoria'],$result['local'], $result['horas'],$result['foto']]);
}

// echo var_dump($resultado);

die( json_encode($resultado));

?>