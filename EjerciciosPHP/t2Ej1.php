<?php

/**Ejercicio con Tipos y Conversión
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato. */

?>

<?php

$strNum = "25";

echo var_dump($strNum); //string

$strNum = (int) $strNum;

echo var_dump($strNum); //int

$resultado = 25 + $strNum;

echo $resultado;
?>

