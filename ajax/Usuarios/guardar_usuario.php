<?php

    require_once "../../config/conexion.php";

    $id_usuario = $_POST['id_usuario'];
    $tipo_entrada = $_POST['tipo_entrada'];
    $ape_paterno = $_POST['ape_paterno'];
    $ape_materno = $_POST['ape_materno'];
    $nombres = $_POST['nombres'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $fec_creacion = date('Y-m-d H:i:s');

    if($tipo_entrada == 'editar'){
        $sql = "UPDATE mae_usuario SET ape_paterno = '$ape_paterno', ape_materno = '$ape_materno', 
                nombres = '$nombres', usuario = '$usuario', clave = '$contraseña', tipo = '$tipo_usuario' 
                WHERE id = $id_usuario";
    } else {
        $sql = "INSERT INTO mae_usuario(nombres,ape_paterno,ape_materno,usuario,clave,tipo,estado,fec_creacion)
                VALUES('$nombres','$ape_paterno','$ape_materno','$usuario','$contraseña','$tipo_usuario',
                'A','$fec_creacion')";
    }
    
    $res = mysqli_query($conn, $sql);
    $mensaje = "Datos guardados correctamente!";

    echo $mensaje;

?>