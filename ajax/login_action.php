<?php

    session_start();
    require_once "../config/conexion.php";


    $usuario = $_POST['txt_usuario'];
    $clave = $_POST['txt_clave'];


    $query = "SELECT nombres,ape_paterno,ape_materno,usuario,clave,tipo,estado 
              FROM mae_usuario WHERE usuario='$usuario'";
    $resp = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($resp);

    $row_usuario = $row['usuario'];
    $row_clave = $row['clave'];
    $row_nombres = $row['nombres']." ".$row['ape_paterno']." ".$row['ape_materno'];
    $row_tipo = $row['tipo'];
    $row_estado = $row['estado'];

    if($row_usuario == $usuario){
        if($row_clave == $clave){
            if($row_estado == 'A'){
                $_SESSION['nom_usuario'] = $row_nombres;
                $_SESSION['tip_usuario'] = $row_tipo;
                $_SESSION['user_login_status'] = 1;

                header ('Location: ../index.php');
            } else {
                header ('Location: ../login.php?falloe=true');
            }
        } else {
            header ('Location: ../login.php?falloc=true');
        }
    } else {
        header ('Location: ../login.php?fallo=true');
    }

?>