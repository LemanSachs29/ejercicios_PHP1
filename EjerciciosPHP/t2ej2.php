<?php

/**Ejercicio de Comentarios y Buenas Prácticas
Escribe un script en PHP que contenga una función de llamada
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
con comentarios detallados, incluyendo la explicación de la función, los parámetros y
cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
general del script y comentarios de una sola línea para detallar las operaciones.
*/

?>

<?php
/** 
 *  Función que calcula el área del rectángulo. Devuelve un dato numérico.
 * parámetros:
 *     ancho: longitud del ancho del rectángulo. Debe ser numérico.
 *     alto: altura del rectángulo. Debe ser numérico.
 */
function calcularAreaRectangulo($ancho, $alto){
return $alto * $ancho; //devuelve el área del rectángulo.
}

?>