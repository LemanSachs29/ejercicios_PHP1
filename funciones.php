<?php


    //Para pasar el valor por referencia ponemos el simbolo &
    function incrementarValor(&$numero){
        $numero += 10;
    }

    $valor = 5;
    incrementarValor($valor);
    echo "$valor"; //Con & imprime 15, sin eso imprime 5

    function operaciones($a, $b, $tipo = "suma"){
        
        $resultado = 0;

        switch($tipo){
            case "suma":
                $resultado = $a + $b;
                break;
            
            case "resta":
                $resultado = $a - $b;
                break;

            case "multiplicacion":
                $resultado = $a * $b;
                break;

            case "division":
                $resultado = $a / $b;
                break;
            
            default:
                echo "No es una operacion";
                
        }

        return $resultado;
    }

    $resultado = operaciones(4,5,"multiplicacion");
    echo "<br> $resultado";
?>