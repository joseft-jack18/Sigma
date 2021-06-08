<?php

    session_start();
    require_once "../../config/conexion.php";

    $action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

    if($action == 'ajax'){
        $sql = "SELECT * FROM mae_usuario";
        $query = mysqli_query($conn, $sql);

?>
    

            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombres</th>
                        <th class="text-center">Usuario</th>
                        <th class="text-center">Tipo</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Acciones</th>                                  
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)){

                        $id = $row['id'];
                        $nombres = $row['ape_paterno']." ".$row['ape_materno']." ".$row['nombres'];
                        $cod_usuario = $row['ape_paterno'];
                        $tipo = $row['tipo'];
                        $estado = $row['estado'];

                    ?>                                         
                                    
                    <tr>
                        <td class="text-center"><?php echo $id; ?></td>
                        <td><?php echo utf8_encode($nombres); ?></td>
                        <td><?php echo utf8_encode($cod_usuario); ?></td>
                        <td class="text-center"><?php echo utf8_encode($tipo); ?></td>
                        <td class="text-center"><?php if($estado == 'A'){ echo "ACTIVO"; } else { echo "INACTIVO"; } ?></td>
                        <td class="text-center"> 
                            <a href="#">
                                <button type="button" class="btn waves-effect waves-light btn-info  mb-1">
                                    <i class="fas fa-edit"></i> 
                                </button>
                            </a>                                       
                            <a href="#">
                                <button type="button" class="btn waves-effect waves-light btn-success  mb-1">
                                    <i class="fas fa-check"></i>
                                </button>
                            </a>  
                            <a href="#">
                                <button type="button" class="btn waves-effect waves-light btn-danger  mb-1">
                                    <i class="fas fa-ban"></i> 
                                </button>
                            </a>               
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
