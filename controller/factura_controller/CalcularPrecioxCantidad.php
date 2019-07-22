 <?php
$cantidad=$_POST['cantidadxproducto'];
$precio = $_POST['precioproducto'];

if(isset($_POST['precioxcantidad']))
{
    echo ($cantidad*$precio); 
}
 
?>
