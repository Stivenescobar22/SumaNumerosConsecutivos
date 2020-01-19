<?php 

   if(isset($_POST["btncalcular"])){
        
    require_once 'suma.php';

    $sumaC = new Suma();
    
    $valor = $_POST["txtvalor"];

    $sumaC->setNumero($valor);

    $sumaC->consecutivos();


   }else{

    echo "No me hackees";
   }


?>