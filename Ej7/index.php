<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

//Clase Padre//
class Operacion {
    //Atributos de clase//
    protected $valor1;
    protected $valor2;
    protected $resultado;

    //Constructor de clase//
    public function __construct ($v1, $v2)

    {
        $this->valor1=$v1;
        $this->valor2=$v2;
    }

    //Métodos de clase//
       public function imprimirResultado ()
    {
        echo $this->resultado. "<br>";
    }
}
    //Clase hija final//
    final class Suma extends Operacion{
        //Atributos de clase//
        private $titulo;
        //Constructor de clase//
        public function __construct ($v1, $v2, $tit)
        {
            Operacion::__construct($v1, $v2);
            $this->titulo=$tit;
        }
        //Métodos de clase//
        public function operar()
        {
          echo $this->titulo;
          echo $this->valor1. '+' .$this->valor2. 'es';
          $this->resultado=$this->valor1+$this->valor2;
        }
      }
      //Clase hija//
      // class Resta extends Operacion{
      //     //Métodos de clase//
      //   public function operar()
      //   {
      //     $this->resultado=$this->valor1-$this->valor2;
      //   }
      // }
      //Creación e inicialización de objetos//
      $suma=new Suma(10,10, 'Suma de valores:' );
      // $suma->cargar1(10);
      // $suma->cargar2(10);
      $suma->operar();
      // echo 'El resultado de la suma de 10+10 es:';
      $suma->imprimirResultado();
      // $resta=new Resta();
      // $resta->cargar1(10);
      // $resta->cargar2(5);
      // $resta->operar();
      // echo 'El resultado de la diferencia de 10-5 es:';
      // $resta->imprimirResultado();
      
?>
    
</body>
</html>