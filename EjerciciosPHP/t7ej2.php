<?php
/**Crea una función llamada convertirTemperatura()que acepte dos
argumentos: una temperatura y una escala ( "C"o "F"). Por defecto, convierte de
Celsius a Fahrenheit. La función debe devolver la temperatura convertida. 
Utilice la fórmula: (C * 9/5) + 32. */

convertirTemperatura($tmp, $escala = "C"){
     $escala = strtoupper($escala);
     $rdoConversion = null;

    //Lanzamos excepción en caso de que el parámetro tmp no sea un número
    if(is_nan($tmp)){
        throw new Exception("tmp debe ser un número.");
    }
    //Filtramos para usar valor por defecto en caso de parámetro erroneo
    if($escala != "C" And $escala != "F" ){
        $escala = "C"
    }
    //Conversor
    if($escala == "C"){
        $rdoConversion = ($tmp * 9/5) + 32;
    }else{
        $rdoConversion = ($temp - 32) * 5 / 9;
    }
    //Devolvemos resultado de la conversión
    return $rdoConversion;
}


try {
    echo convertirTemperatura(25, "C") . " °F"; // Convierte 25 °C a Fahrenheit
    echo "<br>";
    echo convertirTemperatura(77, "F") . " °C"; // Convierte 77 °F a Celsius
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
