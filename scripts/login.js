$(document).ready(function(){

    $("#frmLogin").submit(function(){
        event.preventDefault();
        

        let usuario  = $("#user").val();
        let password = $("#pass").val();


        $.ajax({
          url: './?controlador=login&accion=login' ,
          method: 'GET' ,
          data:{
            usuario ,
            password
          },
          dataType:'json' ,      
        }).done(function(response){
          
          if(response.mensaje){
            alert(response.mensaje);
          }else{

            if(response.length){
              let userLogin = response[0];
              alert(`Bienvenido  ${userLogin.nombre}   `)
              location.href="./"; //Redirecciona al index
              
            }else{
              console.log('Respuesta vacia');
            }
            
          }

        });


    });

    
});