<?php

    require_once "../../config/conexion.php";

    $id_tarifario = $_POST['id_tarifario'];
    $tipo_entrada = $_POST['tipo_entrada'];
    $zona = $_POST['zona'];
    $precio = $_POST['precio'];
    $fec_creacion = date('Y-m-d H:i:s');

    if($tipo_entrada == 'editar'){
        $sql = "UPDATE mae_tarifario SET zona = '$zona', precio = $precio
                WHERE id = $id_tarifario";
    } else {
        $sql = "INSERT INTO mae_tarifario(zona,precio,fec_creacion,estado)
                VALUES('$zona',$precio,'$fec_creacion','A')";
    }
    
    $res = mysqli_query($conn, $sql);
    $mensaje = "Datos guardados correctamente!";

    echo $mensaje;

?>