$(document).ready(function(){
    load(1);
});

function load(page){     
    var dni = $("#dni").val();
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'./ajax/registrar_triaje_action.php?action=ajax&page='+page+'&dni='+dni,
        beforeSend: function(objeto){
            $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $('#loader').html('');
        }
    })
}