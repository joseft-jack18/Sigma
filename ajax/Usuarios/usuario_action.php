<?php

    session_start();
    require_once "../../config/conexion.php";

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax'){
        $sql = "SELECT $Table FROM $InnerJoin WHERE $Where ORDER BY A.FEC_ATENCION DESC";
        $query = sqlsrv_query($conn, $sql);

?>
    

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">Fecha Cita</th>
                        <th class="text-center">DNI</th>
                        <th class="text-center">Paciente</th>
                        <th class="text-center">Médico</th>
                        <th class="text-center">Especialidad</th>
                        <th class="text-center">Acciones</th>                                  
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = sqlsrv_fetch_array($query)){
                        $cod_atencion = $row['COD_ATENCION'];
                        $fec_atencion = $row['FEC_ATENCION'];
                        $fec_atencion = $fec_atencion->format('d-m-Y');
                        $dni = $row['NUM_HC'];
                        $paciente = utf8_encode($row['APATERNO'].' '.$row['AMATERNO'].' '.$row['NOMBRE']);
                        $medico = utf8_encode($row['MEDICO']);
                        $especialidad = utf8_encode($row['DES_ESPECIALIDAD']);
                        $estado = $row['ESTADO_TRIAJE'];
                    ?>                                         
                                    
                    <tr>
                        <td class="text-center"><?php echo $fec_atencion; ?></td>
                        <td class="text-center"><?php echo $dni; ?></td>
                        <td><?php echo $paciente; ?></td>
                        <td><?php echo $medico; ?></td>
                        <td><?php echo $especialidad; ?></td>
                        <td class="text-center"> 
                            <?php if($estado == 1) { ?>
                            <a href="nuevo_triaje.php?cod_atencion=<?php echo $cod_atencion; ?>">
                                <button type="button" class="btn waves-effect waves-light btn-warning  mb-1">
                                    <i class="mdi mdi-pencil"></i> Editar
                                </button>
                            </a>
                            <?php } else {?>                                        
                            <a href="nuevo_triaje.php?cod_atencion=<?php echo $cod_atencion; ?>">
                                <button type="button" class="btn waves-effect waves-light btn-success  mb-1">
                                    <i class="fas fa-check"></i> Atender
                                </button>
                            </a>
                            <?php } ?>                
                        </td>                                            
                    </tr>

                    <?php } ?>
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
        "info": false,
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
