$(document).ready(function(){
    $("#frmIngresarUsuarios").submit(function(){
        event.preventDefault();

        let form  =  $(this).serialize();

        $.ajax({
            url: "./?controlador=usuarios&accion=ingresarUsuario" , 
            method: "POST" ,
            data: form , 
            dataType: "text"
        }).done(function(response){
            if(response.mensaje==undefined){
                let usuario = response[0];
                alert(`Usuario: ${usuario.usuario} \nPassword: ${usuario.password} \nFecha Creacion: ${usuario.fechaCreacion}  ` )
            }
        });


    })
});