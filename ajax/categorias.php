<?php

include '../conn.php';

$resultado = array();

$row = $conn->query("SELECT * FROM categorias WHERE quantidade > 0 ORDER BY quantidade");
while ($result = $row->fetch_assoc()) {
    array_push($resultado, $result['nome']);
}

die( json_encode($resultado));

?>