<?php

    require_once "../../config/conexion.php";

    $id = $_POST['id'];
    $estado = $_POST['estado'];

    if($estado == 'A') {
        $sql = "UPDATE mae_usuario SET estado = 'I' WHERE id = $id";
        $mensaje = "El usuario ha sido Inhabilitado";
    } else {
        $sql = "UPDATE mae_usuario SET estado = 'A' WHERE id = $id";
        $mensaje = "El usuario ha sido Habilitado";
    }
    
    $res = mysqli_query($conn, $sql);
    echo $mensaje;

?>