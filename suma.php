<?php 


class suma{

    private $numero;

    public function __construct(){
        $this->numero = 0;
         
    }


    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($valor){
        $this->numero = $valor;

    }


    public function consecutivos(){
       
        
        $b = 0;

      for($i = 1; $i <= $this->getNumero(); $i++){
        
        echo $i . " ";

        $b = $b + $i;
       
      }

      echo "la suma de los numeros es: " . $b;
    }
      



    
}







?>