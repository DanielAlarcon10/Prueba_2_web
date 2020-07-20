<!DOCTYPE html>
<?php
require_once 'Controlador/ContCatalogo.php';
$obj = new ContCatalogo();
if (isset($_POST["agregar"])){
    $obj->insertar();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SmartphoneStore</title>
        <link href="Css/Estilo_Catalogo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form action="" method="POST" id="form">
            <div class="form">
               <h1>
                  Ingreso Productos
               </h1>
            
              <div class="grupo"> 
                 <input type="text" name="imagen" required/>
                 <label>Imagen</label>
              </div>
              <div class="grupo">
                  <input type="text" name="nombre" required/>
                  <label>Nombre</label>
              </div>
              <div class="grupo"> 
                 <input type="text" name="precio" required/>
                 <label>Precio</label>
              </div>
              <div class="grupo"> 
                 <input type="text" name="stock" required/>
                 <label>Stock</label>
              </div>
            </div>
            <button type="submit" name="agregar" value="Agregar">Agregar</button>
            <br/>
            <br/>
            <a href="index.php"><div>Volver al inicio</div></a>
        </form>
    </body>
</html>
