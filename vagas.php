<?php

include './conn.php';

$resultado = array();

$row = $conn->query("SELECT * FROM vagas");
while ($result = $row->fetch_assoc()) {
    $r = $conn->query("SELECT * FROM empresa WHERE id = '".$result['criador']."'");
    $local = "";
    while ($res = $r->fetch_assoc()) {
        $local= $res['endereco'];
    }

    $ar = explode(",",$result['dias']);
    $total = (count($ar)) - 1;
    $dias = $ar[0] . " a " . $ar[$total];

    array_push($resultado,[ $result['id'], $result['foto'],$result['categoria'],$local, $dias]);
}

// echo var_dump($resultado);

die( json_encode($resultado));

?>