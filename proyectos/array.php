<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    echo "Hola, mundo. Estamos en proyectos/array.php";

    $numeros = array(1, 2, 3, 4, 5); //Array indexado
    $nombres = ["Marcos", "Ana", "Luis"]; //Array indexado

    echo "<br> El primer número es: " . $numeros[0];
    echo "<br> El segundo nombre es: " . $nombres[1];

    $asociativo = array(
        "nombre" => "Marcos",
        "edad" => 30,
        "ciudad" => "Madrid"
    ); //Array asociativo

    echo "<br> El nombre es: " . $asociativo["nombre"];
    ?>
</body>
</html>