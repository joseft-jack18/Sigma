$(document).ready(function(){
    load(1);
});

function load(page){     
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'./ajax/Usuarios/usuario_action.php?action=ajax&page='+page,
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

function editar_registro(id){
    $.ajax({
        url: './ajax/Usuarios/datos_usuario.php',
        type: 'POST',
        data: { id: id },
        success: function(usuario){
            $('#id_usuario').val(usuario.id);
            $('#tipo_entrada').val('editar');
            $('#fec_creacion').val(usuario.fec_creacion);
            $('#ape_paterno').val(usuario.ape_paterno);
            $('#ape_materno').val(usuario.ape_materno);
            $('#nombres').val(usuario.nombres);
            $('#usuario').val(usuario.usuario);
            $('#contraseña').val(usuario.clave);
            $('#tipo_usuario').val(usuario.tipo);
            $('#estado').val(usuario.estado);
        }
    });
}

function limpiar_registro(){
    $('#id_usuario').val('0');
    $('#ape_paterno').val('');
    $('#ape_materno').val('');
    $('#nombres').val('');
    $('#usuario').val('');
    $('#contraseña').val('');
    $('#tipo_usuario').val('Administrador');
    $('#estado').val('Activo');
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

function guardar_usuario(){
    var id_usuario = $('#id_usuario').val();
    var tipo_entrada = $('#tipo_entrada').val();
    var ape_paterno = $('#ape_paterno').val();
    var ape_materno = $('#ape_materno').val();
    var nombres = $('#nombres').val();
    var usuario = $('#usuario').val();
    var contraseña = $('#contraseña').val();
    var tipo_usuario = $('#tipo_usuario').val();

    var parametros = {
        id_usuario: id_usuario,
        tipo_entrada: tipo_entrada,
        ape_paterno: ape_paterno,
        ape_materno: ape_materno,
        nombres: nombres,
        usuario: usuario,
        contraseña: contraseña,
        tipo_usuario: tipo_usuario
    };

    $.ajax({
        url: './ajax/Usuarios/guardar_usuario.php',
        type: 'POST',
        data: parametros,
        success: function(resp){
            toastr.success(resp);
            $('#modal_usuario').modal('hide');
            load(1);
        }
    });
}