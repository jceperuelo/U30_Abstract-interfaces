<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
   class Persona{
    protected $nombre;
    protected $edad;
     final function carga($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function retornar_nombre(){
       return $this->nombre;
    }
    function retornar_edad(){
        return $this->edad;
     }
     public function __clone()
     {
       $this->edad= $this->edad+1;
     }

}
$persona = new Persona;
$persona->carga("Jordi", 26);
$clonar = clone $persona;
echo $clonar->retornar_nombre();
echo $clonar->retornar_edad();
?>
    
</body>
</html>
