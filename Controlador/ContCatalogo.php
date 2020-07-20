<?php
require_once 'Conexion.php';
class ContCatalogo extends Conexion {
    function insertar() {
        $Imagen=$_POST["imagen"];
        $Nombre=$_POST["nombre"];
        $Precio=$_POST["precio"];
        $Stock=$_POST["stock"];
        $this->sentencia="INSERT INTO catalogo VALUES(null, '$Imagen', '$Nombre', '$Precio', '$Stock')";
        $ejecucion=$this->ejecutar_sentencia();
        if($ejecucion==true){
            echo '<center><h2>Producto ingresado</h2></center>';
        }
        else{
            echo '<center><h2>Producto no ingresado</h2></center>';
        }
 }
}