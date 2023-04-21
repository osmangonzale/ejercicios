<?php

$km = 1000; // division
$cm = 100; //multiplicacion
$mm = 1000; //multiplicacion mm


$metros = readline ("Ingrese los metros-:");

$kilom = $metros / $km;
$centim = $metros * $cm;
$milim = $metros * $mm;

echo " los metros en km son:",$kilom;
echo "Km";

echo "||||";

echo " los metros en centimetros son:",$centim;
echo "cm";

echo "||||";

echo " los metros en milimitros son:",$milim;
echo "mm";

?>