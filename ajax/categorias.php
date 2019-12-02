<?php

include '../conn.php';

$resultado = array();

$row = $conn->query("SELECT * FROM categorias ORDER BY quantidade");
while ($result = $row->fetch_assoc()) {
    array_push($resultado, $result['nome']);
}

die( json_encode($resultado));

?>