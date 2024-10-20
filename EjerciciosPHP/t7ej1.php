<?php
/**Define una función llamada incrementarPorValor()que acepte una variable por 
referencia y la incremente en 10. Llama a la función pasando una variable y muestra
su valor antes y después de la llamada para ver el cambio.
 */

 function incrementarPorValor(&$var){
    $var+=10;
}


$num = 10;
var_dump($num);
echo "</br>";
incrementarPorValor($num);
var_dump($num) //20
?>