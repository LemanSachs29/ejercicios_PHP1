<?php
/**Crea un array llamado $numerosque contiene los números del 1 al 10. Luego, usa
un bucle foreachpara recorrer el array y multiplicar cada número por 2. Almacena
los resultados en un nuevo array y muestra ambos arrays. */

$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

$numerosX2 = array();

foreach($numeros as $num){
     $numX2 = $num * 2;
     array_push($numerosX2, $numX2);
}

print_r($numeros); //1, 2, 3, 4, 5, 6, 7, 8, 9, 10
echo"</br>";
print_r($numerosX2);//2, 4, 6, 8, 10, 12, 14, 16, 18, 20



?>