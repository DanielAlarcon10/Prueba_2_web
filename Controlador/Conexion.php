<?php
class Conexion {
    private $Servidor='localhost';
    private $usuario='root'; 
    private $pass='';
    private $bd='login_usuario';
    private $con;
    public $sentencia;
    
    private function abrir_conexion() {
        $this->con=new mysqli($this->Servidor, $this->usuario, $this->pass, $this->bd);
    }
    
    private function cerrar_conexion() {
         $this->con->close();   
    }
    
    public function ejecutar_sentencia() {
        $this->abrir_conexion();
        $resultado=$this->con->query($this->sentencia);
        $this->cerrar_conexion();
        return $resultado;
    }
}
