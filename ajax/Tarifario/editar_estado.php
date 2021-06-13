<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $estado = $_POST['estado'];

    if($estado == 'A') {
        $sql = "UPDATE mae_tarifario SET estado = 'I' WHERE id = $id";
        $mensaje = "La tarifa ha sido Inhabilitada";
    } else {
        $sql = "UPDATE mae_tarifario SET estado = 'A' WHERE id = $id";
        $mensaje = "La tarifa ha sido Habilitada";
    }
    
    $res = mysqli_query($conn, $sql);
    echo $mensaje;

?>