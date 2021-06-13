$(document).ready(function(){
    load(1);
});

function load(page){     
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'./ajax/Servicios/servicio_action.php?action=ajax&page='+page,
        beforeSend: function(objeto){
            $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $('#loader').html('');
        }
    })
}

function nuevo_registro(){
    limpiar_registro();  
    $('#tipo_entrada').val('nuevo');  
}

function limpiar_registro(){
    $('#cod_servicio').val('0');
    $('#des_servicio').val('');
    $('#estado').val('Activo');
}

function guardar_servicio(){
    var cod_servicio = $('#cod_servicio').val();
    var des_servicio = $('#des_servicio').val();
    var tipo_entrada = $('#tipo_entrada').val();

    var parametros = {
        cod_servicio: cod_servicio,
        des_servicio: des_servicio,
        tipo_entrada: tipo_entrada
    };

    $.ajax({
        url: './ajax/Servicios/guardar_servicio.php',
        type: 'POST',
        data: parametros,
        success: function(resp){
            toastr.success(resp);
            $('#modal_servicio').modal('hide');
            load(1);
        }
    });
}

function editar_registro(id){
    $.ajax({
        url: './ajax/Servicios/datos_servicio.php',
        type: 'POST',
        data: { id: id },
        success: function(servicio){
            $('#cod_servicio').val(servicio.cod_servicio);
            $('#tipo_entrada').val('editar');
            $('#fec_creacion').val(servicio.fec_creacion);
            $('#des_servicio').val(servicio.des_servicio);
            $('#estado').val(servicio.estado);
        }
    });
}

function editar_estado_s(id,estado){
    $.ajax({
        url: './ajax/Servicios/editar_estado.php',
        type: 'POST',
        data: { id: id, estado: estado },
        success: function(resp){
            toastr.success(resp);
            load(1);
        }
    });
}










function editar_estado(id,estado){
    $.ajax({
        url: './ajax/Usuarios/editar_estado.php',
        type: 'POST',
        data: { id: id, estado: estado },
        success: function(resp){
            toastr.success(resp);
            load(1);
        }
    });
}

