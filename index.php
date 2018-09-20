<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba de Php con Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button id="boton1" type="button" class="btn btn-primary">Primary</button>
                </div>
                <div class="col-4">
                    <input id ="cajaNombre" name="usuario_nombre" type="text" placeholder="Usuario">
                <div class="col-4"></div>    
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    
    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function(){
            $('#cajaNombre').hide();
        });
        
        
        $('#boton1').click(function(){
            console.log("aqui si que llega");
             $('#cajaNombre').show(2000);
             $('#nombre').val("why you running!");//se puede ejecutar asi y como abajo es mas sencilla esta con id="nombre")
             $('input[name=usuario_nombre]').val ("why you running?22");//se puede ejecutar asi y como el de arriba es mas sencilla el de arriba con id="nombre" este en vez de id y con el name="usuario_nombre"
             
        });
        
        
    </script>

</html>
