<?php
/**Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza
 *  una estructura if, elseif, elsepara imprimir un mensaje diferente según la 
 * edad: "Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto"
 * (36-65), "Eres alcalde" (> 65). */



//Qutar comentario a la linea con la que se desee probar.

//$edad = 15; //menor de edad
//$edad = 17; //menor de edad
//$edad = 18; //adulto joven
// $edad = 25; //adulto joven
// $edad = 35; //adulto joven
// $edad = 36; //adulto
// $edad = 46; //adulto
// $edad = 64; //adulto
// $edad = 65; //alcalde
// $edad = 66; //alcalde


if($edad < 18){
    echo "Eres menor de edad";
}else if ($edad >= 18 And $edad < 36){
    echo "Eres un adulto joven";
}else if($edad >= 36 And $edad <65){
    echo "Eres adulto";
}else{
    echo "Eres alcalde";
}

?>