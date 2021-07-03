<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

abstract class Persona{
    protected $nombre;
    protected $edad;
     final function carga($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function imprimir(){
        echo 'Nombre: '.$this->nombre;
       echo "<br>";
       echo   'Edad : '.$this->edad;
       echo "<br>";
       
    }
}
final class Empleado extends Persona{
   protected $sueldo;
   function imprimir(){
    parent::imprimir();
    echo '   Sueldo : '.$this->sueldo ;
   }
   
   function carga_sueldo($sueldo){
    $this->sueldo = $sueldo;
   }
}
$empleado = new Empleado;
$empleado->carga("Jordi",26);
$empleado->carga_sueldo(2100);
$empleado->imprimir();

?>
    
</body>
</html>