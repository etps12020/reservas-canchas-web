$(document).ready(function(){



    $("#frmIngresarUsuarios").submit(function(){
        event.preventDefault();

        let form  =  $(this).serialize();

        $.ajax({
            url: "./?controlador=usuarios&accion=ingresarUsuario" , 
            method: "POST" ,
            data: form , 
            dataType: "json"
        }).done(function(response){
            if(response.mensaje==undefined){
                let usuario = response[0];
                if(usuario.usuario){
                    Swal.fire(
                        'Exito!',
                        `Usuario: ${usuario.usuario} \nPassword: ${usuario.password} \nFecha Creacion: ${usuario.fechaCreacion}  `,
                        'success'
                    )
                    $("#frmIngresarUsuarios")[0].reset();
                }                            
            }else{                
                Swal.fire(response.mensaje)
            }
        });


    })
});