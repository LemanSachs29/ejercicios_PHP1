<?php
/**Define una constante TASA_INTEREScon el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado. */
?>
<?php

$capital = $_POST['capital'];

echo '<form  method="POST"> 
      Name: <input type="text" name="capital"><br>
      <input type="submit">
      </form>';

define("TASA_INTERES", 0.05);

        //Capital final = Capital inicial * interés * nAños
$interes = $capital * TASA_INTERES * 1;
echo "Interés generado: $interes";

?>