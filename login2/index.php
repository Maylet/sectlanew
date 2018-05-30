<?php 
include 'logueame.php';

session_start();
if(!isset($_SESSION["user"])){
  header("location:login.php");
}

echo '<h1 align=center>Bienvenido usuario:'.$_SESSION["user"].'</h1>';
echo '<p align=center><a href="logout.php">CERRAR SESION</a></p>';

?>

<html>
    <head>
        <title>Sectla</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
<form name="formreg" action="guardadatos.php" method="POST">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Bienvenido usuario al registro de tus datos <a href="http://bootstrapious.com"></a></h1>

                    <p align=center class="lead">En este apartado podras ingresar la informacion de tu negocio.</p>
                     <p align=center class="lead">Gracias por elegir SecTla.</p>


               <!--    <form id="contact-form" method="post" action="contact.php" role="form">-->

                        <div class="messages"></div>

                        <div class="controls">



                            <div class="row">
                                <div  class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Nombre del propietario *</label>
                                        <input id="form_name" type="text" name="propietario" class="form-control" placeholder="Porfavor inserta el nombre del propietario *" required="required" data-error="propietario">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                              <div class="form-group">
                         <label for="estado_civil" class="col-sm-2 control-label">Tipo de servicio</label>
                            <div class="col-sm-5">
                             <select class="form-control" id="estado_civil" name="servicio">
                            <option value="SOLTERO">Eliga una opcion:</option>
                            <option value="SOLTERO">HOTEL</option>
                            <option value="CASADO">BAR</option>
                            <option value="OTRO">RESTAURANTE</option>
                        </select>
                    </div>
                </div>
                            <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">nombre negocio *</label>
                                        <input id="form_lastname" type="text" name="nombre_negocio" class="form-control" placeholder="Porfavor inserta el nombre *" required="required" data-error="nombre negocio>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Calle/Num *</label>
                                        <input id="form_lastname" type="text" name="calle" class="form-control" placeholder="Porfavor inserta la calle y numero *" required="required" data-error="calle/num">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                             <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Colonia *</label>
                                        <input align=center id="form_lastname" type="text" name="colonia" class="form-control" placeholder="Porfavor inserta la colonia *" required="required" data-error="colonia">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="correo" class="form-control" placeholder="Porfavor inserta tu email *" required="required" data-error="correo">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                 <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telefono</label>
                                        <input id="form_phone" type="tel" name="telefono" class="form-control" placeholder="Porfavor inserta tu telefono" required="required" data-error="telefono">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">imagen</label>
                                        <input id="form_phone" type="file" name="imagen" class="form-control" placeholder="" required="required" data-error="imagen">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Referencias extras *</label>
                                        <textarea id="form_message" name="referencia" class="form-control" placeholder="Escribe alguna referencia de tu negocio *" rows="4" required="required" data-error="referencia"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div align=center class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Enviar datos">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> Instituto Tecnologico de Tlaxiaco <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">SecTla</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
