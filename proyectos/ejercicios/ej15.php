<?php

    /*
    Crea un array de nombres de clientes, que contengan nombre de la empresa de al
    menos 5 clientes.
    [“Cosentino”, “Garciden”, “Deretil”, “Makito”, “Globomatik”]
    A continuación, crea una función llamada:
    convierteClientes($nombres, $opcion)
    donde el primer parámetro sea el array con los nombres de los clientes, y el
    segundo parámetro pueden ser tres opciones:
    - “L”: transforma todos los strings del array $nombres a minúsculas y lo
    devuelve.
    - “U”: transforma todos los strings del array $nombres a mayúsculas y lo
    devuelve.
    - “M”: transforma todos los strings del array $nombres de modo que la
    primera letra de cada nombre de empresa sea mayúscula y el resto
    minúscula. Lo devuelve.
    Muestra un ejemplo de la función con cada una de las diferentes opciones.
    */

    function convierteClientes($nombres, $opcion){
        $cantidad = count($nombres);
        if($opcion == 'L'){
            for($i=0; $i<$cantidad; $i++){
                $nombres[$i] = strtolower($nombres[$i]);
                echo $nombres[$i] . ", ";
            }
        }elseif($opcion == 'U'){
            for($i=0; $i<$cantidad; $i++){
                $nombres[$i] = strtoupper($nombres[$i]);
                echo $nombres[$i] . ", ";
            }
        }elseif($opcion == 'M'){
            for($i=0; $i<$cantidad; $i++){
                $nombres[$i] = strtolower($nombres[$i]);
                $nombres[$i] = ucfirst($nombres[$i]);
                echo $nombres[$i] . ", ";
            }

        }else{
            echo "La opcion " . $opcion . " no es valida";
        }

        return $nombres;

    }

    $clientes = ["Cosentino", "Garciden", "Deretil", "Makito", "Globomatik"];

    $opcion = 'L';


    convierteClientes($clientes, $opcion);




?>