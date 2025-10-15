<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
    /*9. Realiza un programa que pinte 5 círculos en horizontal cada uno de un color
    diferente aleatorio.
    Puedes usar la función SVG circle para dibujar los círculos.*/

    for($i = 0; $i < 5; $i++){

        $numero = rand(0, 0xFFFFFF);
        $color = sprintf("#%06X", $numero);
        echo '<svg height="100" width="100"> 
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="' . $color .'" /> 
            </svg>';
    }
/*
    for($i = 0; $i < 5; $i++){

        $c1 = rand(0, 255);
        $c2 = rand(0, 255);
        $c3 = rand(0, 255);
        echo '<svg height="100" width="100"> 
                <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="rgb("' . $c1 . '","' . $c2 . '","' . $c3 .'")" /> 
            </svg>';
    }
*/
    ?>
</body>
</html>

