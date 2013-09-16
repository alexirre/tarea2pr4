<?php
 $peso=10;
 $dolar=15;
 $opc="pesos";
 $cantidad=90;
 $cambio;
 echo "La cantidad es ".$cantidad."<br/>";
 $cambio=$dolar*$cantidad;
 echo "Si la cantidad son dolares equivale a ".$cambio." PESOS<br/>";
 $cambio=$cantidad/$dolar;
 echo "Si la cantidad son pesos equivale a ".$cambio." DOLARES<br/>";
?>
