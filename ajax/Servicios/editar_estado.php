<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $estado = $_POST['estado'];

    if($estado == 'A') {
        $sql = "UPDATE mae_servicio SET estado = 'I' WHERE cod_servicio = $id";
        $mensaje = "El servicio ha sido Inhabilitado";
    } else {
        $sql = "UPDATE mae_servicio SET estado = 'A' WHERE cod_servicio = $id";
        $mensaje = "El servicio ha sido Habilitado";
    }
    
    $res = mysqli_query($conn, $sql);
    echo $mensaje;

?>