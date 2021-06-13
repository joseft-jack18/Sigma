$(document).ready(function(){
    load(1);
});

function load(page){     
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'./ajax/Tarifario/tarifario_action.php?action=ajax&page='+page,
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
    $('#id_tarifario').val('0');
    $('#zona').val('');
    $('#precio').val('');
    $('#estado').val('Activo');
}

function guardar_tarifario(){
    var id_tarifario = $('#id_tarifario').val();
    var tipo_entrada = $('#tipo_entrada').val();
    var zona = $('#zona').val();
    var precio = $('#precio').val();

    var parametros = {
        id_tarifario: id_tarifario,
        tipo_entrada: tipo_entrada,
        zona: zona,
        precio: precio
    };

    $.ajax({
        url: './ajax/Tarifario/guardar_tarifario.php',
        type: 'POST',
        data: parametros,
        success: function(resp){
            toastr.success(resp);
            $('#modal_tarifario').modal('hide');
            load(1);
        }
    });
}

function editar_registro(id){
    $.ajax({
        url: './ajax/Tarifario/datos_tarifario.php',
        type: 'POST',
        data: { id: id },
        success: function(tarifario){
            $('#id_tarifario').val(tarifario.id);
            $('#tipo_entrada').val('editar');
            $('#fec_creacion').val(tarifario.fec_creacion);
            $('#zona').val(tarifario.zona);
            $('#precio').val(tarifario.precio);
            $('#estado').val(tarifario.estado);
        }
    });
}

function editar_estado(id,estado){
    $.ajax({
        url: './ajax/Tarifario/editar_estado.php',
        type: 'POST',
        data: { id: id, estado: estado },
        success: function(resp){
            toastr.success(resp);
            load(1);
        }
    });
}