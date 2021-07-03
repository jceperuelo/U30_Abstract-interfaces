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
    function cargadatos($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function imprimir(){
       echo 'Nombre: '.$this->nombre;
       echo "<br>";
       echo   'Edad : '.$this->edad;
    }
}
class Empleado extends Persona{
   protected $sueldo;
}
$empleado = new Empleado;
$empleado->cargadatos("Jordi",26);
$empleado->imprimir();

?>
    
</body>
</html>