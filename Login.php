<!DOCTYPE html>
<?php
require_once 'Controlador/Cusuario.php';
$obj = new Cusuario();
if (isset($_POST["ingresar"])){
    $obj->insertar();
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SmartphoneStore</title>
        <link href="Css/Estilo_login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="" method="POST" id="form">
            <div class="form">
               <h1>
                  INGRESAR AL SISTEMA
               </h1>
            
              <div class="grupo">
                  <input type="email" name="email_usuario" required/>
                  <label>Email</label>
              </div>
              <div class="grupo"> 
                 <input type="password" name="contraseña_usuario" required/>
                 <label>Contraseña</label>
              </div>
            </div>
            <button type="submit" name="ingresar" value="Ingresar">Ingresar</button>
            <br/>
            <br/>
            <a href="index.php"><div>Volver al inicio</div></a>
        </form>
    </body>
</html>
