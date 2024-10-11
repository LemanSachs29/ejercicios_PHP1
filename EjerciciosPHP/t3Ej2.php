<?php
/**Ejercicio con Tipos Compuestos (Arrays Multidimensionales)
Crea un array multidimensional llamado $alumnosque contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de materias con sus respectivas calificaciones. Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias. */
?>

<?php
$alumnos = array(
    array("Nombre" => "Juan", "Edad" => 24, "Notas" => array("Prog" => 7, "bd" => 6, "LDM" => 8)),
    array("Nombre" => "Carlos", "Edad" => 19, "Notas" => array("Prog" => 7, "bd" => 6, "LDM" => 8)),
    array("Nombre" => "Maria", "Edad" => 24, "Notas" => array("Prog" => 7, "bd" => 6, "LDM" => 8)),
);

foreach($alumnos as $alumno){
       $nombreAlumno = $alumno["Nombre"];
       $promedio = ($alumno["Notas"]["Prog"] + $alumno["Notas"]["bd"] + $alumno["Notas"]["LDM"] ) / 3;

        echo "$nombreAlumno promedio: $promedio";
}
?>
