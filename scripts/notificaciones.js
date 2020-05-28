$(document).ready(function(){

    setInterval(() => {
            
        $.ajax({
            url: './?controlador=notificaciones&accion=notificar',
            method:'POST',
            dataType:"json"
        }).done(function(response){
            if(response.mensaje==undefined){
                response.forEach((notify)=>{
                    $.toast({
                        heading:  ` <span  style='color:#000; font-weight:bold;  background:#bce8f1; padding:0.4em;' class='badge'  >#${notify.numReservacion}</span>  
                                    <span style="color:white; font-weight:bold; ">Nueva reserva <span>
                                    <p style="color:white; "><span style="font-weight:bold" >Fecha: </span>${notify.fechaReservacion}</p>
                                    <p style="color:white; font-weight:bold;">${notify.estado}</p>
                         `,
                        text:`<a href="./?controlador=reservas&accion=detalle_reserva&id=${notify.numReservacion}"  style="text-decoration:none;">Ver detalle de reserva</a>`,
                        position: 'top-right',
                        bgColor: "#980a4d" ,
                        loaderBg:'#bbe7fa',
                        icon: 'info',
                        hideAfter: null 
                        
                      });
                })                
            }            
        })
        

    }, 6000);
    
});