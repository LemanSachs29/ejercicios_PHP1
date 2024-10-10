<?php

/**Ejercicio con Variables y Constantes Complejas
Declara una llamada constante GRAVITYcon el valor 9.8. Luego, crea una función
que acepta el nombre de un planeta y, si el planeta es "Tierra", multiplica un valor de
masa ingresado por la gravedad (utilizando la constante). Usa variables para
almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada. */

?>

<?php
define("GRAVITY", 9.8);
function($nPlaneta, $masa){
    $fuerza = null;
    if (strtolower($nPlaneta) == "tierra"){
        $fuerza = $masa * GRAVITY;
    }

    return $peso;
}
?>