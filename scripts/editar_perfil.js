$(document).ready(function(){


    $("#frmEditarPerfil").submit(function(){
        event.preventDefault();
        let form  = $(this).serialize();
        $.ajax({
            url: "./?controlador=usuarios&accion=actualizarPerfil" , 
            method:'POST',
            data: form ,
            dataType:'json'  
        }).done(function(response){
            if(response.mensaje!=undefined){
                alert(response.mensaje);
            }
        });

    });



});