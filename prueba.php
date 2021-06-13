<?php require_once "parte_superior.php"; ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <br>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">                                
                                <form action="prueba2.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h3 class="m-1">Lista de Tareas</h3>
                                        </div>
                                    
                                        <div class="col-sm-7">
                                            <input type="file" class="form-control-file m-2" id="txt_file" name="txt_file">
                                        </div>

                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-outline-info btn-block btn-flat">
                                                <i class="fas fa-plus"></i> Cargar Datos
                                            </button>
                                        </div>                                    
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">

                                <div id="resultados"></div>
			                    <div class='outer_div'></div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php require_once "parte_inferior.php"; ?>
<script src="js/datos_cargados.js"></script>