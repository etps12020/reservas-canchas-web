$(document).ready(function(){
    $("#tblReservas").DataTable();

    function ver_detalle(numeroReserva){
        alert(numeroReserva)
        //location.href=`./?controlador=reservas&accion=detalle_reserva&id=${numeroReserva}`
    }

    
})