<?php
/** Ejercicio con Operadores de Comparación y Lógicos Declara tres variables: 
 * $a, $by $c, con valores numéricos diferentes. Utilice operadores de 
 * comparación y lógicos para verificar si $aes mayor que $b y si $ces menor que
 *  $a. Imprima un mensaje que indique si ambas condiciones son verdaderas o si 
 * alguna es falsa. */


 $a = 7;
 $b = 15;
 $c = 3;

 if($a > $b and $c < $a){
    echo "Ambas condiciones son verdaderas";
 }else {
    echo "Alguna de la condiciones es falsa";
 }
?>