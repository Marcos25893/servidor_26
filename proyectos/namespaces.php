<?php

namespace MisFunciones;

require "funciones.php"; // Incluimos el archivo con las funciones


echo concatenar("Hola", "Mundo"); // Output: Hola Mundo
echo "<br>";
saludo("Ana");

echo "<br>";
$precio = 120.44;
aplicaIva($precio);
echo "<br>Precio con IVA: " . $precio; // Output: Precio con IVA: 145.73

echo "<br>";
$valores = array(1, 2, 3, 4, 5);
eliminarUltimo($valores);
//print_r($valores);
pintarTable($valores);




// 