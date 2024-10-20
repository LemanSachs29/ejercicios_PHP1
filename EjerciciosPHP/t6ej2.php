<?php
/** Define un array multidimensional que contiene la información de tres productos:
 * nombre, precio, y cantidad_en_stock. Usa un bucle foreach para calcular el
 * valor total de cada producto (precio * cantidad_en_stock) y muestra los
 * resultados.
 */

$productos = [
    ["nombre" => "masaPizza", "precio" => 4, "cantidad" => 30],
    ["nombre" => "tomate", "precio" => 3, "cantidad" => 25],
    ["nombre" => "mozzarella", "precio" => 5, "cantidad" => 40]
];

foreach($productos as $producto) {
    $valorTotal = $producto["precio"] * $producto["cantidad"];
    echo "Valor total de " . $producto["nombre"] . " es " . $valorTotal . "<br>";
}
?>
