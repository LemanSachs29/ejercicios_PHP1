<?php
/**Define dos arrays: $array1con los valores "rojo", "verde", "azul", y
$array2con "verde", "amarillo", "azul". Usamos array_diff()para
determinar qué colores están en $array1pero no en $array2. Imprime el
resultado. */


$array1 = Array("rojo", "verde", "azul");
$array2 = Array("verde", "amarillo", "azul");
$resultadoComparacion = array_diff($array1, $array2);

print_r($resultadoComparacion);

?>