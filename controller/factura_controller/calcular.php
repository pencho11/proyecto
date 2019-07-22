<?php

require_once 'CalcularPrecioxCantidad.php';


sleep(1);
 
$objMultiplicacion = new CantidadxPrecio();


$numero1 = $_POST["cantidadxproducto"];
$numero2 = $_POST["precioproducto"];
 

if(isset($_POST["btnprecioxcantidad"])){
    $objMultiplicacion->setNumero1($numero1);
    $objMultiplicacion->setNumero2($numero2);
    
    echo $objMultiplicacion->multiplicarValores();
    
}
 