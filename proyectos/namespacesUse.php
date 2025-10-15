<?php

use MisFunciones as MF;

require "funciones.php"; // Incluimos el archivo con las funciones

$valores = array(1, 2, 3, 4, 5);
MF\eliminarUltimo($valores);
//print_r($valores);
MF\pintarTable($valores);