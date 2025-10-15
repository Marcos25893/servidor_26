<?php

namespace MisFunciones;


function concatenar($str1, $str2)
{
    return $str1 . " " . $str2;
}

function saludo($nombre)
{
    echo "Hola, " . $nombre;
}

function aplicaIva(&$precio, $iva = 0.21)
{
    $precio += $precio * $iva;
}

function eliminarUltimo(&$numeros)
{
    array_pop($numeros);
}

function pintarTable($numeros)
{
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($numeros as $num) {
        echo "<td>" . $num . "</td>";
    }
    echo "</tr></table>";
}