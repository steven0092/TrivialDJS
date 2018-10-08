<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Prueba de Php con Bootstrap</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:#cccc66">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color:white;">EJEMPLO DE INICIO DE SESION EN PHP</h2>
                    
                </div>
                 </div>
                
              
                <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/>
                    <br/>
                    <form action="index2.php">
                        <input id ="cajaNombre " class="form-control" type="text" placeholder="Usuario" required="required">
                         <br/>
                         <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña"  required="required">
                         <br>
                         <button id="boton1"  class="btn btn-primary btn-block" type="submit">Entrar</button>
                         <br>
                         <p>        
                        <input class="form-control" data-validation = "date" data-validation-format = "yyyy-mm-dd" placeholder="Fecha">  
                         </p>
                     </form>
                      </div>
                 <div class="col-4"></div>    
                </div>
            </div>
        
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src = "//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js" ></ script> 
        
    <script>
        //document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $(document).ready(function(){
            $('#cajaNombre').hide();
        });
        
        $.validate({
            lang: 'es'
        });
        
        
             $('#boton1').click(function(){
            console.log("aqui si que llega");
             $('#cajaNombre').show(2000);
//             $('#nombre').val("why you running!");//se puede ejecutar asi y como abajo es mas sencilla esta con id="nombre")
//             $('input[name=usuario_nombre]').val ("why you running?22");//se puede ejecutar asi y como el de arriba es mas sencilla el de arriba con id="nombre" este en vez de id y con el name="usuario_nombre"
             
        });
        
        
    </script>

</html>
