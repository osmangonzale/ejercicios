<?php

$dias = readline ( "Ingrese la cantidad de dias trabajados:");

$salario = 10000;

$salariopago = $salario * $dias;

$pension = $salariopago * 0.10;
$salud = $salariopago * 0.15;
// descuento pension y salud
$descuentop = $salariopago-$pension;
$descuentos = $salariopago-$salud;
// salario a pagar
$descuentops = $descuentop+$descuentos-$salariopago;
//Imprimir
//echo "El salario a pagar es:",$salarioap;
echo " El salario a pagar al empleado es:",$descuentops;

?>