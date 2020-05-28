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
            
            Swal.fire({
              icon: 'error',
              title: '',
              text: response.mensaje
            
            })
          }else{

            if(response.length){
              let userLogin = response[0];

              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                onOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
              
              Toast.fire({
                icon: 'success',
                title: `Bienvenido  ${userLogin.nombre}   `
              }).then(function(){
                location.href="./"; //Redirecciona al index
              })
              
              
              
            }else{
              console.log('Respuesta vacia');
            }
            
          }

        });


    });

    
});