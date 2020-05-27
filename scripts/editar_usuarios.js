$(document).ready(function(){

    $('#frmEditarUsuarios').submit(function(){
        event.preventDefault();        
        let form  = $(this).serialize();

        let password = $("#password").val();
        let confirmacion = $("#confirmacion").val();

        if(password!=confirmacion){
            alert("Las contraseñas proporcionadas no coinciden")
        }else{
            $.ajax({
                url: './?controlador=usuarios&accion=actualizar' , 
                method:'POST' , 
                data: form , 
                dataType:'json'     
            }).done(function(response){            
                if(response.mensaje!=undefined){
                    alert(response.mensaje);
                }
            });
        }
    });


});