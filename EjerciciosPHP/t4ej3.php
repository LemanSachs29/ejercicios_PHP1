<?php
/**Defina una variable llamada $calificacionque contenga un valor numérico.
Utilice un operador ternario anidado para determinar si la calificación es
"Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
Imprime el resultado. */


$nota = 100;
$calificacion = ($nota >= 90) ? "Sobresaliente" : (($nota <= 89 And $nota >= 70) ? "Buena" : "Necesita mejorar");
echo $calificacion;
?>
