<?php require_once "parte_superior.php"; ?>
<?php include("modal/modal_tarifario.php"); ?>


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
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3 class="m-1">Gestión de Tarifario</h3>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-outline-info btn-block btn-flat" onclick="nuevo_registro()" data-toggle="modal" data-target="#modal_tarifario">
                                            <i class="fas fa-plus"></i> Nueva Tarifa
                                        </button>
                                    </div>
                                </div>
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
<script src="js/tarifario.js"></script>