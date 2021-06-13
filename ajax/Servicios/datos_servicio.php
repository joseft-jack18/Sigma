<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $servicio = array();

    $sql = "SELECT * FROM mae_servicio WHERE cod_servicio = $id";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)) {
        $servicio['cod_servicio'] = $row['cod_servicio'];
        $servicio['des_servicio'] = $row['des_servicio'];
        $servicio['fec_creacion'] = date("Y-m-d", strtotime($row['fec_creacion']));
        if($row['estado'] == 'A'){ $servicio['estado'] = 'ACTIVO'; } else { $servicio['estado'] = 'INACTIVO'; }        
    }

    header('Content-Type: application/json');
    echo json_encode($servicio);

?>