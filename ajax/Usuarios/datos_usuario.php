<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $usuario = array();

    $sql = "SELECT * FROM mae_usuario WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($res)) {
        $usuario['id'] = $row['id'];
        $usuario['nombres'] = $row['nombres'];
        $usuario['ape_paterno'] = $row['ape_paterno'];
        $usuario['ape_materno'] = $row['ape_materno'];
        $usuario['usuario'] = $row['usuario'];
        $usuario['clave'] = $row['clave'];
        $usuario['tipo'] = $row['tipo'];
        if($row['estado'] == 'A'){ $usuario['estado'] = 'ACTIVO'; } else { $usuario['estado'] = 'INACTIVO'; }
        $usuario['fec_creacion'] = date("Y-m-d", strtotime($row['fec_creacion']));
    }

    header('Content-Type: application/json');
    echo json_encode($usuario);

?>