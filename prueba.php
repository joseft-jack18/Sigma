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
                                    <div class="col-sm-3">
                                        <h3 class="m-1">PDF</h3>
                                    </div>

                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label for="txt_file">Example file input</label>
                                            <input type="file" class="form-control-file" id="txt_file">
                                        </div>
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
<script>
    function cargar_pdf(){
        var file = $('#txt_file').val();
        $.ajax({
            url: 'prueba2.php',
            type: 'POST',
            data: { file: file },
            success: function(resp){
                alert(resp);
            }
        });
    }
</script>