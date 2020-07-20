<?php
require_once 'Conexion.php';
class Cusuario extends Conexion{
    function insertar() {
        $Email=$_POST["email_usuario"];
        $Password=$_POST["contraseña_usuario"];
        $this->sentencia="INSERT INTO usuario VALUES(null, '$Email', '$Password')";
        $ejecucion=$this->ejecutar_sentencia();
        if($ejecucion==true){
            echo '<h2>Login Correcto</h2>';
        }
        else{
            echo '<h2>Login Incorrecto</h2>';
        }
    }
}
