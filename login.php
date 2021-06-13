<?php

    session_start();
    date_default_timezone_set('America/Lima'); 
    
    if(!empty($_SESSION['user_login_status'])){
        header ('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Liquidacion | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Boostrap -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>

<body class="container-login">
    <div class="wrap-login">
        <div class="login-logo">
            <a href="index2.html"><b>Sistema</b>Liquidaciones</a>
        </div>
  
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Regístrese para iniciar su sesión</p>                

                <form class="login-form validate-form" action="ajax/login_action.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="txt_usuario" name="txt_usuario" placeholder="Usuario">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                                <span class="focus-efecto"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="txt_clave" name="txt_clave" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                <span class="focus-efecto"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recuérdame
                                </label>
                            </div>
                        </div>
                        <br><br>
                        <!-- /.col -->
                        <div class="wrap-login-form-btn">
                            <button type="submit" class="btn btn-danger btn-block"><i class="far fa-arrow-alt-circle-right"></i> <b>Ingresar</b></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>      
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery/jquery-3.3.1.min.js"></script>    
    <script src="dist/js/bootstrap.min.js"></script>    
    <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Toastr -->
    <script src="plugins/toastr/toastr.min.js"></script>
    <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
            echo "<script>toastr.error('Error de Sesión! Usuario Incorrecto')</script>";
        }
        if(isset($_GET["falloc"]) && $_GET["falloc"] == 'true') {
            echo "<script>toastr.error('Error de Sesión! Contraseña Incorrecta')</script>";
        } 
        if(isset($_GET["falloe"]) && $_GET["falloe"] == 'true') {
            echo "<script>toastr.warning('Usuario inhabilitado! Póngase en contacto con el Administrador')</script>";
        } 
    ?>
</body>
</html>
