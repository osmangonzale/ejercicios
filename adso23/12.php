<?php

$ladoa = readline ("ingrese el valor lado (A):");
$ladob = readline ("ingre el valor lado (B):");

$a = $ladoa*$ladoa;
$b = $ladob*$ladob;

$suma= $a+$b;

$hipotenusa = sqrt($suma);

echo " la hipotenusa es:",$hipotenusa;

?>