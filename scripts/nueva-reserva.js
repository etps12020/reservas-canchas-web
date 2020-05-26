$(document).ready(function(){


    let idHorario=0;

    $("#frmNuevaReserva").submit(function(event){
        event.preventDefault();

        let dui  =  $("#dui").val();
        let tipoReserva = $("#tipoReserva").val();
        let cancha = $("#cancha").val();
        let fecha =  $("#fecha").val();

        if(dui  ==""){
            alert("Seleccione un estudiante")
        }
        else if(  tipoReserva  ==""){
            alert("Seleccione un tipo de reserva")
        }else if(  cancha  == ""  ){
            alert("Selecciona una cancha");
        }else if( fecha ==""){
            alert("Selecciona una fecha");
        }else if( idHorario == 0 ){
            alert("Selecciona una horario");
        }else{

            $.ajax({
                url: './?controlador=reservas&accion=ingresar_reserva'  ,
                method: 'POST',
                data: {
                    tipoReserva , 
                    cancha , 
                    fecha , 
                    idHorario
                } , 
                dataType: "json"                 
            }).done(function(response){

                if(response.mensaje!=undefined){
                    alert( response.mensaje   );
                }else{
                    console.log(response);
                }                
            });
        }

    });


    $("#tblDuis").DataTable();

    $("#buscarUsuarios").click(function(){
        $("#usuariosModal").modal("show");
    });

    $(".row-dui").click(function(event){

        let dui  = $(this).data("dui");
        $("#dui").val(dui);

        $("#usuariosModal").modal("hide");

    });


    $("#edificio").change(function(){
        let idEdificio = $(this).val();

        $.ajax({
            url:"./?controlador=reservas&accion=consultar_canchas" , 
            method:"GET" , 
            data:{
                idEdificio
            },
            dataType:"json" 
        }).done(function(response){
    
            let canchasHTML = `<option value="">--Seleccione--</option>`;

            if(response.mensaje== undefined){

                response.forEach( (cancha)=>{
                    canchasHTML+=generateOptionCancha(cancha);
                });
            }else{                
                alert(response.mensaje);
            }

            $("#cancha").html(canchasHTML);

        });
    });


    $("#fecha").change(function(){
        
        let fecha = $(this).val();
        let cancha = $("#cancha").val();
        idHorario = 0;
        $.ajax({
            url:"./?controlador=horarios&accion=consultar_horarios", 
            method:"GET",
            data:{
                fecha ,
                cancha
            },
            dataType:"json" 
        }).done(function(response){

            let horasHTML = ``;

            if(response.mensaje==undefined){
                response.forEach(  (hora)=>{
                    horasHTML+= generateHora(hora);
                })
            }else{
                alert(response.mensaje);
            }

            $(".horarios").html(horasHTML);
        });

    }); 

    $("body").on("click" ,".hora-container", function(event){
        $(".hora-container").removeClass("hora-seleccionada");
        $(this).addClass("hora-seleccionada");        
        idHorario =   $(this).attr("id").substring(1);
    });


    generateOptionCancha=(cancha)=>{
        return `<option value="${cancha.cancha}">${cancha.nombre}</option>`;
    }

    generateHora=(hora)=>{
        let classDisponibilidad= (hora.estado=="DISPONIBLE") ? "hora-disponible" : "hora-ocupada";
        return `
        <div class="hora-container ${classDisponibilidad}"  id="H${hora.Horario}" >
            <div class="hora">
                ${hora.horaInicio}
            </div>
            <div class="estado">
                ${hora.estado}
            </div>
        </div>             
        `;
    } 


    

});