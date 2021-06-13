<?php

    session_start();
    require_once "../../config/conexion.php";

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax'){
        $sql = "SELECT * FROM mae_servicio ORDER BY des_servicio";
        $query = mysqli_query($conn, $sql);

        $i = 1;

?>
    

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Servicio</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Acciones</th>                                  
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)){

                        $cod_servicio = $row['cod_servicio'];
                        $des_servicio = $row['des_servicio'];
                        $estado = $row['estado'];

                    ?>                                         
                                    
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td><?php echo utf8_encode($des_servicio); ?></td>
                        <td class="text-center"><?php if($estado == 'A'){ echo "ACTIVO"; } else { echo "INACTIVO"; } ?></td>
                        <td class="text-center">
                            <button type="button" class="btn waves-effect waves-light btn-info btn-sm  mb-1" onclick="editar_registro(<?php echo $cod_servicio; ?>)" data-toggle="modal" data-target="#modal_servicio">
                                <i class="fas fa-edit"></i> 
                            </button>      
                            <?php if($estado == 'I') { ?> 
                            <button type="button" class="btn waves-effect waves-light btn-success btn-sm  mb-1" onclick="editar_estado_s(<?php echo $cod_servicio; ?>,'I')">
                                <i class="fas fa-check"></i>
                            </button>
                            <?php } else {?> 
                            <button type="button" class="btn waves-effect waves-light btn-danger btn-sm  mb-1" onclick="editar_estado_s(<?php echo $cod_servicio; ?>,'A')">
                                <i class="fas fa-ban"></i> 
                            </button>
                            <?php } ?>              
                        </td>                                            
                    </tr>

                    <?php $i++; } ?>
                </tbody>
            </table>

<?php } ?> 

<!-- DataTables CSS -->
<link href="assets/datatables/jquery.dataTables.min.css" rel="stylesheet">
<!-- DataTables JS -->
<script src="assets/datatables/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "info": true,
        "lengthChange": false,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
} );
</script>
