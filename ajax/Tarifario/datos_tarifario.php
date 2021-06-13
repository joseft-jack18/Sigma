<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $tarifario = array();

    $sql = "SELECT * FROM mae_tarifario WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)) {
        $tarifario['id'] = $row['id'];
        $tarifario['zona'] = $row['zona'];
        $tarifario['precio'] = $row['precio'];
        $tarifario['fec_creacion'] = date("Y-m-d", strtotime($row['fec_creacion']));
        if($row['estado'] == 'A'){ $tarifario['estado'] = 'ACTIVO'; } else { $tarifario['estado'] = 'INACTIVO'; }        
    }

    header('Content-Type: application/json');
    echo json_encode($tarifario);

?>