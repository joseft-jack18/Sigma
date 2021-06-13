<!-- Modal -->
<div class="modal fade" id="modal_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Registro de Usuario</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="id_usuario">Id Usuario</label>
                        <input type="text" class="form-control" id="id_usuario" readonly>
                        <input type="hidden" class="form-control" id="tipo_entrada">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fec_creacion">Fecha Creacion</label>
                        <input type="date" class="form-control" id="fec_creacion" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ape_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="ape_paterno" style="text-transform:uppercase;" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ape_materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="ape_materno" style="text-transform:uppercase;" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" style="text-transform:uppercase;" placeholder="Nombres">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" style="text-transform:uppercase;" placeholder="Usuario">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" placeholder="Contraseña">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="tipo_usuario">Tipo Usuario</label>
                        <select id="tipo_usuario" class="form-control">
                            <option value="Administrador">Administrador</option>
                            <option value="Tecnico">Técnico</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fec_creacion">Estado</label>
                        <input type="text" class="form-control" id="estado" placeholder="Estado" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-info" onclick="guardar_usuario()"><i class="far fa-save"></i> Guardar</button>
            </div>
        </div>
    </div>
</div>