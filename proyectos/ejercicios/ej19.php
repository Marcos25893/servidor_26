<?php

    /*Mejora el programa anterior de tal manera que el mensaje original lo divida
    primero en un array de palabras considerando el espacio en blanco como
    separador únicamente. A continuación, debe poner cada palabra del revés
    (hola ->aloh). Seguidamente encriptará cada palabra usando la función del
    ejercicio anterior. Finalmente devolverá un string con cada palabra encriptada
    añadiendo un espacio en blanco entre cada palabra. El desencriptador hará lo
    contrario (y no digo más). Muestra el programa funcionando encriptando y
    desencriptando.*/


    function encriptar($separado, $clave){

        $char;
        $encriptado= "";
        
        foreach($separado as $palabra){
            $palabra = strrev($palabra);

            for($i=0; $i<strlen($palabra); $i++){
                $char = $palabra[$i];
                $char = ord($char);
                $char = $char + $clave;
                $char = chr($char);
                $encriptado = $encriptado . $char;
            }

            $encriptado = $encriptado . " ";
        }
        return $encriptado;
    }



    function desencriptar($mensaje_encriptado, $clave){

        $separador = explode(" ", $mensaje_encriptado);
        $char;
        $desencriptado= "";

        foreach ($separador as $palabra){
            $palabra = strrev($palabra);

            
            for($i=0; $i<strlen($palabra); $i++){
                $char = $palabra[$i];
                $char = ord($char);
                $char = $char - $clave;
                $char = chr($char);
                $desencriptado = $desencriptado . $char;
            }
            $desencriptado = $desencriptado . " ";
        }

        return $desencriptado;
    }

    $mensaje = "Esto es un secreto";
    $clave = 3;
    $separador = explode(" ", $mensaje);

    $mensaje_encriptado = encriptar($separador, $clave);
    $mensaje_desencriptado = desencriptar($mensaje_encriptado, $clave);



    echo "El mensaje encriptado es: " . $mensaje_encriptado;

    echo "<br>El mensaje desencriptado es: " . $mensaje_desencriptado;


?>