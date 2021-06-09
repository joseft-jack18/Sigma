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
                                <div class="row">
                                    <div class="col-sm-10">
                                        <h3 class="m-1">PDF</h3>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-outline-info btn-block btn-flat" onclick="cargar_pdf()">
                                            <i class="fas fa-plus"></i> Generar PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


<?php require_once "parte_inferior.php"; ?>
<script src="js/VentanaCentrada.js"></script>
<script>
    function cargar_pdf(){
        VentanaCentrada('./pdf/documentos/ver_formato.php','Formato','','1024','768','true');
    }
</script>