<!-- Modal -->
<div class="modal fade" id="modal_tarifario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Registro de Tarifas por Zona</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="id_usuario">Id Usuario</label>
                        <input type="text" class="form-control" id="id_tarifario" readonly>
                        <input type="hidden" class="form-control" id="tipo_entrada">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fec_creacion">Fecha Creacion</label>
                        <input type="date" class="form-control" id="fec_creacion" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="ape_paterno">Zona</label>
                        <input type="text" class="form-control" id="zona" style="text-transform:uppercase;" placeholder="Nueva Zona">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ape_materno">Precio (S/.)</label>
                        <input type="text" class="form-control" id="precio" placeholder="0.00">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fec_creacion">Estado</label>
                        <input type="text" class="form-control" id="estado" placeholder="Estado" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-info" onclick="guardar_tarifario()"><i class="far fa-save"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>