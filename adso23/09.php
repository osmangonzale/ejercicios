<?php

//ROPA
$cantidadp= readline("Ingrese la cantidad de productos ");

$valorpuno = readline("ingrese valor producto uno");
$valorpdos = readline("ingrese valor producto dos");
$valorptres = readline("ingrese valor producto tres");

//
$porcentaje = 0.16;
$suma = $valorpuno+$valorpdos+$valorptres;
$calculari = $suma * $porcentaje;
$valort = $suma + $calculari;
//
echo "La cantidad de productos es:",$cantidadp;
echo "---";
echo "El valor unitario del producto uno es:",$valorpuno;
echo "---";
echo "El valor unitario del producto dos es:",$valorpdos;
echo "---";
echo "El valor unitario del producto tres es:",$valorptres;
echo "---";
echo "El valor valor total mas iva es:",$valort;
echo "---";
echo "El valor total sin es:",$suma;
echo ".";

?>