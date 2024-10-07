<?php




//Definir una variable nombre y asignarle tu nombre:
$nombre = "Juan";

//Imprimir un saludo utilizando echo:
echo "Hola, $nombre!";

echo "</br>";

define("PI", 3.1416);

echo "La constante PI = " . PI; //Imprime 3.1416

echo "</br>";

$MaYuSCuLaS = "consonantes en mayúscula";
$mAyUscUlAs = "vocales en mayúscula";

echo "</br>";

echo "MaYuSCuLaS = $MaYuSCuLaS";
echo "</br>";
echo "mAyUscUlAs = $mAyUscUlAs";


//Creación de una clase

class Persona {
    public $nombre;
    public $edad;
}

$persona = new Persona();
$persona -> nombre = "Juan";
$persona -> edad = 19;
echo "</br>";
echo "</br>";

echo "El nombre de la persona es: " . $persona->nombre;
echo "</br>";
echo "$persona->nombre  tiene  $persona->edad anos.";


echo "</br>";
//Ejercicio 1

/*Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().*/ 


$entero = 7;
$flotante = 4.2545;
$cadena = "Las tortillas de patata son todas redondas.";
$esVerdad = false;


echo "vble entero: " . var_dump($entero);
echo "</br>";
echo "vable flotante" . var_dump($flotante);
echo "</br>";
echo "vable cadena: " . var_dump($cadena);
echo "</br>";
echo "vble esVerdad: " . var_dump($esVerdad);


//Define una constante llamada NOMBRE_CURSO con el valor "Programación PHP" y muestra su valor en pantalla.
echo "</br>";
define("NOMBRE_CURSO", "Programación PHP");
echo NOMBRE_CURSO; // Imprime Programación PHP
echo "</br>";
//Crea una función que reciba un array de números y devuelva la suma de todos sus elementos. Llámala con un array de ejemplo y muestra el resultado.
//Declara una variable con el valor null y utiliza la función is_null() paraverificar si la variable tiene valor null.




//Ejericio 2

//1. Crea un array de 5 elementos (puede ser de frutas, nombres o números).

$ejercicios = array("press de banca", "sentadilla", "peso muerto", "dominadas", "press militar");

//2. Recorre el array con un bucle foreach y muestra cada valor.

foreach ($ejercicios as $valor){
    echo $ejercicios[$valor]; 
}


//3. Modifica uno de los elementos del array y vuelve a mostrar el array.
//4. Cuenta el número de elementos en el array.
//5. Crea un segundo array con otros 3 elementos y únelos al primero.
//6. Elimina un elemento del array combinado.
//7. Convierte el array final en una cadena de texto usando implode() y muéstralo en pantalla.
?>