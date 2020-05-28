$(document).ready(function(){

    let imagen=$("#imgCancha").attr("src");

    var imagesPreview = function(input) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    
                    var canvas = document.createElement("canvas");
                    var ctx = canvas.getContext("2d");
            
                    canvas.width = 200; // nuevo ancho
                    canvas.height = 100; // nuevo alto
                    var image = new Image();                                
                    image.onload = function(e) {
                        ctx.drawImage(image, 
                            0, 0, image.width, image.height, 
                            0, 0, canvas.width, canvas.height
                        );
                        // create a new base64 encoding
                        var resampledImage = new Image();
                        let url =canvas.toDataURL();
                        resampledImage.src = url;
                        imagen = url;
                        $("#imgCancha").attr("src" , url);
                        
                    };
                    
                    image.src =  event.target.result; 

                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };
    
    $('#imagenAdjunta').on('change', function() {
        imagesPreview(this);      
    });

    $("#frmEditarCancha").submit( function(){
        event.preventDefault();

        let form = $(this).serializeArray();
        let base64String = imagen.substr( imagen.indexOf(",")+1 );
        form.push({name: 'imagen', value: base64String});
        
        $.ajax({
            url: './?controlador=canchas&accion=actualizar' ,
            method: 'POST',
            data: form ,
            dataType:'json'
        }).done(function(response){
            if(response.mensaje!=undefined){
                if(response.mensaje=="Datos actualizados"){
                    Swal.fire(
                        'Exito!',
                         response.mensaje,
                        'success'
                    )
                }else{
                    Swal.fire(response.mensaje)
                }
            }
        });
    
    });


})