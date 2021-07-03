<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

abstract class Operacion{
    protected $valor1;
    protected $valor2;
    protected $resultado;
    function carga($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    function muestra(){
        return $this->resultado;
    }

    abstract function operar();

}

class suma extends Operacion{
    function carga($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    function operar(){
        $this->resultado = ($this->valor1 + $this->valor2) ;
        return  $this->resultado;
    }
}

class resta extends Operacion{
    function carga($valor1,$valor2){
        $this->valor1 = $valor1;
        $this->valor2 = $valor2;
    }
    function operar(){
        $this->resultado = ($this->valor1 - $this->valor2) ;
        return  $this->resultado;
    }
}
$suma = new suma;
$suma->carga(5,20);
echo $suma->operar();
echo '<br>';
$resta = new resta;
$resta->carga(7,10);
echo $resta->operar();

?>
    
</body>
</html>