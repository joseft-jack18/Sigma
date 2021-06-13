<?php

    require_once "../../config/conexion.php";

    $cod_servicio = $_POST['cod_servicio'];
    $des_servicio = $_POST['des_servicio'];
    $tipo_entrada = $_POST['tipo_entrada'];
    $fec_creacion = date('Y-m-d H:i:s');

    if($tipo_entrada == 'editar'){
        $sql = "UPDATE mae_servicio SET des_servicio = '$des_servicio'
                WHERE cod_servicio = $cod_servicio";
    } else {
        $sql = "INSERT INTO mae_servicio(des_servicio,fec_creacion,estado)
                VALUES('$des_servicio','$fec_creacion','A')";
    }
    
    $res = mysqli_query($conn, $sql);
    $mensaje = "Datos guardados correctamente!";

    echo $mensaje;

?>