$(document).ready(function(){


    $("#frmActualizarReserva").submit(function(){
        event.preventDefault();

        let form  = $(this).serialize();

        $.ajax({
            url: './?controlador=reservas&accion=actualizar_reserva',
            method:'POST',
            data: form , 
            dataType:'json'
        }).done(function(response){
            if(response.mensaje){
                alert(response.mensaje);
            }
        });


    });



});